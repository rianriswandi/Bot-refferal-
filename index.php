<?php

date_default_timezone_set("Asia/Kolkata");
require('bot.php');
require('sublib.php');
require('config.php');




$db = mysqli_connect('localhost', "$dbusr", "$dbpas", "$dbnam");


$bot = new telegram_bot($token);


$update = json_decode(file_get_contents('php://input'));
$data = $bot->read_post_message();
$message = $data->message;  
$date = $message->date;
$chatid = $message->chat->id;
$typec = $message->chat->type;
$username = $message->chat->username;
$forwardid = $message->forward_from->id;
$forward = $message->forward_from->username;
$forwardch = $message->forward_from_chat->id;
$first_name = $message->chat->first_name;
$last_name = $message->chat->last_name;
$first_name1 = $update->callback_query->message->chat->first_name;
$last_name1 = $update->callback_query->message->chat->last_name;
$mid = $message->message_id;
$text = @$message->text;
$reply = $message->reply_to_message->text;
$replyid = $message->reply_to_message->forward_from->id;
$callback = $update->callback_query->id;
$data2 = $update->callback_query->data;
$chatid2 = $update->callback_query->message->chat->id;
$username2 = $update->callback_query->message->chat->username;
$mid2 = $update->callback_query->message->message_id;
$mid3 = $update->callback_query->message->inline_message_id;
$document = $message->document->file_id;
    $photo = $message->photo[1]->file_id; 
    $video = $message->video->file_id;
    $voice = $message->voice->file_id;
    $audio = $message->audio->file_id;
    $caption = $message->caption;

$ex = explode(" ", $text);

echo "Bot online. Expires on $expire";
    function getId($id){
    $px = substr_count($id,"@");
    if($px == 1){
        return $id;
        }else{
            return $id;
        }
}

$date=date('d-m-Y');
$credit = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM main WHERE id='1'"));
$cdt = $credit['credit'];  
$cdtd = $credit['creditdate'];  

  $admin = "SELECT * FROM admins WHERE u_id = '$chatid'";
                    $check_admin = mysqli_query($db, $admin);
                    $there_admin = mysqli_num_rows($check_admin);
                    
  $admin1 = "SELECT * FROM admins WHERE u_id = '$chatid2'";
                    $check_admin1 = mysqli_query($db, $admin1);
                    $there_admin1 = mysqli_num_rows($check_admin1);
                    
  $row = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='$chatid2'"));
$step = $row['step'];
  $row1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='$chatid'"));
