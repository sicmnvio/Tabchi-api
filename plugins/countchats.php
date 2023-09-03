<?php

      if (in_array($userID, $admins)){
          
if ($msg == 'امار'||$msg=="!info" ||$msg=="#info") {
$msg_id = $update['update']['message']['id'];
$dialogs1 = json_encode($MadelineProto->get_dialogs());
$dialogs = count($MadelineProto->get_dialogs());
$s = file_put_contents("chats.txt","$dialogs1");

								$Updates = $MadelineProto->messages->sendMedia([ 'peer' => $chatID,'reply_to_msg_id' => $msg_id , 'media' =>  ['_' => 'inputMediaUploadedDocument', 'file' => 'chats.txt', 'attributes' => [['_' => 'documentAttributeFilename', 'file_name' => 'TabchiChats']]], 'message' => '📌 ChatCount : '.$dialogs.'☄️chanell=> 
🔥powered=> ',  'parse_mode' => 'html', ]);
								unlink("chats.txt");
								
    }
      }
