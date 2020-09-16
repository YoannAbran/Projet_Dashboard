<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>
<div class="">
  <h1>Home</h1>
</div>
  <table class="table table-bordered table-dark table-sm">
<tbody>
  <?php  foreach ($rows as $row){
  echo "<tr><td class='px-5'><a class='text-light' href='index.php?action=edit&id=".$row['id']."'>".$row['nom']."</a></td>";
  echo "<td>".$row['reference']."</td>";
    if (isset($_SESSION['isAdmin'])) {
  echo"<td><form action ='index.php?action=delete&idel=".$row['id']."'' method='post' onsubmit='return submitResult();'><input type='submit' name='suppr' value='Supprimer'></form></td></tr>";

}
<table class='table table-striped table-dark'>
          <thead>
            <tr>
              <th scope='col'>#</th>
              <th scope='col'>Nom</th>
              <th scope='col'>Reference</th>
              <th scope='col'>Achat</th>
              <th scope='col'>Garantie</th>
              <th scope='col'>Prix</th>
              <th scope='col'>Conseil</th>
              <th scope='col'>Ticket</th>
              <th scope='col'>Photo</th>
              <th scope='col'>Catégorie</th>
              <?php if (isset($_SESSION['isAdmin'])){
              echo "<th scope='col'>Suppression</th>
                ";}?>
            </tr>
          </thead>
        <tbody>

    } ?>

</tbody>
      </table>
<?php
$content = ob_get_clean();
 require('template.php');
    foreach ($books as $book) {
?>
      <tr>
        <th scope="row"><?php echo $book['id']; ?></th>
        <?php if (isset($_SESSION['isAdmin'])){
        echo "<td><a href='index.php?action=edit&id=".$book['id']."'>".$book['nom']."</a></td>";}
        else {  echo "<td>".$book['nom']."</td>";}?>
          <td><?php echo $book['reference']; ?></td>
          <td><?php echo $book['date_achat']; ?></td>
          <td><?php echo $book['date_garantie']; ?></td>
          <td><?php echo $book['prix']; ?></td>
          <td><?php echo $book['conseil']; ?></td>
          <td><?php echo $book['photo_ticket']; ?></td>
          <td><?php echo $book['photo']; ?></td>
          <td><?php echo $book['categorie']; ?></td>
        <?php    if (isset($_SESSION['isAdmin'])){
            echo "<td><form action ='index.php?action=delete&id=".$book['id']."' method='post' onsubmit='return submitResult();'><button type='submit' name='suppr' value=''><img src='public/img/trash.svg' alt='delete' width='16' height='16' title='delete'></button></form></td>";}?>
      </tr>

        <?php }  ?>
          </tbody>
            </table>


<?php
  $content = ob_get_clean();
  require('template.php');
