<?php

mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
$menu = new ReplyKeyboardMarkup(true, false);
        
        $options[0][0]="📤 Send Broadcast";
        $options[0][1]="📥 Add Channel";
        $options[1][0]="📑 Channel list";
        $options[1][1]="👤 Admins list";
        $options[2][0]="ℹ️ Get User Info";
        $options[2][1]="🗃️ Commands";
        $options[3][0]="🎲 Goto Start Menu";
        $menu->add_option($options);
        
       $bot->send_message($chatid, "<b>👋 Welcome Admin.</b>", null, json_encode($menu), 'HTML');
  
       