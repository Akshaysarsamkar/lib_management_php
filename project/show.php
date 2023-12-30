<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="show.css">
</head>

<body>
    
    <div id="main_contain">
        <h2>Library management system</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h1 class="center">show books</h1>

            <div id="userid">
                <label for="id">Student id</label>
                <input type="number" id="id" class="border" name="id">
            </div>

            <div>
                <button type="submit" name="submit" id="btn">Check</button>
            </div>


            <div>
                <center style="margin-top: 1rem;">
                    <p>Back  <a href="borrow.html">Back</a></p>
                   
                </center>
            </div>
        </form>
    </div>

    <?php
       error_reporting(E_ERROR | E_PARSE);
       if(!empty("submit") && !empty("id")){
        $i =  $_POST['id'];
    
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "project";
        $conn = mysqli_connect($server,$user,$pass,$dbname);
       
         $que = "select sname,bname,date from student,book,borrow WHERE student.sid = '$i' AND student.sid = borrow.sid and book.bid = borrow.bid";
        
         $res = mysqli_query($conn,$que);

        echo "<center>".
        "<table border='1' >
         <tr>
         <th>Student name</th>
         <th>Book Name</th>
         <th>Issue Date</th>
         <tr>";
         while($row = mysqli_fetch_assoc($res))
         {
                 echo "<tr>".
                 "<td>". $row['sname']." </td>". 
                 "<td>". $row['bname']."</td>".
                 "<td>". $row['date']."</td>".
                 "</tr>" ;
         }
       }
      echo "
        </table>
       "."</center>";
    ?>
    <script src="login.js"></script>
</body>

</html>