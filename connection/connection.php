
 <?php
 function CreatConnection(){
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "todos";
     $conn = new mysqli($dbhost , $dbuser , $dbpass , $dbname);

     if($conn->connect_error){
         echo 'db error';
         die();
 }
     return $conn;
 };  
 ?>  
 

