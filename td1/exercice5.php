<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            include("fonctions.php");
            $table = createTable($_GET['lignes'], $_GET['colonnes']);
            echo $table;
        ?>
        
        <p>
            <form method="GET">
                <label>Lignes: </label>
                <input type="number" value="5" name="colonnes"><br>
                <label>Colonnes: </label>
                <input type="numer" value="5" name='lignes'>
                <input type="submit" value="Valider">
            </form>
        </p>
    </body>
</html>

// votre code en correction 

<?php
$title='Exercice n°4 (Itérations)';
include "include/header.php";
include "include/fonctions.php";

?>
<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>
<?php

//Récupère les paramètres l et c passés dans l'url
$nbLignes=$_GET["l"]??10;
$nbColonnes=$_GET["c"]??10;

echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
createHtmlTable($nbLignes,$nbColonnes);

include "include/footer.php";
 ?>