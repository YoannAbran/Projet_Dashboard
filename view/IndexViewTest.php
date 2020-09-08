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
      <canvas id="myChart" width="500px" height="100px" ></canvas>
      <script>
      function submitResult() {
      if ( confirm("Etes vous sur de vouloir effacer ce fichier?") == false ) {
        return false ;
      } else {
        return true ;
      }
      }

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['fantastique', 'SF', 'Policier', 'Manga'],
        datasets: [{
            label: 'My First dataset',
            data: [2, 20, 30, 100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ],

        }]
    },

    // Configuration options go here
    options: {}
});
      </script>
<?php
$content = ob_get_clean();
 require('template.php');
