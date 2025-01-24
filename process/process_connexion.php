<?php 
require_once '../connect/connectDB.php';
require_once '../utils/autoloader.php';


session_start();

$mail = htmlspecialchars(trim($_POST['mail']));
$password = trim($_POST['password']);
// try{

//     $stmt = $pdo->prepare('SELECT * FROM user WHERE mail = :mail');
//     $stmt->execute([':mail' => $mail]);

//     $user = $stmt->fetch(PDO::FETCH_ASSOC);

//     if ($user && password_verify($password, $user['password'])) {

//         $_SESSION['user'] = [
//             'id' => $user['id'],
//             'lastname' => $user['lastname'],
//             'firstname' => $user['firstname'],
//             'mail' => $user['mail'],
//             'telephone' => $user['telephone']

//         ];
//     } else{
//         echo "Votre mot de passe ou votre identifiant est incorect";
//         exit;
//     }
// } catch (PDOException $e) {
//     echo "Erreur lors de l'insertion : " . $e->getMessage();
// }

$userRepository = new UserRepository();

$user = $userRepository->findByMail($_POST['mail']);

$_SESSION["user"] = $user;

if(!$user){
    "Location: ../public/connexion.php";
}






header("Location: ../public/main.php");
exit;