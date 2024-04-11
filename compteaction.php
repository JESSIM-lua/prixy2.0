<?php
session_start();

// Vérifie si l'utilisateur est connecté
// if (!isset($_SESSION['email'])) {
//     header("Location: login.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
//     exit();
// }

// 
$email = $_SESSION['email'];


// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=logsystem', 'root', 'root');

// Récupère les informations du client
$stmt = $db->prepare("SELECT * FROM client WHERE CLIENT_email = :email");
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();
$client = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    
    // Récupère les nouvelles informations du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';

    // Met à jour les informations du client dans la base de données
    $stmt = $db->prepare("UPDATE client SET CLIENT_Nom = :nom, CLIENT_Prenom = :prenom, CLIENT_Tel = :telephone, CLIENT_Adresse = :adresse WHERE CLIENT_email = :email");
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $stmt->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    header("Location: compte.php");
    exit;
}

?>