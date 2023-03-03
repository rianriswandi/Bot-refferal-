<?php

if(preg_match('/^\d{10}$/',$ex[0])){
mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
$c = mysqli_query($db, "UPDATE users SET number = '".$ex[0]."' WHERE chat = '".$chatid."'");

        $menu = new ReplyKeyboardMarkup(true, false);       
        $options[0][0]="💳 Balance";
        $options[1][0]="🔋 Referral";
        $options[1][1]="🎰 Bonus";
        $options[1][2]="Withdraw 💵";
        $options[2][0]="📊 Statistic";
        $options[2][1]="💼 Set wallet";
        $menu->add_option($options);
       if($c){
       $bot->send_message($chatid, "Your wallet successfully changed.", null, json_encode($menu), 'HTML');
       }else{
       $bot->send_message($chatid,"<b>⚠️ Error</b>",null, json_encode($menu), 'HTML');
       }
  
}else{
$bot->send_message($chatid,"<b>⚠️ Invalid Number</b>",null, null, 'HTML');
}