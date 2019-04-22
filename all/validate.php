<?php 
  class validate(){
    public static function post($a){
      return isset($_POST[$a]);
    }
    public static function get($a){
      return isset($_GET[$a]);
    }
  }
 ?>
