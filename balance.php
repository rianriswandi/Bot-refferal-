<?php



$dip = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE chat='$chatid'"));
$bal = number_format($dip['balance'],2);

$bot->send_message($chatid, "💰 Your Account Balance:\n\n$bal INR.", null, null, 'HTML');