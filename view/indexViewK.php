<DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="css" rel='stylesheet'>
  </head>
  <body>



<?php

foreach ($visuals as $visual) {}
?>
    <form name="edition" enctype ="multipart/form-data" method="post" action="index.php?action=edit">
      <ul>
        <li><p>Nom : <input type="text" name="nom" value="<?php echo $visual['nom']?>"/></p></li>

        <li><p>Date d'achat : <input type="date" name="date_achat" value="<?php echo $visual['date_achat']?>"/></p></li>

        <li><p>Date de garantie : <input type="date" name="date_garantie" value="<?php echo $visual['date_garantie']?>"/></p></li>

        <li><p>Prix : <input type="text" name="prix" value="<?php echo $visual['prix']?>"/></p></li>

        <li><p>Conseil : <input type="text" name="conseil" value="<?php echo $visual['conseil']?>"/></p></li>

        <li><p>Photo Ticket : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo_ticket" value="<?php echo $visual['photo_ticket']?>"/></p></li>

        <li><p>Photo : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo" value="<?php echo $visual['photo']?>"/><p></li>

        <li><p>Catégorie : <input type='text' name="categorie" value="<?php echo $visual ['categorie']?>"/></p></li>

        <li><p>référence : <input type='text' name="reference" value="<?php echo $visual ['reference']?>"/></p></li>

        <li><p>id : <input type='number' name="id" value="<?php echo $visual ['id']?>"/></p></li>

        <li><p><input type="submit" name="edit" value="Edit"/><p><li>
      </ul>
    </form>

<!-- displaying images from the table -->
    <div>
      <div id=images>
        <img src=" <?php echo $visual ['photo_ticket'] ?> ">;
      </div>
        <img src=" <?php echo $visual ['photo']?> ">"
    </div>

  </body>

<script></script>
</html>
