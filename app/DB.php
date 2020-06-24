<?php 






abstract class DB 

{

  private $host   = "localhost";
  private $user   = "root";
  private $pass   = "";
  private $dbname = "crudoop";

  private $conn;


  protected function connection(){
      

      $this -> conn = new mysqli($this -> host,$this -> user,$this -> pass,$this -> dbname);
      return $this -> conn;



  } 










}














 ?>