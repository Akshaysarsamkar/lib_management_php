<?php

        $bid = $_POST['bid'];
        $i = $_POST['sid'];
        $date = date("Y-d-m"); 
        // $add = $_POST['add'];
    
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);

      if(isset($_POST["add"])){
        $que =  "insert into `borrow`(`bid`,`sid`,`date`) values('$bid','$i',NOW())";
        $res = mysqli_query($conn,$que);
        
        header("location:libhome.html");
        
    }else{
        $que =  "DELETE FROM `borrow` WHERE bid= '$bid'; ";
        $res = mysqli_query($conn,$que);
        header("location:libhome.html");
        }
  ?>