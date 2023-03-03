<?php

$disp = mysqli_query($db, "SELECT * FROM admins WHERE u_id = '$chatid'");
            $t = mysqli_fetch_assoc($disp);
            $ch = $t['owner'];

if($ch == Admin) {
    $bot->send_message($chatid, "❌ Sorry you are not a onwer only owner remove admin", null, null, null);
}elseif(!empty($ex[1]) and !empty($ex[2])){
    $id = $ex[1];
            $result = $bot->getChat(getId($id));
print_r($result);
            $type = $result->result->type;
            $u_id = $result->result->id; 
           
        $sql_check = "SELECT * FROM admins WHERE u_id = '$u_id'";

                    $check = mysqli_query($db, $sql_check);
                    $there = mysqli_num_rows($check);
                  
      if ($there == 0) {
                        $sql_insert = "INSERT INTO admins (u_id, u_name, owner) VALUES ('".$ex[1]."', '".$ex[2]."','Admin')";

       $insert = mysqli_query($db, $sql_insert);
                        
         if($insert){
         $bot->send_message($chatid,"<b>👤New admin was added.</b>", null, null, 'HTML');
         }else{
          $bot->send_message($chatid,"<b>✖️failed to add admin.</b>", null, null, 'HTML');
         }}else{
             $bot->send_message($chatid, "<b>Admin already in list.</b>", null, null, 'HTML');
                       
        }}else{
            $bot->send_message($chatid,"<b>🙄 use correct format.</b>",null,null,'HTML');

}