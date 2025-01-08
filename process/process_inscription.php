<?php
require_once '../connect/connectDB.php';

session_start();

$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$mail = htmlspecialchars(trim($_POST['mail']));
$telephone = htmlspecialchars(trim($_POST['telephone']));
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$userId = $pdo->lastInsertId();



$sql = "INSERT INTO `user` (`lastname`, `firstname`,`mail`,`telephone`,`password`) VALUES (:lastname, :firstname, :mail, :telephone, :password)";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':mail' => $mail,
        ':telephone' => $telephone,
        ':password' => $password
    ]);
} catch (PDOException $error){
    echo "Erreur de la requete : " . $error->getMessage();
}


header('Location: ../connexion.php');
exit;