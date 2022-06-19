<?php

include('config/db_connect.php');

$sql = 'SELECT cin FROM électeurs';

$result = mysqli_query($conn, $sql);

$elecs = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);


if (isset($_GET['cin'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $cin = $_GET['cin'];
    $tel = $_GET['tel'];
    $mail = $_GET['mail'];
    $date = $_GET['date'];
    $region = $_GET['region'];



    foreach ($elecs as $elec) {
        if ($cin == $elec['cin']) {
            // echo htmlspecialchars($elec['cin']);
            header("Location:index.php");
            break;
        }
    }
    if ($cin != $elec['cin']) {
        header("Location: confirmvote.php?nom=$nom" . "&prenom=$prenom" . "&cin=$cin" . "&tel=$tel" . "&mail=$mail" . "&date=$date" . "&region=$region");
    }
} else {
    $id = "error";
}
