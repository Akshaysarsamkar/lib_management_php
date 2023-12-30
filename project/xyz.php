<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form type="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
   Enter the name:
   <input type="text" name="n"><br>
    <button type = "submit" name ="sub">submit</button>
    </form>

  <?php 
      if(isset($_GET['sub']))
      {
      $name = $_GET['n'];
      echo "Name is".$name;
      }
   ?>

    
  </body>
</html>