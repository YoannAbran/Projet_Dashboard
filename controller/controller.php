<?php

function chargerClasse($classe)
{
  require "model/". $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

function create($nom,$ref,$date_achat,$date_garantie,$prix,$categorie,$conseil,$adresse){
  $editManager = new CreateManager;
  $addnew = $editManager->addnew($nom,$ref,$date_achat,$date_garantie,$prix,$categorie,$conseil,$adresse);

}
