<?php
class CreateManager extends Database
{
  public function addnew($nom,$ref,$date_achat,$date_garantie,$prix,$categorie,$conseil,$adresse){
    $conn = $this->dbConnect();
    $add = $conn->prepare("INSERT INTO livres (nom,reference,date_achat,date_garantie,prix,conseil,photo_ticket,photo,categorie) VALUES (:nom,:reference,:date_achat,:date_garantie,:prix,:conseil,:photo_ticket,:photo,:categorie) ");

  $ticketname = $_FILES['ticket']['name'];
  $photoname = $_FILES['photo']['name'];

  // Location
  $target_ticket = 'img/'.$ticketname;
  $target_photo = 'img/'.$photoname;
  // file extension
  $file_extension_ticket = pathinfo($target_ticket, PATHINFO_EXTENSION);
  $file_extension_photo = pathinfo($target_photo, PATHINFO_EXTENSION);
  $file_extension_ticket = strtolower($file_extension_ticket);
  $file_extension_photo = strtolower($file_extension_photo);
  // Valid image extension
  $valid_extension = array("png","jpeg","jpg","PNG");
    if(in_array($file_extension_ticket, $valid_extension)&&in_array($file_extension_photo, $valid_extension)){
     // Upload file
      if(move_uploaded_file($_FILES['ticket']['tmp_name'],$target_ticket)&&move_uploaded_file($_FILES['photo']['tmp_name'],$target_photo)){
        }
      }
      $add->bindParam(':nom',$nom);
      $add->bindParam(':reference',$ref);
      $add->bindParam(':date_achat',$date_achat);
      $add->bindParam(':date_garantie',$date_garantie);
      $add->bindParam(':prix',$prix);
      $add->bindParam(':conseil',$conseil);
      $add->bindParam(':photo_ticket',$target_ticket);
      $add->bindParam(':photo',$target_photo);
      $add->bindParam(':categorie',$categorie);

      $addnew = $add->execute();
      $nul ="NUl";
      $query="INSERT INTO lieux_achat (vente_direct,ecommerce,id_livre) VALUES(?,?,LAST_INSERT_ID())";
      $addnew = $conn->prepare($query);
      $addnew->execute(array($adresse,$nul));
      return $addnew;
    }
}
 ?>
