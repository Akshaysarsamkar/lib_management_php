
<?php
     
        $to = "sarsamkarakshay@gmail.com";
        $sub = "sdkjsandsn kj";
        $msg = "jwlijoijfijiffnkjnkjhfdshf";
        $header = "From:akahaysarsamkar087@gmail.com";

        if(mail($to,$sub,$msg,$header)){
            echo "<br>send";
        }else{
           echo "undone";
        }

?>

