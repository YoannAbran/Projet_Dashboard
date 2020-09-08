<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>
<div class="">
  <h1>Home</h1>
</div>

<div class="container-fluid d-flex">
  <div class="container">
    <canvas id="myChart" ></canvas>
  </div>
  <div class="container">
    <canvas id="myChart2" ></canvas>
  </div>
  <div class="container">
    <canvas id="myChart3" ></canvas>
  </div>
</div>

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
      type: 'pie',
      // The data for our dataset
      data: {
        labels: [<?php echo testcatgraph();?>],/*'total'*/
        datasets: [{
            label: 'cout',
            data: [<?php echo testprix(); ?>],/*echo testctot();*/
            backgroundColor:
                poolColors([<?php echo testcatgraph(); ?>].length),

            borderColor:
                poolColors([<?php echo testcatgraph(); ?>].length),


        }]
      },
      // Configuration options go here
      options: {}
      });

      var ctx = document.getElementById('myChart2').getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'doughnut',
      // The data for our dataset
      data: {
        labels: [<?php echo labelvente();?>],/*'total'*/
        datasets: [{
            label: 'nombre de vente',
            data: [<?php echo nbrevente(); ?>],/*echo testctot();*/
            backgroundColor:
                poolColors([<?php echo nbrevente(); ?>].length),

            borderColor:
                poolColors([<?php echo nbrevente(); ?>].length),


        }]
      },
      // Configuration options go here
      options: {}
      });

      var ctx = document.getElementById('myChart3').getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'bar',

      // The data for our dataset
      data: {
        labels: [<?php echo labelvente();?>],/*'total'*/
        datasets: [{
            label: 'total des vente en €',
            data: [<?php echo vente(); ?>],/*echo testctot();*/
            backgroundColor: poolColors([<?php echo vente(); ?>].length),
            borderColor:
                poolColors([<?php echo vente(); ?>].length),

        }]
      },

      // Configuration options go here
      options: {}
      });
      //random color rgba
      function dynamicColors() {
          var r = Math.floor(Math.random() * 255);
          var g = Math.floor(Math.random() * 255);
          var b = Math.floor(Math.random() * 255);
          return "rgba(" + r + "," + g + "," + b + ", 0.5)";
      }
      //color with array.lenght for graph
      function poolColors(a) {
          var pool = [];
          for(i = 0; i < a; i++) {
              pool.push(dynamicColors());
          }
          return pool;
      }
      </script>

<?php
$content = ob_get_clean();
 require('template.php');
