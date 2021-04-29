<?php

// require './classes/Personnage.php';
function chargerClasse($classe) {
  require './classes/' . $classe . '.php';
}

spl_autoload_register('chargerClasse');

// $perso = new Personnage();
// $perso->_experience = $perso->_experience + 1; // Erreur fatale
// $perso->parler();
// $perso->gagnerExperience();
// echo '<br>';
// $perso->afficherExperience();

$perso1 = new Personnage('Thor', 20);
$perso2 = new Personnage('Vision', 20);

$perso1->setExperience(45);
$perso2->setExperience(55);

$perso1->frapper($perso2);

$perso1->displayPerso();
$perso2->displayPerso();

$perso2->frapper($perso1);

$perso1->displayPerso();
$perso2->displayPerso();
