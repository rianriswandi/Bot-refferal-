0<?php



  $dates = date('d-m-Y h:i:sa');
  $tme = strtotime('1 day');
  $tmm = strtotime($dates);
  $chk = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='".$chatid."'"));
  $chg = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM main WHERE id='1'"));
  $ck = $chk['bonus'];  
  $ct = $chk['balance'] + $chg['bonus'];
  $lft = $ck - $tmm;
  $l = number_format($lft/60,0);
  
  if($ck < $tmm){
mysqli_query($db, "UPDATE users SET bonus = '".$tme."' WHERE chat = '".$chatid."'");
mysqli_query($db, "UPDATE users SET balance = '".$ct."' WHERE chat = '".$chatid."'");
$bot->send_message($chatid, "💫 Congratulations\n\nYou Receive ".$chg[bonus]." INR in Daily Bonus", null, null, 'HTML');
  }else{
  $bot->send_message($chatid, "<b>📛 Sorry ,you have received your bonus today.</b>\n\n<code>You can receive your next bonus: \n⏱ $l Minutes.</code>", null, null, 'HTML');
  }