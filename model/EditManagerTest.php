<?php
class EditManagerTest extends Database
{
public function update($id,$nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $categorie,$direct,$ecommerce){
  $conn = $this->dbConnect();
  $sql = $conn->prepare("UPDATE livres
    INNER JOIN lieux_achat
    ON livres.id = lieux_achat.id_livre
    SET livres.nom = :nom, livres.reference=:reference, livres.date_achat=:date_achat, livres.date_garantie=:date_garantie, livres.prix=:prix, livres.conseil=:conseil, livres.photo_ticket=:photo_ticket, livres.photo=:photo, livres.categorie=:categorie,lieux_achat.vente_direct = :vente_direct, lieux_achat.ecommerce=:ecommerce WHERE livres.id=$id");
  $ticket = $_POST['ticket'];
  $photo = $_POST['photo'];

  if (!empty($_FILES['photo_ticket']['name'])){
    $ticketname = $_FILES['photo_ticket']['name'];
    $target_ticket = 'img/'.$ticketname;
    $file_extension_ticket = pathinfo($target_ticket, PATHINFO_EXTENSION);
    $file_extension_ticket = strtolower($file_extension_ticket);
    $valid_extension = array("png","jpeg","jpg","PNG");
    if(in_array($file_extension_ticket, $valid_extension)){
      if(move_uploaded_file($_FILES['photo_ticket']['tmp_name'],$target_ticket)){}
    }
  }else{
    $target_ticket=$ticket;
  }
  if (!empty($_FILES['photos']['name'])){
  $photoname = $_FILES['photos']['name'];
  $target_photo = 'img/'.$photoname;
  $file_extension_photo = pathinfo($target_photo, PATHINFO_EXTENSION);
  $file_extension_photo = strtolower($file_extension_photo);
  $valid_extension = array("png","jpeg","jpg","PNG");
    if(in_array($file_extension_photo, $valid_extension)){
    if(move_uploaded_file($_FILES['photos']['tmp_name'],$target_photo)){
    }
  }
}
else {
  $target_photo=$photo;
}
  $sql->bindParam(':nom',$nom);
  $sql->bindParam(':reference',$reference);
  $sql->bindParam(':date_achat',$date_achat);
  $sql->bindParam(':date_garantie',$date_garantie);
  $sql->bindParam(':prix',$prix);
  $sql->bindParam(':conseil',$conseil);
  $sql->bindParam(':photo_ticket',$target_ticket);
  $sql->bindParam(':photo',$target_photo);
  $sql->bindParam(':categorie',$categorie);
  $sql->bindParam(':vente_direct',$direct);
  $sql->bindParam(':ecommerce',$ecommerce);
  $edit=$sql->execute();

  return $edit;
}
public function edittext($id){
$conn = $this->dbConnect();
  $sql = $conn->prepare("SELECT *
                          FROM livres
                          INNER JOIN lieux_achat
                          ON livres.id = lieux_achat.id_livre
                          WHERE livres.id= $id ");
  $sql->execute();
  $texts = $sql->fetchAll();
  return $texts;
}
}
