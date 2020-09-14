<?php ob_start();
session_start();
session_regenerate_id();?>

<form class="container-fluid pt-5 d-flex flex-column align-items-center" action='<?php  htmlspecialchars('index.php?action=insertnew')?>' method="post" enctype='multipart/form-data'>
<link rel='stylesheet' type='text/css' href=public/css/createStyle.css />

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNom">Nom</label>
      <input type="text" class="form-control" id="" name="nom" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputReference">Reference</label>
      <input type="text" class="form-control" id="" name="reference" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputDate_achat">Date d'achat</label>
    <input type="date" class="form-control" id="" placeholder="" name="date_achat" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputdate_garantie">Date de garantie</label>
    <input type="date" class="form-control" id="" placeholder="" name="garantie" required>
  </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlieux_achat_select">Lieux d'achat</label>
      <select id="" class="form-control" name="lieux_achat" required>
        <option selected>Choose...</option>
        <option>vente direct</option>
        <option>e-commerce</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputlieux_achat">Adresse ou URL</label>
      <input type="text" class="form-control" name="adresse" id=""  required>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputprix">Prix</label>
      <input type="number" step="0.01" class="form-control" id="" name="prix" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputcategorie">Catégorie</label>
      <input type="text" class="form-control" id="" name="categorie" required>
    </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputconseil">Conseil d'utilisation</label>
      <textarea class="form-control" name="conseil" rows="8" cols="80" required></textarea>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphoto_ticket">Photo du ticket de caisse</label>
      <input type='file' name='ticket' required/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputphoto">Photo</label>
      <input type='file' name='photo' required/>
    </div>
    </div>


  <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php
$content = ob_get_clean();
 require('template.php');
