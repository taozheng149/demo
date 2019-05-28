<?php
namespace demo;

class View
{
  protected $file;
  protected $vars = [];
  public function make($file){
    $this->file = 'application/view/'.$file.'.html';
    return $this;
  }
  public function with($name,$value){
    $this->vars[$name] = $value;
    return $this;
  }
  public function __toString(){
    include $this->file;
    return '';
  }
}

