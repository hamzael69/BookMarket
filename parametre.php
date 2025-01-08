<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="bg-primary">
<header>
        <nav class="flex items-center justify-between px-8">
            <img src="./logo-removebg-preview.png" alt="logo" class="w-28">
            <a href="./main.php">Acceuil</a>
            <a href="">Vendre</a>
            <a href="">Genre</a>
            <form action="" method="get">
                <input type="text" name="" id="" placeholder="Quel livre recherchez-vous?" class="w-[400px] rounded-sm">
                <input type="submit" value="Rechercher">
            </form>
            <p>Bonjour <?= $_SESSION['user']['firstname']?></p>
            <a href="./profil-client.php">Mon compte</a>
            <a href="./parametre.php">Paramètres</a>
        </nav>
    </header>

    <main class="flex flex-col justify-center items-center gap-10 pt-10">
        <p class="underline">Gérer mon compte</p>
        <section class="bg-tresorerie w-[80%] h-[700px] rounded-md flex justify-center items-center">
            <div class="bg-quatrerie w-[90%] h-[550px] rounded-md text-2xl underline flex flex-col justify-around p-10">
                <p><?= $_SESSION['user']['lastname']?></p>
                <p><?= $_SESSION['user']['firstname']?></p>
                <p><?= $_SESSION['user']['mail']?></p>
                <p><?= $_SESSION['user']['telephone']?></p>
                <p></p>
            </div>

        </section>
    </main>
    <footer>
        <div class="flex items-center gap-28 pt-10">
            <img src="./logo-removebg-preview.png" alt="logo" class="w-28">
            <a href="">Contact</a>
            <a href="">Qui sommes-nous</a>
        </div>
    </footer>
</body>
</html>