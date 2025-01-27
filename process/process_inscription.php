<?php

require_once '../utils/autoloader.php';

session_start();

// $lastname = htmlspecialchars(trim($_POST['lastname']));
// $firstname = htmlspecialchars(trim($_POST['firstname']));
// $mail = htmlspecialchars(trim($_POST['mail']));
// $telephone = htmlspecialchars(trim($_POST['telephone']));
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// $userId = $pdo->lastInsertId();




$userRepository = new UserRepository();

$user = $userRepository->findByMail($_POST['mail']);

// if(!$user){
//    header("Location: ../public/inscription.php");
// }

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = new User($_POST['lastname'], $_POST['firstname'], $_POST['mail'], $_POST['telephone'], $hash);

$idUser = $userRepository->createUser($user);
$user->setId($idUser);

$_SESSION["user"] = $user;



header('Location: ../public/connexion.php');
exit;