<?php
  ob_start();
  session_start();
  session_regenerate_id();
  $id=$_GET['id'];
  foreach ($texts as $text) {
  }
?>

<form name="edition" method="post" action="index.php?action=edit&id=<?php echo $id ?>" enctype='multipart/form-data'>
  <ul>
    <li><p>Nom : <input type="text" name="nom" value="<?php echo $text['nom'] ?>"/></p></li>

    <li><p>Date d'achat : <input type="date" name="date_achat" value="<?php echo $text['date_achat'] ?>"/></p></li>

    <li><p>Date de garantie : <input type="date" name="date_garantie" value="<?php echo $text['date_garantie'] ?>"/></p></li>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputlieux_achat_select">Lieux d'achat</label>
        <select id="" class="form-control" name="lieux_achat" value="<?php if($text['vente_direct']==''){echo "vente direct"; }else{echo "e-commerce"; }?>" >
          <option>Choose...</option>
          <option <?php if($text['ecommerce']==''){echo "selected"; }?>>vente direct</option>
          <option <?php if($text['vente_direct']==''){echo "selected"; }?>>e-commerce</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputlieux_achat">Adresse ou URL</label>
        <input type="text" class="form-control" name="adresse" id=""  value="<?php if($text['vente_direct']==''){echo $text['ecommerce']; }else{echo $text['vente_direct']; }?>">
      </div>
      </div>

    <li><p>Prix : <input type="text" name="prix" value="<?php echo $text['prix'] ?>"/></p></li>

    <li><p>Conseil : <input type="text" name="conseil" value="<?php echo $text['conseil'] ?>"/></p></li>


    <li><p>Catégorie : <input type='text' name="categorie" value="<?php echo $text['categorie'] ?>"/></p></li>

    <li><p>référence : <input type='text' name="reference" value="<?php echo $text['reference'] ?>"/></p></li>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphoto_ticket">Photo du ticket de caisse</label>
      <input type="hidden" name="ticket" value='<?php echo $text['photo_ticket'] ?>'>
      <input type='file' name='photo_ticket'/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputphoto">Photo</label>
      <input type="hidden" name="photo" value='<?php echo $text['photo'] ?>'>
      <input type='file' name='photos'/>
    </div>
    </div>
    <li><p><input type="submit" name="edit" value="Edit"/><p><li>
  </ul>
</form>
<?php
$content = ob_get_clean();
 require('template.php');
