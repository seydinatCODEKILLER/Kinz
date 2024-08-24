<?php
// Définir les chemins des contrôleurs
require_once('src/controllers/users/homeController.php');
require_once('src/controllers/users/contactController.php');
require_once('src/controllers/users/chambreController.php');
require_once('src/controllers/users/proposController.php');
require_once('src/controllers/users/detailsController.php');
// Ajoutez d'autres contrôleurs ici si nécessaire

try {
    // Vérifier si une action est spécifiée dans l'URL
    if (isset($_GET["action"]) && $_GET["action"] !== '') {
        $action = $_GET["action"];

        // Déterminer quelle fonction appeler en fonction de l'action
        switch ($action) {
            case 'contact':
                Contact();
                break;
            case 'chambre':
                Chambre();
                break;
            case 'detail':
                detailChambre();
                break;
            case 'propos':
                Apropos();
                break;
            default:
                throw new Exception("Erreur 404 : la page que vous recherchez n'existe pas.");
        }
    } else {
        // Rediriger vers la page d'accueil si aucune action n'est spécifiée
        homePage();
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