$step1 = $row1['step'];                                   
 if($date != $cdtd && $cdt >= '3.5'){
    $cdtup = number_format($cdt - 3.5, 2);
     mysqli_query($db, "UPDATE main SET credit = '".$cdtup."' WHERE id = '1'");
     mysqli_query($db, "UPDATE main SET creditdate = '".$date."' WHERE id = '1'");
     $cdtd = $date;
  }
    
  if($ex[0] == '/cdt' && $chatid == $botcreator){
  require('commands/topup.php');
  }
    
    if($date == $cdtd){

$stat1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM channel WHERE id ='1'"));
$chid1 = $stat1['cid'];
$stat2 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM channel WHERE id ='2'"));
$chid2 = $stat2['cid'];
$stat3 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM channel WHERE id ='3'"));
$chid3 = $stat3['cid'];
$stat4 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM channel WHERE id ='4'"));
$chid4 = $stat4['cid'];
$stat5 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM channel WHERE id ='5'"));
$chid5 = $stat5['cid'];
    
if($text){    
$z1 = $bot->getAdmin($chid1, $chatid);
$z2 = $bot->getAdmin($chid2, $chatid);
$z3 = $bot->getAdmin($chid3, $chatid);
$z4 = $bot->getAdmin($chid4, $chatid);
$z5 = $bot->getAdmin($chid5, $chatid);
$y3 = $bot->getAdmin($chid3, BOT_ID);
$y4 = $bot->getAdmin($chid4, BOT_ID);
$y5 = $bot->getAdmin($chid5, BOT_ID);

$s1 = $z1->result->status;
$s2 = $z2->result->status;
$s3 = $z3->result->status;
$s4 = $z4->result->status;
$s5 = $z5->result->status;
$s6 = $y3->result->status;
$s7 = $y4->result->status;
$s8 = $y5->result->status;
}else{
$z1 = $bot->getAdmin($chid1, $chatid2);
$z2 = $bot->getAdmin($chid2, $chatid2);
$z3 = $bot->getAdmin($chid3, $chatid2);
$z4 = $bot->getAdmin($chid4, $chatid2);
$z5 = $bot->getAdmin($chid5, $chatid2);
$y3 = $bot->getAdmin($chid3, BOT_ID);
$y4 = $bot->getAdmin($chid4, BOT_ID);
$y5 = $bot->getAdmin($chid5, BOT_ID);

$s1 = $z1->result->status;
$s2 = $z2->result->status;
$s3 = $z3->result->status;
$s4 = $z4->result->status;
$s5 = $z5->result->status;
$s6 = $y3->result->status;
$s7 = $y4->result->status;
$s8 = $y5->result->status;
}    
    
  


if($s1 != 'left' && $s2 != 'left' && $s3 != 'left' && $s4 != 'left' && $s5 != 'left' || $there_admin == 1 || $there_admin1 == 1){  
                        
  if($typec == 'private'){                      
  if ($cdt <= '3.5' && $there_admin == 1){
  $bot->send_message($chatid, "<b>⚠️Your bot expires tomorrow.</b>\nAdd credits to your bot to avoid bot stop.", null, null, 'HTML'); 
  }
  
      if($text == '/start' || $text == '🎲 Goto Start Menu' || $text == '🚫 Cancel' || $text == '/cancel' || $text == '🎪 Home'){
      require('commands/start.php');  
      }
       
      elseif ($ex[0] == '/start' && is_numeric($ex[1])){
      require('commands/start2.php');     
      }
      
      elseif ($text == '✅ Joined'){
      require('commands/joined.php');     
      }
      
      elseif ($text == '💳 Balance'){
      require('commands/balance.php');     
      }
      
      elseif ($text == '🔋 Referral'){
      require('commands/refer.php');     
      }
      
      elseif ($text == '🎰 Bonus'){
      require('commands/bonus.php');     
      }
      
      elseif ($text == '📊 Statistic'){
      require('commands/stat.php');     
      }
      
      elseif ($text == '💼 Set wallet'){
      require('commands/setwallet.php');     
      }
      
      elseif(is_numeric($text) && $step1 == 'wallet'){
      require('commands/updatewallet.php');     
      }
      
      elseif(is_numeric($text) && $step1 == 'pwallet'){
      require('commands/pwallet.php');     
      }
      
      elseif(is_numeric($text) && $step1 == 'withdraw'){
      require('commands/atm.php');     
      }
      
      elseif($text == 'Withdraw 💵'){
      require('commands/withdraw.php');     
      }            
      
      elseif($text == '🌱admin panel' && $there_admin == 1 || $text == '🚫Cancel' && $there_admin == 1){
      require('commands/admin.php');     
      }
      
      elseif($text == '👤 Admins list' && $there_admin == 1){ 
      require('commands/adminlist.php');
      }
      
      elseif($text == '📑 Channel list' && $there_admin == 1){ 
      require('commands/chlist.php');
      }
      
      elseif($text == '📤 Send Broadcast' && $there_admin == 1){
      require('commands/broadcast.php');
      }
      
      elseif($text == '📥 Add Channel' && $there_admin == 1){
      require('commands/addch.php');
      }
      
      elseif($step1 == 'sendPost' && $text || $step1 == 'sendPost' && $photo ){
      require('commands/send.php');
      }
      
      elseif($step1 == 'add' && $text ){
      require('commands/addch1.php');
      }
      
      elseif($text == 'ℹ️ Get User Info' && $there_admin == 1){
      require('commands/userinfo.php');
      }
      
      elseif(is_numeric($text) && $step1 == 'userinfo' || $forwardid && $step1 == 'userinfo'){
      require('commands/userinfo2.php');
      }
      
      elseif($ex[0] == '/refer' && $there_admin == 1){
      require('commands/setrefer.php');
      }
      
      elseif($ex[0] == '/bonus' && $there_admin == 1){
      require('commands/setbonus.php');
      }
      
      elseif($ex[0] == '/minipay' && $there_admin == 1){
      require('commands/minipay.php');
      }
      
      elseif($ex[0] == '/payout' && $there_admin == 1){
      require('commands/payout.php');
      }
      
      elseif($ex[0] == '/addadmin' && $there_admin == 1){
      require('commands/addadmin.php');
      }

      elseif($ex[0] == '/removeadmin' && $there_admin == 1){
      require('commands/removeadmin.php');
      }
      
      elseif($text == '🗃️ Commands' && $there_admin == 1){
      require('commands/command.php');
      }
	
}else{	
      if(preg_match('/^(1complete\|\|\|[0-9]{1,50})$/',$data2) ){
      require('commands/payoutdone.php');
      }
      
      elseif(preg_match('/^(1refund\|\|\|[0-9]{1,50})$/',$data2)){
      require('commands/payoutcancel.php');
      }}}else{
      
       $menu = new ReplyKeyboardMarkup(true, false);        
       $options[0][0]="✅ Joined";        
       $menu->add_option($options);
        
       $bot->send_message($chatid, "💡 To use this bot you must be subscribed to All below Channels.\n\n★official★\n".$stat1['username']."\n".$stat2['username']."\n\n★promotion★\n".$stat3['username']."\n".$stat4['username']."\n".$stat5['username']."\n\nAfter Join All Channel Click ✅Joined Button", null, json_encode($menu), 'HTML');
  
      
      if($text == '/start' || $text == '🎲 Goto Start Menu' || $text == '🚫 Cancel' || $text == '/cancel' || $text == '🎪 Home'){
      require('commands/fstart.php');  
      }
       
      elseif ($ex[0] == '/start' && is_numeric($ex[1])){
      require('commands/fstart2.php');     
      }
}       

if($s6 == 'left'){
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat3['username']." has removed bot.", null, null, 'HTML');
}
if($s7 == 'left'){
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat4['username']." has removed bot.", null, null, 'HTML');
}
if($s8 == 'left'){
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat5['username']." has removed bot.", null, null, 'HTML');
}

