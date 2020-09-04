<!-- UPDATE `jeux_video`
SET developpeur = 'arc_system'
WHERE id='7' -->

<?php

// Table Editor
require 'Database.php';

class edit extends Database{
  public function selectAll(){
  $conn = $this->dbConnect();
  $sql = $conn->prepare("SELECT *
  FROM livres");
  $sql->execute();
  $rows = $sql->fetchAll();
  return $rows;
  }


public function editor($nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $categorie){

// if(isset($_POST['edit'])) {
//   $nom = $_POST['nom'];
//   $reference = $_POST['reference'];
//   $date_achat = $_POST['date_achat'];
//   $date_garantie = $_POST['date_garantie'];
//   $prix = $_POST['prix'];
//   $conseil = $_POST['conseil'];
//   $photo_ticket = $_POST['photo_ticket'];
//   $photo = $_POST['photo'];
//   $categorie = $_POST['categorie'];


  $conn = $this->dbConnect();
  $stmt =$conn->prepare("UPDATE `livres` SET
     nom = :nom,
     reference = :reference,
     date_achat = :date_achat,
     date_garantie = :date_garantie,
     prix = :prix,
     conseil = :conseil,
     -- photo_ticket = :photo_ticket,
     -- photo = :photo,
     categorie = :categorie
    ");
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':reference',$reference);
    $stmt->bindParam(':date_achat',$date_achat);
    $stmt->bindParam(':date_garantie',$date_garantie);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':conseil',$conseil);
    // $stmt->bindParam(':photo_ticket',$photo_ticket);
    // $stmt->bindParam(':photo',$photo);
    $stmt->bindParam(':categorie',$categorie);

    $updatefunc=$stmt->execute();

  echo"<font color = 'green'><br>Book's info UPDATED</font>";
  return $updatefunc;
}
}

//image management for edition
public function editimg($photo_ticket, $photo){

  $edit3 = $conn->prepare("UPDATE from `livres` SET ")
  $ticketname = $_FILES['photo_ticket']['name'];
  $photoname = $_FILES['photo']['name']

  $target_ticket = 'img/'.$ticketname;
  $target_photo = 'img/'.$photoname;


  $file_extension_photo_ticket = pathinfo($target_ticket, PATHINFO_EXTENSION);
  $file_extension_photo = pathinfo($target_photo, PATHINFO_EXTENSION);
  $file_extension_photo_ticket = strtolower($file_extension_photo_ticket);
  $file_extension_photo = strtolower($file_extension_photo);

  $updateimg->execute();
  return $updateimg;

  $check = mysqli_stmt_affected_rows($stmt);
  if($check==1){
      $msg = 'Images Updated to the table';
  }else{
      $msg = 'An error about the images occured' ;
  }
  // mysqli_close($con);
}

?>
