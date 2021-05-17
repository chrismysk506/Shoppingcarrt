  <header>
       
   
     <ul class="headr">
         <li class="bolds"><a href="index.html"> <b>Company Name</b>  </a> </li>
        
         <li class="headerright"> <a href="index.html"> The world's largest  platform </a></li>
          
        </ul>   
             </header>
     

    
     
           <nav>
              <ul class="navg" id="dropdown">
               <li class="home "><a href="index.php">Home</a></li>
                  <li><a href="phphome.php">About</a></li>
                  <li><a href="javahome.php">Contact us</a></li>
                   <li class="x"><a href="Login.php">Login</a></li>

                  <li class="dropicon">
                      <a href="javascript:void(0);" onclick="func()">&#9776;</a>
                  </li>
                  
               </ul>
                
             <script type="text/javascript">
                 var x=document.getElementById("dropdown");
                function func()
                 {
                     if(x.className==="navg")
                         {
                             x.className+=" responsive";
                         }
                     else{
                         x.className="navg";
                     }
                     
                 }
               
               
               
               </script>  
                  
               
           </nav>