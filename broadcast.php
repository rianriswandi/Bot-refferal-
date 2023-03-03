<?php



if($there_admin == 1){
 mysqli_query($db, "UPDATE users SET step='sendPost' WHERE chat='$chatid'"); 
 $keyboard = new ReplyKeyboardMarkup(true, false);
        $options[0][0]="🚫Cancel";       
         $keyboard->add_option($options);
          $bot->send_message($chatid, "🖼️ *Send/Forward your post with any type with/without caption*\ni will forward it to all users." , null, json_encode($keyboard), 'Markdown');                 
        }