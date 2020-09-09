<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<!-- WHERE id != (SELECT MAX(id) FROM formulaire) -->

<?php $sql = "SELECT * FROM livres ORDER BY id";

  echo "<table class='table table-striped table-dark'>
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
              <th scope='col'>Suppression</th>
            </tr>
          </thead>
        <tbody>"
?>

<?php
    // $id = 1;
    // $book_manager= new Book();
    // $book = $book_manager->get_id($id);
    foreach ($books as $book) {
?>
      <tr>
        <th scope="row"><?php echo $book['id']; ?></th>
          <td><?php echo $book['nom']; ?></td>
          <td><?php echo $book['reference']; ?></td>
          <td><?php echo $book['date_achat']; ?></td>
          <td><?php echo $book['date_garantie']; ?></td>
          <td><?php echo $book['prix']; ?></td>
          <td><?php echo $book['conseil']; ?></td>
          <td><?php echo $book['photo_ticket']; ?></td>
          <td><?php echo $book['photo']; ?></td>
          <td><?php echo $book['categorie']; ?></td>
          <td class="text-center"><a href="delete.php?id=<?= $book['id'] ?>" ><img src="trash.svg" alt="delete" width="16" height="16" title="delete"></a></td>
      </tr>

        <?php }
          "</tbody>
            </table>"
        ?>

</body>
</html>
