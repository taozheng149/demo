<?php
namespace application\controller;
use demo\View;

class Index
{
  protected $view;
  public function __construct(){
    $this->view = new View();
  }
  public function index(){
    return $this->view->make('index');
  }
  public function show(){
    return $this->view->make('show');
  }
}


