<?php
require('controller/controller.php');
class testgraph extends Database {
  public function testcat(){
$conn = $this->dbConnect();
$sql = $conn->prepare("SELECT ROUND(SUM(prix),2) AS prixcat, categorie FROM livres GROUP BY categorie ");
$sql->execute();
$prix=$sql->fetchAll();
return $prix;
}

public function testtot(){
$db=$this->dbConnect();
$sql = $db->prepare("SELECT ROUND(SUM(prix),2) AS prixtotal FROM livres");
$sql->execute();
$prixtot=$sql->fetch();
return $prixtot;
}

public function teststock(){
  $prix_vente=8;
  $nbrevente=1;
$db=$this->dbConnect();
$sql = $db->prepare("SELECT COUNT(*) AS nomC, livres.nom, vente.nom AS vnom FROM livres INNER JOIN vente
GROUP BY livres.nom");
$sql->execute();
$nbrenom=$sql->fetchAll();
foreach ($nbrenom as $nom) {
  $lnom =$nom['nom'];
  $vnom = $nom['vnom'];


if ($lnom==$vnom){
$sql = $db->prepare("UPDATE vente SET stock =:stock, prix_vente=:prix_vente,nbre_vente=:nbre_vente");
$sql->bindParam(':stock',$nom['nomC']);
$sql->bindParam(':prix_vente',$prix_vente);
$sql->bindParam(':nbre_vente',$nbrevente);
foreach ($nbrenom as $nom) {
  $insertnom=$sql->execute();
}
  return $insertnom;
}
else {
  $sql = $db->prepare("INSERT INTO vente (nom,stock,prix_vente,nbre_vente) VALUES (?,?,?,?) ");
  foreach ($nbrenom as $nom) {
    $insertnom=$sql->execute(array($nom['nom'],$nom['nomC'],$prix_vente,$nbrevente));

  }
return $insertnom;
}
}


}

}
function testctotgraph(){
$test=new testgraph;
$prix=$test->testtot();
echo $prix['prixtotal'];
}
function testcatgraph(){
$test=new testgraph;
$prix=$test->testcat();
foreach ($prix as $pri) {
  echo "'".$pri['categorie']."',";
}
}
function testprix(){
$test=new testgraph;
$prix=$test->testcat();
foreach ($prix as $pri) {
  echo $pri['prixcat'].",";
}
}

// Stock vente
function nbrenom(){
$test=new testgraph;
$noms=$test->teststock();

}


echo testprix()."<br>";
echo testcatgraph()."<br>";
echo testctotgraph()."<br>";

 // echo nbrenom();
 nbrenom();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Yoann Abran, Kévin Nguma, Warrenn Maunier">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3bd5358b64.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>

  <canvas id="myChart" width="500px" height="100px" ></canvas>

<script>
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
      backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(0, 192, 50, 0.2)',
      ],
      borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(1, 200, 50, 1)',
      ],

  }]
},

// Configuration options go here
options: {}
});
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
