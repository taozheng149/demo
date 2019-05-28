<?php
function pd($var,$debug=false){
  if(is_array($var) || is_object($var)){
    echo '<pre style="padding:15px;color:#666;background:#efefef;border:1px solid #ccc;border-radius: 5px;">';
        print_r($var);
      echo '</pre>';
  }else{
    echo $var;
  }        
 if($debug){
   die;
 }
}
