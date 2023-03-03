<?php

$ch = mysqli_query($db, "SELECT * FROM admins ORDER BY id");
        if(mysqli_num_rows($ch) > 0){
            
            $totch = mysqli_query($db, 'SELECT COUNT(1) FROM admins');
            $countch = mysqli_fetch_array($totch); // total channels
            foreach ($ch as $channel) {
                $item .= $channel['id']." ".$channel['u_name']." -".$channel['owner']."\n🆔<code>".$channel['u_id']."</code>\n\n";
            }
            $bot->send_message($chatid, "<b>Admins list</b>\n".$item."\n<b>👥 Total admins: ".$countch[0]."\n</b>", null, null, 'HTML');
        }else{
            $bot->send_message($chatid, "❌ failed.", null, null, 'HTML');
        }
        