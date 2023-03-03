<?php


$sql_chek = "SELECT * FROM users WHERE chat = '".$chatid."'";
        $chek = mysqli_query($db, $sql_chek);
        $thee = mysqli_num_rows($chek);
        
        if ($thee == 0) {
                        $sql_insert = "INSERT INTO users (chat,username,step,refby,joinon) VALUES('".$chatid."','@".$username."','none','".$ex[1]."','".$date."')";

                        $insert = mysqli_query($db, $sql_insert);
         }elseif($chatid == $ex[1]){
$insertstep = mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
mysqli_query($db, "UPDATE users SET username = '@".$username."' WHERE chat = '".$chatid."'");
$bot->send_message($chatid, "You cannot self refer yourself.", null, null, 'HTML');
        }else{
$insertstep = mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
mysqli_query($db, "UPDATE users SET username = '@".$username."' WHERE chat = '".$chatid."'");
$bot->send_message($chatid, "You are already user of this bot.", null, null, 'HTML');
        }


                   
           