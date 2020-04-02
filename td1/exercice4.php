<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>

<body>
    <?php
            $ligne=$_GET['ligne'];
            $colonne=$_GET['colonne'];
        ?>
    <p>
        <a href="?ligne=2&colonne=2">Tableau 2x2</a><br>
        <a href="?ligne=5&colonne=5">Tableau 5x5</a><br>
        <a href="?ligne=10&colonne=8">Tableau 10x8</a><br>
    </p>
    <table border='1'>
        <tbody>
            <?php
                    $gras = false;
                    $rouge = false;
                    for($i=0; $i<$lignes; $i++){
                        if($gras){
                            echo "<tr>";
                            $gras = false;
                        }
                        else{
                            echo "<tr style='font-weight:bold'>";
                            $gras = true;
                        }
                        for($a=0; $a<$colonne; $a++){
                            if($rouge){
                                echo "<td>{$a} {$i}</td>";
                                $rouge = false;
                            }
                            else{
                                echo "<td style='color:red'>{$a} {$i}</td>";
                                $rouge = true;
                            }
                        }
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
</body>

</html>
// votre code en correction

<?php
$title='Exercice n°4 (Itérations)';
include "include/header.php";
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
?>
<table border='1'>
    <tbody>
        <?php for($i=0;$i<$nbLignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>
            <?php for($j=0;$j<$nbColonnes;$j++){
            $couleur=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
            <?php }?>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php
include "include/footer.php";
 ?>