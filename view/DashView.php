<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>

    <div id="viewport">
      <!-- Sidebar -->
      <div id="sidebar">
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
      </div>
      <!-- Content -->
      <div id="content">
        <div class="container-top">
          <!-- Plugins searchbar/notifications/mails/login admin/  -->
        </div>

        <div class="dash-title">
          <h1> Page d'accueil / Dashboard </h1>
          <h6 id="subtitle"> Voici la description de la page d'accueil du dashboard </h6>
        </div>


        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <img src="../template/img/money.png">
              <h5 class="card-title">Ventes</h5>
            </div>
            <img src="../template/img/testgraph.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card">
            <div class="card-body">
              <img src="../template/img/trafic.png">
              <h5 class="card-title">Ventes/Catégories</h5>
            </div>
            <img src="../template/img/testgraph.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card">
            <div class="card-body">
              <img src="../template/img/sell.png">
              <h5 class="card-title">Traffic</h5>
            </div>
            <img src="../template/img/testgraph.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card">
            <div class="card-body">
              <img src="../template/img/tear.png">
              <h5 class="card-title">Fin de garantie</h5>
            </div>
            <img src="../template/img/testgraph.jpg" class="card-img-top" alt="...">
          </div>
        </div>


          <div class="card-deck">
            <div class="card cardlist">
              <div class="card-body">
                <!-- <img src="../template/img/crown.png" alt="..."> -->
                <table class="table">
                  <div class="title">
                  <img id="crown" src="../template/img/crown1.png">
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
                      <td><img src="../template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="../template/img/cart.png"></td>
                    </tr>
                    <tr id="silver">
                      <th scope="row">2</th>
                      <td><img src="../template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="../template/img/cart.png"></td>
                    </tr>
                    <tr id="bronze">
                      <th scope="row">3</th>
                      <td><img src="../template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="../template/img/cart.png"></td>
                    </tr>
                    <tr id="endlist">
                      <th scope="row">4</th>
                      <td><img src="../template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="../template/img/cart.png"></td>
                    </tr>
                    <tr id="endlist">
                      <th scope="row">5</th>
                      <td><img src="../template/img/livre.jpg"></td>
                      <td>L'odysée</td>
                      <td>Homère</td>
                      <td>9.99€</td>
                      <td>2748</td>
                      <td><button type="button" class="btn btn-success">Voir page</button></td>
                      <td><img src="../template/img/cart.png"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card">
              <div class="card-body" style="border-radius: 0%;">
                <h5 class="card-title">Stocks</h5>
              </div>
              <img src="../template/img/stats.jpg" class="card-img-top" alt="..." style="border-radius:0%;">
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
