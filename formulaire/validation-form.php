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
       
            
            <?php
                if(isset($_POST["numero"]) || isset($_POST['date']) || isset($_POST['pays'])){
                 
                    //variables GET
                    $_number = $_POST["numero"];
                    $_date = $_POST['date'];
                    $_pays = $_POST['pays'];
                    
                    

                    //condition ternaire pour vérifier la valeur des champs
                    print "<section>\n<h2>Le résultat de l'opération</h2>\n";
                    //Vérifier qu'il s'agit bien d'un nombre
                    if(!is_numeric($_number)){ 
                        print '<p class="warning"> Vous devez saisir un chiffre <p>';
                    }

                    $_number && $_date && $_pays ? 
                    print '<p class="success">Votre numéro :'.$_number.'<br> Votre date : '.$_date.'<br>Votre pays : '.$_pays
                    :print '<p class="warning"> Tous les champs sont obligatoire! <p>';

                   
                    

                    print "</section>";
                    
                }
                   
            ?>
       

   
   
    </main>
    <footer>
        <strong>
            &copy; - Under - <?= date('Y')?>
        </strong>    </footer>
     
</body>
</html>