<?php

function chargerClasse($classe)
{
  require "model/". $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

function create(){
  if (isset($_POST['nom']) && isset($_POST['reference']) && isset($_POST['date_achat']) && isset($_POST['garantie']) && isset($_POST['prix']) && isset($_POST['categorie']) && isset($_POST['conseil']) && isset($_POST['adresse'])) {
    if($_POST['lieux_achat'] == 'vente direct'){
      $direct = input($_POST['adresse']);
      $ecommerce = '';
    }
    elseif ($_POST['lieux_achat'] == 'e-commerce') {
      $direct = '';
      $ecommerce = input($_POST['adresse']);
    }
    else{
      echo "veuillez choisir le lieux d'achat";
    }
  $createManager = new CreateManager;
  $nom = input($_POST['nom']);
  $reference = input($_POST['reference']);
  $date_achat = input($_POST['date_achat']);
  $garantie = input($_POST['garantie']);
  $prix = input($_POST['prix']);
  $categorie = input($_POST['categorie']);
  $conseil = input($_POST['conseil']);
  $addnew = $createManager->addnew($nom, $reference,$date_achat,$garantie,$prix,$categorie,$conseil,$direct,$ecommerce);
  addvente();
  header("Location: index.php",true,303);
  exit;

}
else{
  echo "<p class='alert alert-danger text-center p-2 m-0'>Veuillez renseigner tous les champs</p>";
}
}

function register(){
  if (isset($_POST['nom'], $_POST['email'], $_POST['password'])){
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $nom = input($_POST['nom']);
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $mail = input($_POST['email']);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = input($_POST['password']);

    $valid = filter_var($mail, FILTER_VALIDATE_EMAIL);
    if($valid==true){
    $adminManager = new AdminManager;
    $register = $adminManager->getRegister($nom,$mail,$password);
  }
  else{
    echo "Format mail incorrect";
  }
}
}

function admin(){
  $adminManager = new AdminManager;
  $admin = $adminManager-> isAdmin();
}

function loginConnexion(){
  $adminManager = new AdminManager;
  if (isset($_POST["user"]) && isset($_POST["password"])){
    $user=input($_POST["user"]);
    $password=input($_POST["password"]);
    $adminManager->getLogin($user,$password);
}
}

function deconnexion(){
  $adminManager = new AdminManager;
  $deco = $adminManager->deco();
}


function addvente(){
  $test=new testgraph;
  $noms=$test->teststock();
  $nomvente=$test->getnomvente();

  foreach ($nomvente as $nomv) {
    $nomve=$nomv['nom'];
  }
  foreach ($noms as $vente) {
    $nom=$vente['nom'];
    $stock=$vente['nomC'];
    $test->insertvente($nom,$stock);
}
}

function controledit(){
  if (isset($_GET['id']) && $_GET['id'] > 0) {
  if(isset($_POST['edit'])) {
    $nom =input($_POST['nom']);
    $reference =input($_POST['reference']);
    $date_achat = input($_POST['date_achat']);
    $date_garantie =input($_POST['date_garantie']);
    $prix =input($_POST['prix']);
    $conseil =input ($_POST['conseil']);
    $categorie =input($_POST['categorie']);
    $edit = new editManager;
    $edit2 = $edit -> editor($_GET['id'],$nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $categorie);
}
}
}

function editdisplay(){
  if (isset($_GET['id']) && $_GET['id'] > 0) {
  $edit = new editManager;
  $texts = $edit->edittext($_GET['id']);
  require("view/EditView.php");
}
}

function controleditimg() {
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    if(isset($_POST['edit'])){
    $edit = new editManager;
    $pictures = $edit-> editimg($_GET['id']);
}
}
}

//en poo class livres,
function booksList($offset, $total_records_per_page,$order,$ascdesc)
{
  $booksManager = new Book();
  if (isset($_GET['search'])){
    $search = htmlspecialchars(addcslashes($_GET['search'],'_'));
    $search="%".$search."%";
    $books = $booksManager->get_search($offset, $total_records_per_page,$order,$ascdesc,$search);
  } // Création d'un objet
  else {
    $books = $booksManager->get_all($offset, $total_records_per_page,$order,$ascdesc);  // Appel la fonction qui renvoie toutes les données sur les livres en bdd
  }
  // require('view/listView.php');
  return $books;
}

function page(){
  $page = new book();
  $resultats= $page->pagination();
  //pagination
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    }
    else {
        $page_no = 1;
      }
    $total_records_per_page = 10;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";
    $total_no_of_pages = ceil($resultats / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;
    $orderBy = array('nom', 'reference', 'date_achat', 'date_garantie','prix','categorie');
    //tri par nom,ref....,
    $order = 'nom';
      if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
        $order = $_GET['orderBy'];
      }
      //tri asc desc
      $sortBy = array('DESC','ASC' );
      if (isset($_GET['sort'])&&in_array($_GET['sort'], $sortBy)) {
        $ascdesc=($_GET['sort']=='ASC')? 'ASC' : 'DESC';
      }
      else {
        $ascdesc='ASC';
      }
        $books = booksList($offset, $total_records_per_page,$order,$ascdesc);

require('view/listView.php');
}

function bookDelete($id)
{
  $booksManager = new Book();
  $book = $booksManager->remove($_GET['id']);
  booksList();
}

function bookPage()
{
  $booksManager = new Book();
  $book = $booksManager->get_id($id);
  require('');
}

function controledisplay() {
   $displayer =  new editManager;
   $visuals = $displayer-> displayimg($_GET['id']);
   require('view/EditView.php');
 }

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
