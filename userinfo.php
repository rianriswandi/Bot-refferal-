<?php



 mysqli_query($db, "UPDATE users SET step='userinfo' WHERE chat='$chatid'"); 
 $keyboard = new ReplyKeyboardMarkup(true, false);
        $options[0][0]="🚫Cancel";        
        $keyboard->add_option($options);
          $bot->send_message($chatid, "<b>Send the user ID (or) forward a message from user get user details.</b>" , null, json_encode($keyboard), 'HTML');    
   