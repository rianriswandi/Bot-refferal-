<?php

$sum = mysqli_query($db, 'SELECT SUM(withdraw) AS value_sum FROM users');
        $row = mysqli_fetch_assoc($sum);
        $totsubs = $row['value_sum'];
$sum2 = mysqli_query($db, 'SELECT SUM(balance) AS value_sum FROM users');
        $row2 = mysqli_fetch_assoc($sum2);
        $c = $row2['value_sum'];
        $totsubs2 = number_format($c, 2);
$totch1 = mysqli_query($db, 'SELECT COUNT(1) FROM users');
        $countch1 = mysqli_fetch_array($totch1);
        $atv = mysqli_query($db, "SELECT * FROM users WHERE status = 'active' ");
        $atv1 = mysqli_num_rows($atv);
        $inav = mysqli_query($db, "SELECT * FROM users WHERE status = 'not active' ");
        $inav1 = mysqli_num_rows($inav);
        if($there_admin == 1){
        $bot->send_message($chatid, "⏳ Total Users<b> $countch1[0].</b>\nactive: $atv1. \ninactive: $inav1.\n\n💳 Total Withdrawed:<b> $totsubs INR.</b>\n💰 Total balance:<b> $totsubs2 INR.</b>", null, null, 'HTML');
        }else{
        $bot->send_message($chatid, "⏳ Total Users<b> $countch1[0].</b>\n💳 Total Withdrawed:<b> $totsubs INR.</b>", null, null, 'HTML');
        }
  