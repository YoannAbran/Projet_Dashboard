<<<<<<< HEAD
<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>
<div class="">
  <h1>Home</h1>
</div>

<div class="container-fluid d-flex flex-column">
  <div class="container d-flex">
  <div class="container border border-dark p-2">
    <canvas id="myChart" ></canvas>
  </div>
  <div class="container border border-dark p-2" >
    <canvas id="myChart2" ></canvas>
  </div>
  </div>
  <div class="container d-flex">
  <div class="container border border-dark p-2">
    <canvas id="myChart3" ></canvas>
  </div>
  <div class="container border border-dark p-2">
    <canvas id="myChart4" ></canvas>
  </div>
  </div>
</div>

<div class="">
  <p>Total des ventes : <span class="font-weight-bolder"><?php echo prixtotalvente();?></span> €<br></p>
  </div>
<div class="">
    <p>Total des achat : <span class="font-weight-bolder"><?php echo testctotgraph();?></span> €<br></p>
  </div>
<div class="">
  <p>Nombre d'achat : <span class="font-weight-bolder"><?php echo nbretotalachat();?></span><br></p>
  </div>
<div class="">
  <p>Nombre de vente : <span class="font-weight-bolder"><?php echo nbretotalvente();?></span><br></p>
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
      var ctx = document.getElementById('myChart4').getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: ['',<?php echo getcatyear();?>'total'],/*'total'*/
        datasets: [{
            label: 'achat par categorie sur l\'année 2020',
            data: [0,<?php echo getpriyear(); echo getpritotyear(); ?>],/*echo testctot();*/
            backgroundColor: poolColors(['',<?php echo getcatyear(); ?>'total'].length),
            borderColor:
                poolColors(['',<?php echo getcatyear(); ?>'total'].length),


        }]
      },

      // Configuration options go here
      options: {

      }
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
          for(i =0 ; i <= a; i++) {
              pool.push(dynamicColors());
          }
          return pool;
      }
      </script>

<?php
$content = ob_get_clean();
 require('template.php');
=======
<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>

<div class="container-fluid d-flex flex-column">
  <div class="container d-flex">
  <div class="container border border-dark p-2">
    <canvas id="myChart" ></canvas>
  </div>
  <div class="container border border-dark p-2" >
    <canvas id="myChart2" ></canvas>
  </div>
  </div>
  <div class="container d-flex">
  <div class="container border border-dark p-2">
    <canvas id="myChart3" ></canvas>
  </div>
  <div class="container border border-dark p-2">
    <canvas id="myChart4" ></canvas>
  </div>
  </div>
</div>

<div class="">
  <p>Total des ventes : <span class="font-weight-bolder"><?php echo prixtotalvente();?></span> €<br></p>
  </div>
<div class="">
    <p>Total des achat : <span class="font-weight-bolder"><?php echo testctotgraph();?></span> €<br></p>
  </div>
<div class="">
  <p>Nombre d'achat : <span class="font-weight-bolder"><?php echo nbretotalachat();?></span><br></p>
  </div>
<div class="">
  <p>Nombre de vente : <span class="font-weight-bolder"><?php echo nbretotalvente();?></span><br></p>
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
      var ctx = document.getElementById('myChart4').getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: ['',<?php echo getcatyear();?>'total'],/*'total'*/
        datasets: [{
            label: 'achat par categorie sur l\'année 2020',
            data: [0,<?php echo getpriyear(); echo getpritotyear(); ?>],/*echo testctot();*/
            backgroundColor: poolColors(['',<?php echo getcatyear(); ?>'total'].length),
            borderColor:
                poolColors(['',<?php echo getcatyear(); ?>'total'].length),


        }]
      },

      // Configuration options go here
      options: {

      }
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
          for(i =0 ; i <= a; i++) {
              pool.push(dynamicColors());
          }
          return pool;
      }
      </script>

<?php
$content = ob_get_clean();
 require('template.php');
>>>>>>> ea90533c5376cedbadadcf487d96f5eb447a9414
