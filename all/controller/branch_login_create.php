<?php
  $check = true;
  require "../module/conectDB.php";
  $user_id = "";
  $user_pass = "";
  $user_name = "";
  function iru($p) {
    $sql = "SELECT * FROM USERS WHERE (user_name='".
            $_POST['user_name'].
            "')";
    $stmt = $p -> prepare($sql);
    $stmt -> execute();
    $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
    var_dump($rec);
    return true;
  }
  function t(){
    return true;
  }
  if(isset( $_POST["make"] ) ){
    header("Location:../view/createUser.php");
    exit;
  }
  $errorMessage="";
  $dum = false;
  if(empty($_POST["user_name"])){
      $errorMessage = "nullNameError=true,";
      $check = false;
  }
  else{
      if( iru($pdo) ){}
      else{
        $check = false;
        $errorMessage = $errorMessage.",ilegalNameError=true;";
      }
  }

  if(empty($_POST["password"])){
      $errorMessage = $errorMessage."nullPasswordError=true;";
      $check = false;
  }
  else{
      if( t() ){}
      else{
        $check = false;
        $errorMessage = $errorMessage.",ilegalPasswordError=true;";
      }
  }
  /*var_dump($_POST["user_name"]);
  var_dump($_POST["password"]);*/
  /*if($check){
    header("Location:../view/main.php");
    exit;
  }
  else{
    header("Location:../index.html?=".$errorMessage);
    exit;
  }*/
 ?>