$sub = new subscriber_update($token);
if($chid3){
$subscriber = $sub->get_chat_member_count($chid3);
$subs_count = $subscriber->result;
$tm = $stat3['member'];
if($tm < $subs_count){
mysqli_query($db, "DELETE FROM channel WHERE cid = '".$chid3."'");
mysqli_query($db, "ALTER TABLE channel DROP id");
mysqli_query($db, "ALTER TABLE channel AUTO_INCREMENT = 1");
mysqli_query($db, "ALTER TABLE channel ADD id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat3['username']." total $subs_count completed.", null, null, 'HTML');
$bot->send_message($stat3['user'], "channel ".$stat3['username']." total $subs_count promo completed.", null, null, 'HTML');
}}

if($chid4){
$subscriber = $sub->get_chat_member_count($chid4);
$subs_count = $subscriber->result;
$tm = $stat4['member'];
if($tm < $subs_count){
mysqli_query($db, "DELETE FROM channel WHERE cid = '".$chid4."'");
mysqli_query($db, "ALTER TABLE channel DROP id");
mysqli_query($db, "ALTER TABLE channel AUTO_INCREMENT = 1");
mysqli_query($db, "ALTER TABLE channel ADD id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat4['username']." total $subs_count completed.", null, null, 'HTML');
$bot->send_message($stat4['user'], "channel ".$stat4['username']." total $subs_count promo completed.", null, null, 'HTML');
}}

if($chid5){
$subscriber = $sub->get_chat_member_count($chid5);
$subs_count = $subscriber->result;
$tm = $stat5['member'];
if($tm < $subs_count){
mysqli_query($db, "DELETE FROM channel WHERE cid = '".$chid5."'");
mysqli_query($db, "ALTER TABLE channel DROP id");
mysqli_query($db, "ALTER TABLE channel AUTO_INCREMENT = 1");
mysqli_query($db, "ALTER TABLE channel ADD id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
$bot->send_message(ADMIN_CHAT_ID, "channel ".$stat5['username']." total $subs_count completed.", null, null, 'HTML');
$bot->send_message($stat5['user'], "channel ".$stat5['username']." total $subs_count promo completed.", null, null, 'HTML');
}}


} 
    
mysqli_close($db);
