<div class="container form h-80 justify-content-center align-items-center border">

    <form action="../add.php" method="post" class="w-80 p-5" enctype="multipart/form-data">
      <div class="form-group">
      <label for="nom">Nom du livre:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le nom" name="nom" required>
      </div>
      <div class="form-group">
      <label for="reference">Référence du livre:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la référence" name="reference">
      </div>
      <div class="form-group">
      <label for="date_achat">Date d'achat:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la date d'achat" name="date_achat">
      </div>
      <div class="form-group">
      <label for="date_garantie">Durée de la garantie:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la date de fin de garantie" name="date_garantie">
      </div>
      <div class="form-group">
      <label for="prix">Prix:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le prix du livre" name="prix">
      </div>
      <div class="form-group">
      <label for="categorie">Catégorie:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la catégorie du livre" name="categorie">
      </div>
      <!-- <div class="form-group">
      <label for="image">Photo:</label>
     <input type="text" id="" class="form-control" name="image" value=""> -->
      <!-- </div>
      <div class="form-group">
        <input type="file" name="image" size="30"> -->
        <!-- <button type="submit" name="upload" class="btn btn-primary" value="Uploader">Uploader</button> -->
      </div>
      <div class="form-group">
      <label for="archiver">Archiver:</label>
        <select name="archiver">
          <option value="" selected>Non</option>
          <option value="">Oui</option>
        </select>
      </div>

      <div class="form-group">
      <label for="conseil">Description:</label>
      <textarea type="text" id="" class="form-control" rows="6" cols="50" name="conseil"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary" name="submit">Enregistrer</button>
      <!-- <button type="button" value="Annuler" onclick="history.back()" class="btn btn-primary">Annuler</button> -->
      <button type='reset' class="btn btn-secondary">Annuler</button>
      <a href="../admin.php"><button type="button" class="btn btn-secondary">admin</button></a>
    </form>

</div>
