<?php

        $name = $_POST['uname'];
        $id = $_POST['pass'];
   
        echo $name . " ". $id;
    
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);
      
        if($conn){
            echo "<br>conne<br>";
        }
     
       $que =  "select LibName,Password from `librarian` where LibName='$name' and Password= '$id' ";
     
       $res = mysqli_query($conn,$que);

      if(mysqli_num_rows($res) > 0){
        while(  $row = mysqli_fetch_assoc($res)){
            if($name == $row['LibName'] && $id == $row['Password']){
                header("location:libhome.html");
            }
        }
      }
      else{
        header("location:signup.html");
      }
  ?>