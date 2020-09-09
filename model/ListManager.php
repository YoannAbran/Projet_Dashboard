<?php
class ListManager extends Database
{
  public function pagination(){
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }
    $conn = $this->dbConnect();
    $sql = 'SELECT * FROM livres';
    $query=$conn->prepare($sql);
    $query->execute();
    $pagin = $query->rowCount();
    $parPage = 15;
    $pages = ceil($pagin/ $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $search='SELECT * FROM livres LIMIT :premier, :parpage; ';
    $resultats=$conn->prepare($search);
    $resultats->bindValue(':premier', $premier, PDO::PARAM_INT);
    $resultats->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $resultats->execute();
    return $resultats;
  }
}
