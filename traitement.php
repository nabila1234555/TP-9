<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom_complet'];
    $groupe = $_POST['groupe'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $encadrant = $_POST['encadrant'];

    $stmt = $conn->prepare("INSERT INTO projets (nom_complet, groupe, date_debut, date_fin, encadrant) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $nom, $groupe, $date_debut, $date_fin, $encadrant);
    $stmt->execute();

    header("Location: affichage.php?id=" . $conn->insert_id);
    exit();
}
?>
