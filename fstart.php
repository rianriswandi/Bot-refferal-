<?php

$sql_chek = "SELECT * FROM users WHERE chat = '".$chatid."'";
        $chek = mysqli_query($db, $sql_chek);
        $thee = mysqli_num_rows($chek);
   $minj = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM main WHERE id='1'"));
$mni = $minj['minipay'];     
$mni1 = $minj['refer'];    

        if ($thee == 0) {
        
  /*      $disp = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='".$ex[1]."'"));
        $disp2 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM main WHERE id='1'"));
     
        $ref = $disp[refer] + 1;
        $lev = $disp[balance];
        $di = $disp2[refer]; //main
        $di1 = $di + $lev;
        mysqli_query($db, "UPDATE users SET balance = '".$di1."' WHERE chat = '".$ex[1]."'");
        mysqli_query($db, "UPDATE users SET refer = '".$ref."' WHERE chat = '".$ex[1]."'");
        $bot->send_message($ex[1], "<b>âž•".$mni1." INR earned from new refferal.</b>",null, null, 'HTML');
     */   
        
        
                        $sql_insert = "INSERT INTO users (chat,username,step,joinon) VALUES('".$chatid."','@".$username."','none','".$date."')";

                        $insert = mysqli_query($db, $sql_insert);
                        }else{
$insertstep = mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
mysqli_query($db, "UPDATE users SET username = '@".$username."' WHERE chat = '".$chatid."'");
}
              
              
           
       