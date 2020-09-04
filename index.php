<?php include "controller.php";

$sql = "SELECT * FROM `livres` WHERE 1";

$cool = new edit;
$testing = $cool -> selectAll();
foreach ($testing as $test) {
  // code...
}


echo $test['id'] . " " . $test['nom'] . " " . $test['reference'] . " " .  $test['date_achat'] . " " . $test['date_garantie'] . " " .  $test['prix'] . " " . $test['conseil'];

echo "<br>" . "<br>";
if(isset($_GET['action'])){
  if ($_GET['action']=='edit'){
    controledit();
echo "";
  }
}
?>

<DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="css" rel='stylesheet'>
  </head>
  <body>




    <form name="edition" enctype ="multipart/form-data" method="post" action="index.php?action=edit">
      <ul>
        <li><p>Nom : <input type="text" name="nom" value=""/></p></li>

        <li><p>Date d'achat : <input type="date" name="date_achat" value=""/></p></li>

        <li><p>Date de garantie : <input type="date" name="date_garantie" value=""/></p></li>

        <li><p>Prix : <input type="text" name="prix" value=""/></p></li>

        <li><p>Conseil : <input type="text" name="conseil" value=""/></p></li>

        <li><p>Photo Ticket : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo_ticket" value=""/></p></li>

        <li><p>Photo : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo" value=""/><p></li>

        <li><p>Catégorie : <input type='text' name="categorie" value=""/></p></li>

        <li><p>référence : <input type='text' name="reference" value=""/></p></li>

        <!-- <li><p>id : <input type='number' name="id" value=""/></p></li> -->

        <li><p><input type="submit" name="edit" value="Edit"/><p><li>
      </ul>
    </form>

<!-- displaying images from the table -->
    <div>
      <div id=phototicket>
        <img src="source.php?id=1"/>
      </div>
      <div id=photo>
        <img src="source.php?id=1"/>
      </div>
    </div>

  </body>

<script></script>
</html>
