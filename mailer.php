<?php
// On indique qu'on renvoie du JSON
header('Content-Type: application/json');
// 1. Sécurité : On n'accepte que les requêtes POST (envoyées par le terminal)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}
// 2. On récupère les données envoyées par le JavaScript
$input = json_decode(file_get_contents('php://input'), true);
$visitorEmail = $input['from'] ?? 'guest@port25.sh';
$messageContent = $input['message'] ?? 'Message vide.';
$apiUser = 'USER';
$apiKey = 'APIKEY';
// 4. Préparation du payload pour Tipimail
$data = [
    'to' => [
        [ 'address' => 'alex@port25.sh' ] // Ton adresse où tu vas recevoir le mail
    ],
    'msg' => [
        'from' => [
            'address' => 'contact@notification.port25.sh',
            'personalName' => 'Terminal port25.sh'
        ],
        // Le replyTo permet de faire "Répondre" directement au visiteur depuis ta boite mail
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
