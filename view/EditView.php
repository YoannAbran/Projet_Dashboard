<?php
  ob_start();
  session_start();
  session_regenerate_id();
  $id=$_GET['id'];
?>
    <form name="edition" enctype ="multipart/form-data" method="post" action="index.php?action=edit&id=<?= $id ?>">
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

        <li><p>id : <input type='number' name="id" value=""/></p></li>

        <li><p><input type="submit" name="edit" value="Edit"/><p><li>
      </ul>
    </form>

<!-- displaying images from the table -->
    <div>
      <div id=phototicket>
        <!-- <img src="source.php?id=1"/> -->
        <?php echo "<img src='public/img" . $row['photo_ticket'] . "'>"?>
      </div>
      <div id=photo>
        <!-- <img src="source.php?id=1"/> -->
        <?php echo "<img src='" . $row['photo'] . "'>"?>
      </div>
    </div>





<?php
$content = ob_get_clean();
 require('template.php');
