<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// Configuration de l'entityManager ///////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// Configuration de Autoload
require_once __DIR__.'/../vendor/autoload.php';
// Définir l'emplacement des entiter
$path = [__DIR__.'/../src/Entity'];
$isDevMode = true;
// Définition de la configuration des entités
$configuration = \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration($path, $isDevMode);
// Définir les éléments de connexion à la BDD
