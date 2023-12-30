<?php

        $n = $_POST['uname'];
        $i =  $_POST['id'];
        $p =  $_POST['password'];
        $c = $_POST['cname'];


       
    
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);
      
        
     
       $que =  "insert into `librarian`(`LibID`,`LibName`,`Password`,`Collage_Name`) values ('$i','$n','$p','$c')";

       $res = mysqli_query($conn,$que);
    
       header("location:login.html");
     
  ?>