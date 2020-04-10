<?php
$title='Exercice n°6 (Fonctions+Itérations)';
include "include/header.php";
include "include/fonctions.php";

$elms=[
        ["titre"=>"Exercices","contenu"=>"Liste des exercices disponibles"],
        ["titre"=>"Exercice n°1","contenu"=>"Créer une fonction","niveau"=>2],
        ["titre"=>"Exercice n°2","contenu"=>"Afficher le contenu d'un tableau","niveau"=>2]
];

echo parseElements($elms);

include "include/footer.php";
 ?>