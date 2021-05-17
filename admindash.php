<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/web.css">
        <title>Document</title>
    </head>
    <body>
        <?php include 'header.php'?>

          <div class="mycardcontainer">
       <?php

             session_start();
             $DB_server='localhost';
             $DB_Username='root';
             $DB_password='';
             $DB_database='testdb';
             $conn=mysqli_connect($DB_server,$DB_Username,$DB_password,$DB_database);
                if(!$conn)
                      {
                         echo 'connection failed';
                        }
               $sql="SELECT * FROM datatable ";
               $res=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($res))  
                {
                    
                    
         ?>
            
                         <div class="salecard">
                               <img src='<?php echo $rows['imageurl']?>'/>
                            <div class="inf">
                                <h1 class="cardname"><?php echo $rows['name'];?></h1>
                                <p class="cardprice"><?php echo $rows['price'];?></p>
                                <div class="twobtn">
                                <button class="adminbtn" id="<?php echo $rows['id'];?>">Edit</button>
                                <button type="button" class="adminbtn" id="<?php echo $rows['id'];?>" onclick="myfunc(this.id)">Delete</button>
                                
                                </div>

                            </div>

                          </div>
            
              <?php } ?> 

          </div>
           
         <?php include 'footer.php'?>

<script>
    function myfunc(id)
    {
        console.log("hi");
        console.log(id);
   
    }


    </script>

         
    </body>
    </html>