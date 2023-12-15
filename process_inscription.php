<?php
// process_inscription.php

// Inclure les fichiers WordPress si nécessaire
// Exemple : require_once('wp-load.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    // Récupérez d'autres champs du formulaire

    // Effectuez des vérifications de sécurité si nécessaire

    // Effectuez l'inscription dans la base de données
    // Utilisez les fonctions WordPress appropriées pour l'inscription

    // Redirigez l'utilisateur après l'inscription
    header("Location: inscription_reussie.php");
    exit();
}
?>