<?php
  ob_start();
?>
<form method="post" enctype='multipart/form-data'>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputNom">Nom</label>
      <input type="text" class="form-control" id="" name="nom">
    </div>
    <div class="form-group col-md-2">
      <label for="inputReference">Reference</label>
      <input type="text" class="form-control" id="" name="reference">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="inputDate_achat">Date d'achat</label>
    <input type="date" class="form-control" id="" placeholder="" name="date_achat">
  </div>
  <div class="form-group col-md-2">
    <label for="inputdate_garantie">Date de garantie</label>
    <input type="date" class="form-control" id="" placeholder="" name="garantie">
  </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputlieux_achat">Lieux d'achat</label>
      <select id="" class="form-control" name="lieux_achat">
        <option selected>Choose...</option>
        <option>vente_direct</option>
        <option>e-commerce</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputlieux_achat">Addresse ou URL</label>
      <input type="text" class="form-control" name="adresse" id="" >
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputprix">Prix</label>
      <input type="number" step="0.01" class="form-control" id="" name="prix">
    </div>
    <div class="form-group col-md-2">
      <label for="inputcategorie">Catégorie</label>
      <input type="text" class="form-control" id="" name="categorie">
    </div>
    </div>
    <div class="form-group col-md-2">
      <label for="inputconseil">Conseil d'utilisation</label>
      <textarea class="form-control" name="conseil" rows="8" cols="80"></textarea>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputphoto_ticket">Photo du ticket de caisse</label>
      <input type='file' name='photo_ticket'/>
    </div>
    <div class="form-group col-md-2">
      <label for="inputphoto">Photo</label>
      <input type='file' name='photo'/>
    </div>
    </div>


  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<?php
$content = ob_get_clean();
 require('template.php');
 ?>
