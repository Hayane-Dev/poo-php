<?php

class Personnage {
  private $_name;
  private $_force;
  private $_localisation;
  private $_experience = 0;
  private $_degats = 0;

  public function __construct($name, $force) {
    $this->setName($name);
    $this->setForce($force);
  }

  public function parler() {
    echo 'Je suis un personnage';
  }

  public function gagnerExperience() {
    $this->_experience++;
  }

  public function afficherExperience() {
    echo 'Expérience du personnage: ' . $this->_experience;
  }

  public function frapper(Personnage $cible)  {
    $cible->_degats += $this->_force;
    $this->gagnerExperience();
  }

  public function displayPerso() {
    echo 'Nom du personnage: ' . $this->getName();
    echo '<br>';
    echo 'Force du personnage: ' . $this->getForce();
    echo '<br>';
    echo 'Expérience du personnage: ' . $this->getExperience();
    echo '<br>';
    echo 'Dégats du personnage: ' . $this->getDegats();
    echo '<br><br>';
  }

  // Accesseur et Mutateur

  public function setName($name) {
    if (!is_string($name)) {
      trigger_error('Le nom du personnage doit être de type string!', E_USER_WARNING);
      return;
    }

    $this->_name = $name;
  }

  public function getName() {
    return $this->_name;
  }

  public function setForce($force) {
    if (!is_int($force)) {
       trigger_error('La force d\'un personnage doit être de type entier!', E_USER_WARNING);
      return;
    }

    if ($force > 100) {
      trigger_error('La force d\'un personnage ne peut dépasser 100!', E_USER_WARNING);
      return;
    }

    $this->_force = $force;
  }

  public function getForce() {
    return $this->_force;
  }

  public function setExperience($experience) {
    if (!is_int($experience)) {
       trigger_error('L\'experience d\'un personnage doit être de type entier!', E_USER_WARNING);
      return;
    }

    if ($experience > 100) {
      trigger_error('L\'experience d\'un personnage ne peut dépasser 100!', E_USER_WARNING);
      return;
    }

    $this->_experience = $experience;
  }
  public function getExperience() {
    return $this->_experience;
  }

  public function getDegats() {
    return $this->_degats;
  }
}