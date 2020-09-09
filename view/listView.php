<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>

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


<?php
if($resultats->rowCount()>0){
  while($d=$resultats->fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <th scope="row"><?php echo $d['id']; ?></th>
        <?php if (isset($_SESSION['isAdmin'])){
        echo "<td><a href='index.php?action=edit&id=".$d['id']."'>".$d['nom']."</a></td>";}
        else {  echo "<td>".$d['nom']."</td>";}?>
          <td><?php echo $d['reference']; ?></td>
          <td><?php echo $d['date_achat']; ?></td>
          <td><?php echo $d['date_garantie']; ?></td>
          <td><?php echo $d['prix']; ?></td>
          <td><?php echo $d['conseil']; ?></td>
          <td><?php echo $d['photo_ticket']; ?></td>
          <td><?php echo $d['photo']; ?></td>
          <td><?php echo $d['categorie']; ?></td>
        <?php    if (isset($_SESSION['isAdmin'])){
            echo "<td><form action ='index.php?action=delete&id=".$d['id']."' method='post' onsubmit='return submitResult();'><button type='submit' name='suppr' value=''><img src='public/img/trash.svg' alt='delete' width='16' height='16' title='delete'></button></form></td>";}?>
      </tr>

    <?php } } ?>
          </tbody>
            </table>
            <nav>
          <ul class="pagination">
            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
            <li class="page-item <?php echo ($currentPage == 1) ? "disabled" : "" ?>">
              <a href='index.php?action=listbook&page=<?php echo $currentPage - 1 ?>' class='page-link'>Précédente</a>
            </li>
              <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
              <li class="page-item ">
                <a href='index.php?action=listbook&page=<?php echo $currentPage + 1 ?>'class='page-link'>Suivante</a>
            </li>
          </ul>
          </nav>

<?php
  $content = ob_get_clean();
  require('template.php');
