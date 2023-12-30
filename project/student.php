<?php
          error_reporting(E_ERROR | E_PARSE);
        $n = $_GET['name'];
        $i = $_GET['id'];
        $m = $_GET['mail'];
        $pn = $_GET['pno'];
        $Cl = $_GET['Class'];
        $add = $_GET['addbtn'];
        $back = $_GET['return'];

     
        if(isset($add)){
 
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);
      
      
        
       $que =  "insert into `student`(`sid`,`sname`,`mail`,`pno`,`Class`) values('$i','$n','$m','$pn','$Cl')";


       $res = mysqli_query($conn,$que);
    
      
        $to =  $m ;
        $sub = "become a member of .... college library";
        $msg = "Hello $n 
         you are become a member of bjs collage library now your are take a book from our library";
        $header = "From:  sarsamkarakshay@gmail.com";
        mail($to,$sub,$msg,$header);
       header("location:libhome.html");

    }else if(isset($back))
    {
        header("location:libhome.html");
    }
  ?>