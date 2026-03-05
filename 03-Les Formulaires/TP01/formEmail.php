<?php
if (!empty($_POST['email'])){
    echo $_POST['email'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le User-Agent
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Détecter le navigateur avec une fonction simple
    $navigateur = 'Inconnu';

    if (preg_match('/MSIE|Trident|Edge/', $user_agent)) {
        $navigateur = 'Internet Explorer ou Microsoft Edge';
    } elseif (str_contains($user_agent, 'Firefox')) {
        $navigateur = 'Mozilla Firefox';
    } elseif (str_contains($user_agent, 'Chrome')) {
        $navigateur = 'Google Chrome';
    } elseif (str_contains($user_agent, 'Safari')) {
        $navigateur = 'Safari';
    } elseif (preg_match('/Opera|OPiOS/', $user_agent)) {
        $navigateur = 'Opera';
    } elseif (str_contains($user_agent, 'Edge')) {
        $navigateur = 'Microsoft Edge';
    }

    // Afficher le résultat
    echo "<p><strong>Navigateur détecté :</strong> " . htmlspecialchars($navigateur) . "</p>";
    echo "<p><strong>Chaîne User-Agent :</strong> " . htmlspecialchars($user_agent) . "</p>";
} else {
    echo "<p>Aucune donnée reçue.</p>";
}
