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
  
  $bot->send_message($chatid, "<b>๐ฆUser details!\n\n</b>๐ User ID : <code>".$id."</code>\n๐จโ๐ฆฑ Username : ".$disp[username]."\n๐โโ๏ธ refered by : ".$id2."\n๐ฅ Referred : ".$disp[refer]."mems\n๐ฎ joined on : ".$disp[joinon]."\n๐ต withdrawn : ".$disp[withdraw]."โน\n๐ฐ Balance : ".$disp[balance]."โน\n๐ซ Paytm num : ".$disp[number]."\n๐๏ธโ๐จ๏ธ Status : ".$disp[status]."\n", null, null, 'HTML'); 
  }else{
  $bot->send_message($chatid, "<b>๐ฆUser details!\n\n</b>๐ User ID : <code>".$scr."</code>\n\nUser not found in our database.", null, null, 'HTML'); 
  }