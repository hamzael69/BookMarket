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

    <main class="p-10">

        <section>
            <p class="underline pb-6">Mes achats</p>

            <article class="bg-tresorerie w-[90%] h-[400px] flex justify-center items-center rounded-md">
                <div class="bg-quatrerie w-[90%] h-[300px] rounded-md flex items-center justify-between gap-10 px-20">
                    <img src="./pesquet-bouquin.jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                    <img src="./pesquet-bouquin.jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                    <img src="./pesquet-bouquin.jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                    <a href="" class="underline">Accéder à mes achats</a>

                </div>
            </article>

        </section>

        <section class="pt-6">
            <p class="underline pb-6 ">Mes ventes</p>

            <article class="bg-tresorerie w-[90%] h-[400px] flex justify-center items-center rounded-md">
                <div class="bg-quatrerie w-[90%] h-[300px] rounded-md flex items-center justify-between gap-10 px-20">
                    <img src="./Le-dictionnaire-de-ma-vie-Eddy-Mitchell (1).jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                    <img src="./Le-dictionnaire-de-ma-vie-Eddy-Mitchell (1).jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                    <img src="./Le-dictionnaire-de-ma-vie-Eddy-Mitchell (1).jpg" alt="photo bouquin" class="w-[10%] h-[80%]">
                     <a href="" class="underline">Accéder à mes ventes</a>
                </div>
            </article>

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