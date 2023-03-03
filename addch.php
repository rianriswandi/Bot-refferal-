<?php



if($there_admin == 1){
 mysqli_query($db, "UPDATE users SET step='add' WHERE chat='$chatid'"); 
 $keyboard = new ReplyKeyboardMarkup(true, false);
        $options[0][0]="🚫Cancel";       
         $keyboard->add_option($options);
          $bot->send_message($chatid, "📝 *Send AdminID, channel ID, and subscribers needed in just 3 words.\nEx:\n*18728212 -10012345672 500" , null, json_encode($keyboard), 'Markdown');                 
        }