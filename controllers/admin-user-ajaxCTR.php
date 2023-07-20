<?php
 require_once __DIR__ . '/../models/Users.php';

// On récupère l'input JSON et on le convertit en objet PHP
$input = json_decode(file_get_contents("php://input"));;



// On fait nos calculs avec les données.
// A nouveau, le nom des propriétés de l'objet correspondent
// à ceux qu'on avait choisi en Javascript
$output = Users::getAll( $input->page, $input->search);
// On envoie le tout en JSON
echo json_encode($output);
 
?>