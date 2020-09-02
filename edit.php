<!-- UPDATE `jeux_video`
SET developpeur = 'arc_system'
WHERE id='7' -->
<?php
require 'Database.php';

class Livre{

public function editor(){

if(isset($_POST['edit'])) {
  $nom = $_POST['nom'];
  $reference = $_POST['reference'];
  $date_achat = $_POST['date_achat'];
  $date_garantie = $_POST['date_garantie'];
  $prix = $_POST['prix'];
  $conseil = $_POST['conseil'];
  $photo_ticket = $_POST['photo_ticket'];
  $photo = $_POST['photo'];
  $categorie = $_POST['categorie'];

try{
  $stmt =$conn->prepare("UPDATE `projet_dashboard` SET
    nom = '$nom',

    date_achat = '$date_achat',
    date_garantie = '$date_garantie',
    prix = '$prix',
    conseil = '$conseil',
    photo_ticket = '$photo_ticket',
    photo = '$photo',
    categorie = '$categorie',
    WHERE reference = '$reference'");

  $stmt->execute(array(
    ':nom' => $nom,
    ':reference' => $reference,
    ':date_achat' => $date_achat,
    ':date_garantie' => $date_garantie,
    ':prix' => $prix,
    ':conseil' => $conseil,
    ':photo_ticket' => $photo_ticket,
    ':photo' => $photo,
    ':categorie' => $categorie,
  ));
}
catch(PDOException $e){
  echo $e->getMessage();
}

  echo"<font color = 'green'><br>Book's info UPDATED</font>";
}
}
}
 ?>
