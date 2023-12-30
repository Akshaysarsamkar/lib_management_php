<?php

        $name = $_GET['bname'];
        $id = $_GET['id'];
        $pub = $_GET['pub'];

    
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);
      
     
       $que =  "insert into `book`(`Bid`,`Bname`,`publication`) values('$id','$name','$pub')";

       $res = mysqli_query($conn,$que);

    
       header("location:libhome.html");
   
  ?>