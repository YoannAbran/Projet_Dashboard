<!-- UPDATE `jeux_video`
SET developpeur = 'arc_system'
WHERE id='7' -->

<?php

// Table Editor


class editManager extends Database{
  public function selectAll(){
  $conn = $this->dbConnect();
  $sql = $conn->prepare("SELECT *
  FROM livres");
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
  }


public function editor ($nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $categorie){


  $conn = $this->dbConnect();
  $stmt =$conn->prepare("UPDATE `livres` SET
     nom = :nom,
     reference = :reference,
     date_achat = :date_achat,
     date_garantie = :date_garantie,
     prix = :prix,
     conseil = :conseil,
     categorie = :categorie
     WHERE id = 1");

    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':reference',$reference);
    $stmt->bindParam(':date_achat',$date_achat);
    $stmt->bindParam(':date_garantie',$date_garantie);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':conseil',$conseil);
    $stmt->bindParam(':categorie',$categorie);

    $updatefunc=$stmt->execute();

  echo"<font color = 'green'><br>Book's info UPDATED</font>";
  return $updatefunc;
}
//image management for edition
 public function editimg(){

  $conn = $this->dbConnect();
  $edit3 = $conn->prepare("UPDATE livres SET photo_ticket = :photo_ticket, photo = :photo");
  $ticketname = $_FILES['photo_ticket']['name'];
  $photoname = $_FILES['photo']['name'];

  $target_ticket = 'public/img/'.$ticketname;
  $target_photo = 'public/img/'.$photoname;


  $file_extension_photo_ticket = pathinfo($target_ticket, PATHINFO_EXTENSION);
  $file_extension_photo = pathinfo($target_photo, PATHINFO_EXTENSION);
  $file_extension_photo_ticket = strtolower($file_extension_photo_ticket);
  $file_extension_photo = strtolower($file_extension_photo);


$valid_extension = array("png","jpeg","jpg","PNG");
    if(in_array($file_extension_photo_ticket, $valid_extension) && in_array($file_extension_photo, $valid_extension)){
     // Upload file
      if(move_uploaded_file($_FILES['photo_ticket']['tmp_name'],$target_ticket) && move_uploaded_file($_FILES['photo']['tmp_name'],$target_photo)){
  }
}

  // $edit3->bindParam(':photo_ticket',$target_ticket, PDO::PARAM_STR);
  // $edit3->bindParam(':photo',$target_photo, PDO::PARAM_STR);

  $editnew = $edit3->execute(array(':photo_ticket' => $target_ticket, ':photo' => $target_photo));

  return $editnew;
}
}
?>
