<?php

$result = $bot->getChat($ex[1]);
print_r($result);
$uname = $result->result->username;  

$result1 = $bot->getAdmin($ex[1], BOT_ID);
$vrfy = $result1->result->status;
$vrey = $result1->ok;

if($vrfy != left && $vrey == 'true' ){

$subscriber = $bot->get_chat_member_count($ex[1]);
$subs_count = $subscriber->result;
$totmem = $subs_count + $ex[2];

$sql_insert = "INSERT INTO channel (user, username, cid, member) VALUES ('".$ex[0]."', '@".$uname."', '".$ex[1]."', '".$totmem."')";
$insert = mysqli_query($db, $sql_insert);

if($insert){
$bot->send_message($chatid, "<b>channel registered successfully.</b>\n @".$uname."\n", null, null, 'HTML'); 
}else{
$bot->send_message($chatid, "*⚠️ error while inserting into database. Make sure you not entered any alphabets.*", null, null, 'Markdown'); 
}
mysqli_query($db, "ALTER TABLE channel DROP id");
mysqli_query($db, "ALTER TABLE channel AUTO_INCREMENT = 1");
mysqli_query($db, "ALTER TABLE channel ADD id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
}else{
$bot->send_message($chatid, "*⚠️bot is not a admin of the channel or you entered a wrong channel id.*", null, null, 'Markdown'); 
}
