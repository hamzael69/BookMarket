<?php
require_once '../connect/connectDB.php';
require_once '../utils/autoloader.php';

session_start();





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/output.css">
</head>

<body class="bg-primary">
    <header>
        <nav class="flex items-center justify-between px-8">
            <img src="./logo-removebg-preview.png" alt="logo" class="w-28">
            <a href="./index.php">Acceuil</a>
            <a href="">Vendre</a>
            <a href="">Genre</a>
            <form action="" method="get">
                <input type="text" name="" id="" placeholder="Quel livre recherchez-vous?" class="w-[400px] rounded-sm">
                <input type="submit" value="Rechercher">
            </form>
            <p>Bonjour <?= $_SESSION['user']->getFirstname()?></p>
            <a href="./profil-client.php">Mon compte</a>
            <a href="./parametre.php">Paramètres</a>
            
        </nav>
    </header>
    <main class="flex flex-col gap-28">
        <section class="flex justify-center pt-24 ">
            <div class="bg-white h-96 w-[80%] flex flex-col justify-center items-center rounded-md " id="hero">
                <h1 class="text-9xl ">Book Market</h1>
                <p class="text-4xl">Découvrez, échangez, enrichissez votre bibliothèque.</p>
            </div>
        </section>

        <section>
            <p class="bg-tresorerie w-[12%] h-12 text-neutral-200 flex justify-center items-center rounded-md text-lg mb-10">A la une</p>

            <div class="flex flex-wrap justify-around gap-10">

                <article class=" bg-secondary h-[600px] w-[40%] rounded-md flex justify-center items-center">
                    <div class="bg-quatrerie w-[80%] h-[80%]  rounded-md flex justify-center items-center gap-6">
                        <img src="./Le-dictionnaire-de-ma-vie-Eddy-Mitchell (1).jpg" alt="couverture livre" class="w-[30%] h-[60%]">
                        <div class="flex flex-col gap-8">
                            <h2>Le dictionnaire de ma vie</h2>
                            <h3>Eddy Mitchell</h3>
                            <h4>Biographie</h4>
                            <p>20£</p>
                            <a href="./article.php" class="bg-secondary w-[80%] h-[40px] text-white flex justify-center items-center">En savoir plus</a>

                        </div>
                    </div>

                </article>

                <article class=" bg-secondary h-[600px] w-[40%] rounded-md flex justify-center items-center">
                    <div class="bg-quatrerie w-[80%] h-[80%]  rounded-md flex justify-center items-center gap-6">
                        <img src="./pesquet-bouquin.jpg" alt="couverture livre" class="w-[30%] h-[60%]">
                        <div class="flex flex-col gap-8">
                            <h2>Ma vie sans gravité</h2>
                            <h3>Thomas Pesquet</h3>
                            <h4>Biographie</h4>
                            <p>20£</p>
                            <a href="" class="bg-secondary w-[80%] h-[40px] text-white flex justify-center items-center">En savoir plus</a>

                        </div>
                    </div>

                </article>

                </article>

                <article class=" bg-secondary h-[600px] w-[40%] rounded-md flex justify-center items-center">
                    <div class="bg-quatrerie w-[80%] h-[80%]  rounded-md flex justify-center items-center gap-6">
                        <img src="./pesquet-bouquin.jpg" alt="couverture livre" class="w-[30%] h-[60%]">
                        <div class="flex flex-col gap-8">
                            <h2>Ma vie sans gravité</h2>
                            <h3>Thomas Pesquet</h3>
                            <h4>Biographie</h4>
                            <p>20£</p>
                            <a href="" class="bg-secondary w-[80%] h-[40px] text-white flex justify-center items-center">En savoir plus</a>

                        </div>
                    </div>

                </article>

                </article>

                <article class=" bg-secondary h-[600px] w-[40%] rounded-md flex justify-center items-center">
                    <div class="bg-quatrerie w-[80%] h-[80%]  rounded-md flex justify-center items-center gap-6">
                        <img src="./pesquet-bouquin.jpg" alt="couverture livre" class="w-[30%] h-[60%]">
                        <div class="flex flex-col gap-8">
                            <h2>Ma vie sans gravité</h2>
                            <h3>Thomas Pesquet</h3>
                            <h4>Biographie</h4>
                            <p>20£</p>
                            <a href="" class="bg-secondary w-[80%] h-[40px] text-white flex justify-center items-center">En savoir plus</a>

                        </div>
                    </div>

                </article>

            </div>

            <a href="" class="flex justify-center underline pt-10">Acceder à notre bibliothèque</a>

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