<?php
namespace demo;
class Demo
{
  public static function index(){
    self::parseUrl();
  }
  public static function parseUrl(){
    if(isset($_GET['s'])){
      $info = explode('/',$_GET['s']);
      $class = "\application\controller\\".ucfirst($info[0]);
      $action = $info[1];
    }else{
      $class = "\application\controller\Index";
      $action = "show";
    }
     echo (new $class)->$action();
  }
}

