<?php
session_start();
require_once '../../includes/database.php';
require_once '../../includes/function.php';

// Tableau pour stocker les erreurs de formulaire
$errors = [
    'nom' => '',
    'adresse' => '',
    'wifi' => '',
    'nombre' => '',
    'couverture' => '',
    'description' => '',
];

// Taille maximale du fichier (5 Mo)
$maxFileSize = 5 * 1024 * 1024;

// Types de fichiers autorisés
$allowedFileTypes = ['image/jpeg', 'image/png', 'image/jpg'];

// Traitement du formulaire d'ajout de livre
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = trim($_POST['nom']);
    $adresse = trim($_POST['adresse']);
    $wifi = trim($_POST['wifi']);
    $nombre = trim($_POST['nombre']);
    $description = trim($_POST['description']);
    $photo_couverture = $_FILES['couverture'];

    // Validation des champs
    if (empty($nom)) {
        $errors['nom'] = "Le nom de la residence est requise.";
    }
    if (empty($adresse)) {
        $errors['adresse'] = "L'adresse est requis.";
    }
    if (empty($wifi)) {
        $errors['wifi'] = "La wifi est requise.";
    }
    if (empty($nombre)) {
        $errors['nombre'] = "Le nombre de chambre est requis.";
    }
    if (empty($description)) {
        $errors['description'] = "La description est requise.";
    }
    if (empty($photo_couverture['name'])) {
        $errors['photo_couverture'] = "La photo de couverture est requise.";
    } else {
        // Vérifier la taille du fichier
        if ($photo_couverture['size'] > $maxFileSize) {
            $errors['photo_couverture'] = "La taille de la photo de couverture ne doit pas dépasser 5 Mo.";
        }

        // Vérifier le type de fichier
        if (!in_array($photo_couverture['type'], $allowedFileTypes)) {
            $errors['photo_couverture'] = "La photo de couverture doit être au format JPG, JPEG ou PNG.";
        }
    }

    if (empty(array_filter($errors))) {
        // Gérer le téléchargement de la photo de couverture
        $target_dir = "../../uploads/imgResidence/";
        $target_file = $target_dir . basename($photo_couverture["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifier si le fichier est une image réelle
        if (move_uploaded_file($photo_couverture["tmp_name"], $target_file)) {
            // Insérer le livre dans la base de données
            $stmt = $pdo->prepare("INSERT INTO residence (nom, adresse, wifi, description, nbr_chambre, image) VALUES (:nom, :adresse, :wifi, :description, :chambre, :image)");
            $stmt->execute([
                ':nom' => $nom,
                ':description' => $description,
                ':wifi' => $wifi,
                ':adresse' => $adresse,
                ':chambre' => $nombre,
                ':image' => basename($photo_couverture["name"]),
            ]);

            $_SESSION["success"] = "Residences ajouté avec succès!";
            header('Location: ../../views/admin/residences.php');
            exit();
        } else {
            $errors['photo_couverture'] = "Erreur lors du téléchargement de la photo de couverture.";
            error_log('Erreur de téléchargement de fichier : ' . $_FILES['couverture']['error']); // Ajout d'un message d'erreur dans le log
        }
    }

    // Stocker les erreurs en session si présentes
    $_SESSION['errors'] = $errors;
    header('Location: ../../views/admin/addResidences.php');
}
