<?php
namespace Staditek\App\Model;

use Staditek\App\config\Database;

class dataUser extends Database{
  public function all(){
    $statement = self::$conn->prepare("select * from userdata");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

}