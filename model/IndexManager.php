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
}
