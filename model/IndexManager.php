<?php
class IndexManager extends Database
{

  public function selectAll(){
    $conn = $this->dbConnect();
    $sql = $conn->prepare("SELECT *
                            FROM livres
                            ");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
  }
  public function delete($id){
    $conn = $this->dbConnect();
    $sql = $conn-> prepare("DELETE FROM livres
      WHERE id = :id");
    $del = $sql->execute(array(':id'=>$id));
    $del = $conn -> prepare("DELETE FROM lieux_achat WHERE id_livre = :id");
      $del = $sql->execute(array(':id'=>$id));
    return $del;
  }
}
