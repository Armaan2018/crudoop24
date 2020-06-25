<?php 





class User extends DB {


/*

  creating method for user registration

*/


   public function registerUser($name,$email,$cell,$uname)


   {

    $sql  = "INSERT INTO tbl_user_info(name,email,cell,uname) VALUES('$name','$email','$cell','$uname')";
   	$data = parent::connection() -> query($sql);



   }

   /*

  creating method for showing registered users

*/



   public function showingUsers(){


        $sql  = "SELECT * FROM tbl_user_info";
        $data = parent::connection() -> query($sql);

        return $data;
   }

  /*

  creating method for showing single profile

*/



   public function singleProfile($userid){

        $sql  = "SELECT * FROM tbl_user_info WHERE id = '$userid'";
        $data = parent::connection() -> query($sql);
        return $data;

   }

   /*

  creating method for delete users

*/


   public function deleteUser($del_id){
      
      $sql  =  "DELETE FROM tbl_user_info WHERE id = '$del_id' ";
      $data = parent::connection() -> query($sql);
      return $data;


   }

/*

  creating method for update user profile

*/



   public function upadateUser($name,$email,$cell,$uname,$userid){
    $sql  ="UPDATE tbl_user_info SET name = '$name', email = '$email' , cell = '$cell' , uname = '$uname' WHERE id = $userid";
    $data = parent::connection() -> query($sql);

   }



}












 ?>