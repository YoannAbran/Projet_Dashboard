<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>

<table class='table table-striped table-dark'>
          <thead>
            <tr>
              <th class='text-center' scope='col'>#</th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=nom&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Nom</a></th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=reference&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Reference</a></th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=date_achat&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Achat</a></th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=date_garantie&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Garantie</a></th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=prix&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Prix d'achat</a></th>
              <th class='text-center' scope='col'>Conseil</th>
              <th class='text-center' scope='col'>Ticket</th>
              <th class='text-center' scope='col'>Photo</th>
              <th class='text-center' scope='col'><a class="text-light" href="index.php?action=listbook&page_no=<?php echo $page_no?>&orderBy=categorie&sort=<?php echo (($ascdesc=='ASC')? 'DESC' : 'ASC') ?>">Catégorie</a></th>
              <?php if (isset($_SESSION['isAdmin'])){
              echo "<th class='text-center' scope='col'>Suppression</th>
                ";}?>
            </tr>
          </thead>
        <tbody>


<?php
while($row = mysqli_fetch_array($books)){
?>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <?php if (isset($_SESSION['isAdmin'])){
        echo "<td class='text-center'><a class='text-light' href='index.php?action=edit&id=".$row['id']."'>".$row['nom']."</a></td>";}
        else {  echo "<td class='text-center'>".$row['nom']."</td>";}?>
          <td class='text-center'><?php echo $row['reference']; ?></td>
          <td class='text-center'><?php echo $row['date_achat']; ?></td>
          <td class='text-center'><?php echo $row['date_garantie']; ?></td>
          <td class='text-center'><?php echo $row['prix']; ?></td>
          <td class='text-center'><?php echo $row['conseil']; ?></td>
          <td class='text-center'><?php echo $row['photo_ticket']; ?></td>
          <td class='text-center'><?php echo $row['photo']; ?></td>
          <td class='text-center'><?php echo $row['categorie']; ?></td>
        <?php    if (isset($_SESSION['isAdmin'])){
            echo "<td class='text-center'><form action ='index.php?action=delete&id=".$row['id']."' method='post' onsubmit='return submitResult();'><button class='btn btn-link'type='submit' name='suppr' value=''><i class='text-light fas fa-trash-alt'></i></button></form></td>";}?>
      </tr>

    <?php }  ?>
          </tbody>
        </table>
        <nav aria-label="Page navigation" class="">
          <ul class="pagination justify-content-center ">
  <?php if($page_no > 1){
  echo "<li class='page-item'><a class=' bg-dark text-light page-link' href='index.php?action=listbook&page_no=1&orderBy=$order&sort=$ascdesc'>First Page</a></li>";
  } ?>

  <li class='page-item <?php if($page_no <= 1){ echo "disabled"; } ?> ' >
  <a class='bg-dark text-light page-link'<?php if($page_no > 1){
  echo "href='index.php?action=listbook&page_no=$previous_page&orderBy=$order&sort=$ascdesc'";
  } ?>>Previous</a>
  </li>

  <li class='page-item <?php if($page_no >= $total_no_of_pages){
  echo "disabled";
} ?>'>
  <a class='bg-dark text-light page-link'<?php if($page_no < $total_no_of_pages) {
  echo "href='index.php?action=listbook&page_no=$next_page&orderBy=$order&sort=$ascdesc'";
  } ?>>Next</a>
  </li>

  <?php if($page_no < $total_no_of_pages){
  echo "<li><a class='bg-dark text-light page-link' href='index.php?action=listbook&page_no=$total_no_of_pages&orderBy=$order&sort=$ascdesc'>Last &rsaquo;&rsaquo;</a></li>";
  } ?>
  </ul>
</nav>

<?php
  $content = ob_get_clean();
  require('template.php');
