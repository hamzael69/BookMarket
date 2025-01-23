<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/output.css">
</head>

<body class="bg-primary">
    <section class="flex justify-center mt-10">
        <img src="./logo-removebg-preview.png" alt="photo du logo" class="mb-4">
    </section>



    <h2 class="text-2xl font-bold text-center my-16  text-neutral-white">Connexion BookMarket</h2>

    <div class="text-neutral-white p-16 rounded-sm flex flex-col items-center ">
        <form action="../process/process_inscription.php" method="post" class="flex flex-col gap-4">

        <div>
                <label for="lastname">Nom :</label>
                <input class='rounded-xl' type="lastname" id="lastname" name="lastname" required />
            </div>

            <div>
                <label for="firstname">Prénom :</label>
                <input class='rounded-xl' type="firstname" id="firstname" name="firstname" required />
            </div>

        <div>
                <label for="telephone">Téléphone : </label>
                <input class='rounded-xl' type="telephone" id="telephone" name="telephone" required />
            </div>

            <div>
                <label for="mail">E-mail : </label>
                <input class='rounded-xl' type="mail" id="mail" name="mail" required />
            </div>


            <div>
                <label for="password">Password :</label>
                <input class='rounded-xl' type="password" id="password" name="password" required />
            </div>


            <input type="submit" value="Se connecter" class="text-white bg-tresorerie rounded-2xl p-2 px-6 cursor-pointer w-[100%]" />

        </form>
    </div>
    <a href="../index.php" class="text-white bg-primary-grey rounded-2xl p-2 px-6 flex justify-center mt-4">Retour</a>

</body>

</html>