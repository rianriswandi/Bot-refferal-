<?php

if($forwardid){
$scr = $forwardid;
}else{
$scr = $ex[0];
}
  
  
$disp5 = "SELECT * FROM users WHERE chat = '$scr'";
                    $chin = mysqli_query($db, $disp5);
                    $tn = mysqli_num_rows($chin);
     
     if($tn == 1){

$disp = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='$scr'"));
$id = $disp['chat'];
$def = $disp['refby'];
$disp2 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='$def'"));
$id2 = $disp2['username'];
  
  $bot->send_message($chatid, "<b>🏦User details!\n\n</b>🆔 User ID : <code>".$id."</code>\n👨‍🦱 Username : ".$disp[username]."\n🙋‍♂️ refered by : ".$id2."\n👥 Referred : ".$disp[refer]."mems\n🎮 joined on : ".$disp[joinon]."\n💵 withdrawn : ".$disp[withdraw]."₹\n💰 Balance : ".$disp[balance]."₹\n📫 Paytm num : ".$disp[number]."\n👁️‍🗨️ Status : ".$disp[status]."\n", null, null, 'HTML'); 
  }else{
  $bot->send_message($chatid, "<b>🏦User details!\n\n</b>🆔 User ID : <code>".$scr."</code>\n\nUser not found in our database.", null, null, 'HTML'); 
  }