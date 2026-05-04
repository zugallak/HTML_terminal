<?php
// On indique qu'on renvoie du JSON
header('Content-Type: application/json');

// --- 1. SÉCURITÉ : RATE LIMITING (Limitation d'envoi par IP) ---
$userIp = $_SERVER['REMOTE_ADDR'];
$cooldownSeconds = 60; // Temps d'attente imposé : 120 secondes (2 minutes)

// On crée un petit fichier texte temporaire pour chaque IP
$rateLimitFile = sys_get_temp_dir() . '/port25_ratelimit_' . md5($userIp) . '.txt';

if (file_exists($rateLimitFile)) {
    $lastRequestTime = (int)file_get_contents($rateLimitFile);
    
    if (time() - $lastRequestTime < $cooldownSeconds) {
        $remainingTime = $cooldownSeconds - (time() - $lastRequestTime);
        http_response_code(429); // 429 Too Many Requests
        
        // On renvoie une erreur style SMTP 4xx (Erreur temporaire)
        echo json_encode([
            'status' => 'error', 
            'details' => "451 4.7.1 Rate limit exceeded. Try again in {$remainingTime}s."
        ]);
        exit;
    }
}

// On enregistre l'heure de la tentative actuelle
file_put_contents($rateLimitFile, time());
// ---------------------------------------------------------------


// 2. Sécurité : On n'accepte que les requêtes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

// 3. On récupère les données envoyées par le JavaScript
$input = json_decode(file_get_contents('php://input'), true);
$visitorEmail = $input['from'] ?? 'guest@port25.sh';
$messageContent = $input['message'] ?? 'Message vide.';

$apiUser = 'APIUSER';
$apiKey = 'APIKEY';

// 4. Préparation du payload pour Tipimail
$data = [
    'to' => [
        [ 'address' => 'alex@port25.sh' ]
    ],
    'msg' => [
        'from' => [
            'address' => 'contact@notification.port25.sh',
            'personalName' => 'Terminal port25.sh'
        ],
        'replyTo' => [
            'address' => $visitorEmail
        ],
        'subject' => 'Nouveau message via Telnet Terminal',
        'text' => "Un visiteur a utilisé le terminal pour te contacter :\n\nExpéditeur : " . $visitorEmail . "\n\nMessage :\n" . $messageContent
    ]
];

// 5. Appel cURL vers l'API Tipimail
$ch = curl_init('https://api.tipimail.com/v1/messages/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-Tipimail-ApiUser: ' . $apiUser,
    'X-Tipimail-ApiKey: ' . $apiKey
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 6. Réponse au terminal
if ($httpCode == 200 || $httpCode == 250) {
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'details' => $response]);
}
