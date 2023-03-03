<?php

$item = "Here the list of extra Command(s) and Setting(s) 📟\n[Stats and Info(s)] 📊\n\nChange minimum payout amount limit\n/minipay [amount]\n\nChange minimum referal bonus\n/refer [amt]\n\nChange bonus limit\n/bonus [amt]\n\nRemove !admin\n/removeadmin [id] \n\nAdd ! admin\n/addadmin [id] [@username]\n\nchange payout 'open' or 'close'\n/payout [keyword]\n";
        $bot->send_message($chatid, $item, null, null, 'HTML');