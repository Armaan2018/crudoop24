<?php 





class User extends DB {


   public function registerUser($name,$email,$cell,$uname)


   {

    $sql  = "INSERT INTO tbl_user_info(name,email,cell,uname) VALUES('$name','$email','$cell','$uname')";
   	$data = parent::connection() -> query($sql);



   }


   public function showingUsers(){


        $sql  = "SELECT * FROM tbl_user_info";
        $data = parent::connection() -> query($sql);

        return $data;
   }



}












 ?>