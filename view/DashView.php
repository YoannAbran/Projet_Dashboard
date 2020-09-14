<?php
  ob_start();
  session_start();
  session_regenerate_id();
?>


    <!-- <div id="viewport">
      <!-- Sidebar -->
      <!--   <div id="sidebar">
        <header>
          <a href="#"><span id="boo">Boo</span>King</a>
        </header>
        <ul class="nav">
          <li>
            <a href="#">
              <i class="zmdi zmdi-view-dashboard"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-link"></i> Tableaux
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-widgets"></i> Catégories
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-calendar"></i> Emails
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-info-outline"></i> Notifications
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-settings"></i> Paramètres
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-comment-more"></i> Contact
            </a>
          </li>
        </ul>
      </div>-->
      <!-- Content -->
      <div id="content">
        <div class="container-top">
          <!-- Plugins searchbar/notifications/mails/login admin/  -->
        </div>

<div class="card-deck row-cols-lg-3 row-cols-md-1">
<div class="col">

    <div class="card ">
      <div class="card-body">
        <img src="template/img/money.png">
        <h5 class="card-title">Ventes</h5>
      </div>
      <canvas id="myChart" ></canvas>
    </div>
</div>

<div class="col">
  <div class="card ">
    <div class="card-body">
      <img src="template/img/trafic.png">
      <h5 class="card-title">Ventes/Catégories</h5>
    </div>
    <canvas id="myChart2" ></canvas>
  </div>
</div>

<div class="col">
  <div class="card ">
    <div class="card-body">
      <img src="template/img/sell.png">
      <h5 class="card-title">Traffic</h5>
    </div>
      <canvas id="myChart3" ></canvas>
  </div>
</div>

<div class="col">
  <div class="card ">
    <div class="card-body">
      <img src="template/img/tear.png">
      <h5 class="card-title">Fin de garantie</h5>
    </div>
  <canvas id="myChart4" ></canvas>
  </div>
</div>
</div>


        <!-- <div class="" id="list_book">
          <div class="card-deck" >
            <div class="card cardlist">
              <div class="card-body">
                <img src="template/img/crown.png" alt="...">
                <table class="table">
                  <div class="title">
                  <img id="crown" src="template/img/crown1.png">
                  <h5 class="card-title titlelist">Best-Sellers</h5>
                  </div>
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Titre</th>
                      <th scope="col">Auteur</th>
                      <th scope="col">Prix</th>
                      <th scope="col">Ventes</th>
                      <th scope="col"></th>
                      <th scope="col">Revendeurs</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="gold">
                      <th scope="row">1</th>
                      <td><img src="template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="template/img/cart.png"></td>
                    </tr>
                    <tr id="silver">
                      <th scope="row">2</th>
                      <td><img src="template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="template/img/cart.png"></td>
                    </tr>
                    <tr id="bronze">
                      <th scope="row">3</th>
                      <td><img src="template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="template/img/cart.png"></td>
                    </tr>
                    <tr id="endlist">
                      <th scope="row">4</th>
                      <td><img src="template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="template/img/cart.png"></td>
                    </tr>
                    <tr id="endlist">
                      <th scope="row">5</th>
                      <td><img src="template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="template/img/cart.png"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> -->

        </div>
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
