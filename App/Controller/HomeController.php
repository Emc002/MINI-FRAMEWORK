<?php 
namespace Staditek\App\Controller;

use Staditek\App\Core\View;
use Staditek\App\Model\dataUser;

class HomeController
{
  private static $model;
  public function __construct()
  {
    self::$model= new dataUser();
  }
  public function index(){
    echo "heLLLO_-";
  }
  public function view(){
    $tampilData = self::$model->all();
    View::render('datauser', $tampilData);


  }

}