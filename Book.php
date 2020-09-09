<?php

/* Page de la table Livres */

require_once 'MODEL.php';

class Book extends MODEL {

  public function __construct() {
    $this->data_base = "projet_dashboard";
    $this->table = "livres";
    $this->table_columns = "(
      id INT NOT NULL AUTO_INCREMENT,
      nom CHAR(255) NOT NULL,
      reference CHAR(25) NOT NULL,
      date_achat DATE NOT NULL,
      date_garantie DATE NOT NULL,
      prix FLOAT NOT NULL,
      conseil TEXT NOT NULL,
      photo_ticket CHAR(255) NOT NULL,
      photo CHAR(255) NOT NULL,
      categorie CHAR(80) NOT NULL,

      archived CHAR(5) DEFAULT 'false'
    )";
    $this->createDataBase();
    $this->createTable();
  }

  public function add($nom) {
    $this->query("INSERT INTO $this->table (nom) VALUES (?)", $nom);
  }

  public function remove($id) {
    $this->query("DELETE FROM $this->table WHERE id = ?", $id);
  }

  public function  archive($id) {
    $this->query("UPDATE $this->table SET archived = ? WHERE id = ?", "true", $id);
  }

  public function  unarchive($id) {
    $this->query("UPDATE $this->table SET archived = ? WHERE id = ?", "false", $id);
  }

  public function get_id($id) {
    return $this->query("SELECT * FROM $this->table WHERE id = ?", $id)->fetch_assoc();
  }

  public function get_nom($nom) {
    return $this->query("SELECT * FROM $this->table WHERE nom = ?", $nom)->fetch_assoc();
  }

  public function get_reference($reference) {
    return $this->query("SELECT * FROM $this->table WHERE reference = ?", $reference)->fetch_assoc();
  }

  public function get_buydate($date_achat) {
    return $this->query("SELECT * FROM $this->table WHERE date_achat = ?", $date_achat)->fetch_assoc();
  }

  public function get_warrantydate($date_garantie) {
    return $this->query("SELECT * FROM $this->table WHERE date_garantie = ?", $date_garantie)->fetch_assoc();
  }

  public function get_prix($prix) {
    return $this->query("SELECT * FROM $this->table WHERE prix = ?", $prix)->fetch_assoc();
  }
  public function get_conseil($conseil) {
    return $this->query("SELECT * FROM $this->table WHERE conseil = ?", $conseil)->fetch_assoc();
  }
  public function get_tphoto($photo_ticket) {
    return $this->query("SELECT * FROM $this->table WHERE photo_ticket = ?", $photo_ticket)->fetch_assoc();
  }
  public function get_photo($photo) {
    return $this->query("SELECT * FROM $this->table WHERE photo = ?", $photo)->fetch_assoc();
  }

  public function get_categorie($categorie) {
    return $this->query("SELECT * FROM $this->table WHERE categorie = ?", $categorie)->fetch_assoc();
  }

  public function get_unarchived() {
    return $this->query("SELECT * FROM $this->table WHERE archived = ?", "n");
  }


  public function set_nom($id, $nom) {
    $this->query("UPDATE $this->table SET nom = ? WHERE id = ?", $nom, $id);
  }

  public function set_reference($id, $reference) {
    $this->query("UPDATE $this->table SET reference = ? WHERE id = ?", $reference, $id);
  }

  public function set_buydate($id, $date_achat) {
    $this->query("UPDATE $this->table SET date_achat = ? WHERE id = ?", $date_achat, $id);
  }

  public function set_warrantydate($id, $date_garantie) {
    $this->query("UPDATE $this->table SET date_garantie = ? WHERE id = ?", $date_garantie, $id);
  }

  public function set_prix($id, $prix) {
    $this->query("UPDATE $this->table SET prix = ? WHERE id = ?", $prix, $id);
  }

  public function set_conseil($id, $conseil) {
    $this->query("UPDATE $this->table SET conseil = ? WHERE id = ?", $conseil, $id);
  }

  public function set_tphoto($id, $photo_ticket) {
    $this->query("UPDATE $this->table SET photo_ticket = ? WHERE id = ?", $photo_ticket, $id);
  }

  public function set_photo($id, $photo) {
    $this->queryBlob("UPDATE $this->table SET photo = ? WHERE id = ?", $photo, $id);
  }

  public function set_categorie($id, $categorie) {
    $this->query("UPDATE $this->table SET categorie = ? WHERE id = ?", $categorie, $id);
  }

  public function get_all() {
    return $this->query("SELECT * FROM $this->table");
  }

  public function delete_all() {
    $this->resetTable();
  }

  }
