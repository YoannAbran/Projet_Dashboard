<?php
  ob_start();
  session_start();
  session_regenerate_id();
  $id=(int) abs($_GET['id']);
  foreach ($visuals as $visual) {}

?>
    <form name="edition" enctype ="multipart/form-data" method="post" action="<?php echo htmlspecialchars('index.php?action=edit&id='.$id.'')?>">
      <ul>
        <li><p>Nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($visual['nom'])?>"/></p></li>

        <li><p>Date d'achat : <input type="date" name="date_achat" value="<?php echo htmlspecialchars($visual['date_achat'])?>"/></p></li>

        <li><p>Date de garantie : <input type="date" name="date_garantie" value="<?php echo htmlspecialchars($visual['date_garantie'])?>"/></p></li>

        <li><p>Prix : <input type="text" name="prix" value="<?php echo htmlspecialchars($visual['prix'])?>"/></p></li>

        <li><p>Conseil : <input type="text" name="conseil" value="<?php echo htmlspecialchars($visual['conseil'])?>"/></p></li>

        <li><p>Photo Ticket : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo_ticket" value=""/></p></li>
        <input type="hidden" name="old_ticket" value="<?php echo htmlspecialchars($visual['photo_ticket'])?>"/>

        <li><p>Photo : <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo" value="<?php echo htmlspecialchars($visual['photo'])?>"/><p></li>
                  <input type="hidden"  name="old_photo" value="<?php echo htmlspecialchars($visual['photo'])?>"/>

        <li><p>Catégorie : <input type='text' name="categorie" value="<?php echo htmlspecialchars($visual ['categorie'])?>"/></p></li>

        <li><p>référence : <input type='text' name="reference" value="<?php echo htmlspecialchars($visual ['reference'])?>"/></p></li>

        <li><p>id : <input type='number' name="id" value="<?php echo htmlspecialchars($visual ['id'])?>"/></p></li>

        <li><p><input type="submit" name="edit" value="Edit"/><p><li>
      </ul>
    </form>

<!-- displaying images from the table -->
    <div>
      <div id=images>
        <img src="<?php echo htmlspecialchars($visual['photo_ticket'])?> ">
      </div>
        <img src="<?php echo htmlspecialchars($visual['photo'])?> ">
    </div>





<?php
$content = ob_get_clean();
 require('template.php');
