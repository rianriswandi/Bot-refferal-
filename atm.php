<?php

$dates = date('d-m-Y');
  $tme = strtotime('1 day');
  $tmm = strtotime($dates);
$min = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='".$chatid."'"));
$num = $min['number'];
$bl = $min['balance'];
$lft = $bl - $text;
$pd = $min['paydate'];
$min1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM main WHERE id='1'"));
$bl1 = $min1['minipay'];
$out = $min1['payout'];


if($text >= $bl1 && $text <= $bl){
if($out == 'open'){
if($pd < $tmm){
$idd = rand(1,99999);
        $sql_insert = "INSERT INTO payment (id,chat,name,number,amt) VALUES('".$idd."','".$chatid."','".$first_name." ".$last_name."','".$num."','".$text."')";
        $insert = mysqli_query($db, $sql_insert);
 mysqli_query($db, "UPDATE users SET paydate = '".$tme."' WHERE chat = '".$chatid."'");
        $keyboard = new InlineKeyboardMarkup(true, false);
        $options[0][0] = ['text' => '✅ Payed', 'callback_data' => "1complete|||$idd"];
        $options[1][0] = ['text' => '❌ Cancel Request', 'callback_data' => "1refund|||$idd"];
        $keyboard->add_option($options);
  $bot->send_message(PAYOUT_GROUP_ID, "<b>💸New withdraw request</b>\n\n◈ ━━━━━━━ ● ━━━━━━━ ◈\nusername: @".$username."\nnumber:     <code>".$num."</code>\namount:     <code>".$text."</code> INR\n◈ ━━━━━━━ ● ━━━━━━━ ◈\n", null, json_encode($keyboard), 'HTML');
   
   
   mysqli_query($db, "UPDATE users SET step = 'none' WHERE chat = '".$chatid."'");
   mysqli_query($db, "UPDATE users SET balance = '".$lft."' WHERE chat = '".$chatid."'");            
        $menu = new ReplyKeyboardMarkup(true, false);        
        $options[0][0]="💳 Balance";
        $options[1][0]="🔋 Referral";
        $options[1][1]="🎰 Bonus";
        $options[1][2]="Withdraw 💵";
        $options[2][0]="📊 Statistic";
        $options[2][1]="💼 Set wallet";
        $menu->add_option($options);
        
       $bot->send_message($chatid, "💸 You successfully ordered withdrawal in amount of <b>".$text." INR</b> to the paytm wallet <b>".$num."</b>.\nWe will send it to your wallet within next few hours.", null, json_encode($menu), 'HTML');
  

}else{
$bot->send_message($chatid, "you can withdraw your balance only once per day.", null, null, 'HTML');
}
}else{
$bot->send_message($chatid, "Payouts are closed for now. Please try after sometime.", null, null, 'HTML');
}

}else{

$bot->send_message($chatid, "<b>💲 Withdrawal of your balance</b>\n\n<code>Your Balance:</code><b> ".$min[balance]." INR</b>\n<code>Your Paytm Number:</code><b> ".$min[number]."</b>\n\n🔻Please enter the amount to withdraw:", null, null, 'HTML');

}
