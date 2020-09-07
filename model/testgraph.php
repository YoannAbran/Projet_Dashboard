<?php



class testgraph extends Database {
  //work, recupere la somme des prix pae categorie
  public function testcat(){
$conn = $this->dbConnect();
$sql = $conn->prepare("SELECT ROUND(SUM(prix),2) AS prixcat, categorie FROM livres GROUP BY categorie ");
$sql->execute();
$prix=$sql->fetchAll();
return $prix;
}
//work, recupere le prix total des livres
public function testtot(){
$db=$this->dbConnect();
$sql = $db->prepare("SELECT ROUND(SUM(prix),2) AS prixtotal FROM livres");
$sql->execute();
$prixtot=$sql->fetch();
return $prixtot;
}
//recupere combien et le nombre de livre par nom
public function teststock(){
$db=$this->dbConnect();
$sql = $db->prepare("SELECT COUNT(*) AS nomC, nom FROM livres
GROUP BY nom");
$sql->execute();
$nbrenom=$sql->fetchAll();
return $nbrenom;
}

public function getnomvente(){
  $db=$this->dbConnect();
$sql = $db->prepare("SELECT nom FROM vente");
$sql->execute();
$nomvente=$sql->fetchAll();
return $nomvente;
}

public function insertvente($nom,$stock){
  $db=$this->dbConnect();
  $sql = $db->prepare("INSERT INTO vente (nom,stock,prix_vente,nbre_vente) VALUES (:nom,:stock,:prix_vente,:nbre_vente)
  ON DUPLICATE KEY UPDATE stock = :stock, prix_vente = :prix_vente, nbre_vente = :nbre_vente");
  $prix_vente=rand(6,12);
  $nbrevente=rand(3,20);
  $add=$sql->execute(array(
      ':nom'=>$nom,
      ':stock'=>$stock,
      ':prix_vente'=>$prix_vente,
      ':nbre_vente'=>$nbrevente
  ));
  return $add;
}

}
