<?php
   include ("config.php");

if (isset($_POST['waktu'])){
    echo "ada filenya bang";
}else{
    echo "filenya gaada bang";
}
 /*  $username = $_POST['username'];
   $password = $_POST['password'];
    
   $query = mysql_query("SELECT * FROM tbl_user WHERE username ='$username' AND password ='$password'");
   $cek = mysql_num_rows($query);
   echo $cek;
   
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($cek == 1) {
         header("location: datacuaca.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }*/
   
?>