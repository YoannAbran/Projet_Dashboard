<?php

/* Page de la table Livres */

require_once 'MODEL.php';

class Book extends MODEL
{
    public function __construct()
    {
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

    public function add($nom)
    {
        $this->query("INSERT INTO $this->table (nom) VALUES (?)", $nom);
    }

    public function remove($id)
    {
        $this->query("DELETE FROM $this->table WHERE id = ?", $id);
    }


    public function get_id($id)
    {
        return $this->query("SELECT * FROM $this->table WHERE id = ?", $id)->fetch_assoc();
    }

    public function get_nom($nom)
    {
        return $this->query("SELECT * FROM $this->table WHERE nom = ?", $nom)->fetch_assoc();
    }

    public function get_reference($reference)
    {
        return $this->query("SELECT * FROM $this->table WHERE reference = ?", $reference)->fetch_assoc();
    }

    public function get_buydate($date_achat)
    {
        return $this->query("SELECT * FROM $this->table WHERE date_achat = ?", $date_achat)->fetch_assoc();
    }

    public function get_warrantydate($date_garantie)
    {
        return $this->query("SELECT * FROM $this->table WHERE date_garantie = ?", $date_garantie)->fetch_assoc();
    }

    public function get_prix($prix)
    {
        return $this->query("SELECT * FROM $this->table WHERE prix = ?", $prix)->fetch_assoc();
    }
    public function get_conseil($conseil)
    {
        return $this->query("SELECT * FROM $this->table WHERE conseil = ?", $conseil)->fetch_assoc();
    }
    public function get_tphoto($photo_ticket)
    {
        return $this->query("SELECT * FROM $this->table WHERE photo_ticket = ?", $photo_ticket)->fetch_assoc();
    }
    public function get_photo($photo)
    {
        return $this->query("SELECT * FROM $this->table WHERE photo = ?", $photo)->fetch_assoc();
    }

    public function get_categorie($categorie)
    {
        return $this->query("SELECT * FROM $this->table WHERE categorie = ?", $categorie)->fetch_assoc();
    }

    public function get_unarchived()
    {
        return $this->query("SELECT * FROM $this->table WHERE archived = ?", "n");
    }


    public function get_all($offset, $total_records_per_page, $order, $ascdesc)
    {
        $result = $this->query("SELECT * FROM $this->table ORDER BY $order $ascdesc LIMIT $offset, $total_records_per_page ");
        return $result;
    }
    public function get_search($offset, $total_records_per_page, $order, $ascdesc, $search)
    {
        $result = $this->query("SELECT * FROM $this->table WHERE nom LIKE '$search' OR reference LIKE '$search' OR categorie LIKE '$search' ORDER BY $order $ascdesc LIMIT $offset, $total_records_per_page ");//OR reference LIKE $search OR categorie LIKE $search
        return $result;
    }

    public function pagination()
    {
        $result_count = $this->query("SELECT COUNT(*) As total_records FROM $this->table");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        return $total_records;
    }

    public function delete_all()
    {
        $this->resetTable();
    }
}
