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

    } ?>

</tbody>
      </table>
<?php
$content = ob_get_clean();
 require('template.php');
