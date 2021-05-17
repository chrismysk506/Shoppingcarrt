<?php 
  session_start();
  $DB_SERVER ='localhost';
  $DB_USERNAME='root';
  $DB_Password='';
  $DB_DATABASE='testdb';
  $conn=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_Password,$DB_DATABASE);
   if(!$conn){
       echo 'connection failed';
   }

  if(isset($_POST['username']) && isset($_POST['password']))
  {                 
                 $uname=$_POST['username'];
                  $pass=$_POST['password'];
                

                  $sql=" SELECT * FROM users WHERE  password = '$pass' AND username ='$uname'";
                  $res=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($res)===1)
                  {
                      $row=mysqli_fetch_assoc($res);
                      echo($row['username']);
                      echo($row['password']);
                      header('Location: admindash.php');
                    }
                  else{
                       header('Location:Login.php');
                       
                      exit();
                  }
                  
                      
                
                

  }
  

  
 
?>



