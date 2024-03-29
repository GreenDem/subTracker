<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Subtracker est un site vous permettant de gérer les dépenses de vos abonnement en un seul endroit. Simple d'utilisation, ajouter vos abonnements et voyez directement le couts mensuel de vos abonnements.">
    <meta name="keywords" content="Gestion abonnement subtracker">
    <meta name="author" content="Demory Nathan">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300;8..144,500;8..144,700;8..144,900&display=swap" rel="stylesheet"/>
    <?= $bootCSS ?? ""?>
    <link rel="stylesheet" href="/public/assets/style/nav.css">
    <link rel="stylesheet" href="/public/assets/style/general.css"> 
    <link rel="stylesheet" href="/public/assets/style/home.css"> 
    <?= $subCSS ?? ""?>
    <link rel="stylesheet" href="/public/assets/style/formIn.css"> 


    <title>SubTracker</title>
</head>
<body>
   <header>

<?php 

include __DIR__ .  '/nav.php';

?>
