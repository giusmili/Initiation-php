<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>Formulaire d'inscription</h1>
    </header>
    <main>
        <fieldset>
            <legend>inscription</legend>
            <form action="<?php print $_SERVER['PHP_SELF']?>" method="post"> <!-- post and get -->
                <label for="numero">Numéro de serie</label>
                <input type="text" 
                        id="numero" 
                        name="numero" 
                        placeholder="Numéro de serie" 
                        aria-required="true" 
                        autofocus>
                <label for="date">Votre anniversaire</label>
                <input type="date" id="date" name="date" aria-required="true">
                <label for="pays">Lieu de naissance</label>
                    <div class="select-pays" role="group" aria-labelledby="pays">
                        <select name="pays" id="pays" aria-required="true">
                            <option value="">Choisir son pays</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="italy">Italy</option>
                            <option value="spain">Spain</option>

                        </select>
                    </div>
                <input type="submit" value="Envoyer">
                
        </form>
</fieldset>
        <section>
            <h2>
                Resultat
            </h2>
                <?php
                     //var_dump($_GET)
                    //print_r($_GET)
                     foreach ($_POST as $_key => $_value) {
                            print $_key." ".$_value."<br>";
                    }
                ?>
        </section>

   
   
    </main>
    <footer>
        <strong>&copy; - Under - 20-12-2022 : 17 - 45 c'est l'heure</strong>    </footer>
     
</body>
</html>