<?php 
namespace Staditek\App\Core;


class View{

  public static function render(string $view, $data)
  {
    require_once __DIR__. '/../View/'.$view.'.php';
  } 
}