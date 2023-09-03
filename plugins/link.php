<?php 

     if (in_array($userID, $admins)){

      
    if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg)) {
    
        try {
            $MadelineProto->messages->importChatInvite([
      'hash' => str_replace('https://t.me/joinchat/', '', $msg),
    ]);
$MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "ربات به یک گروه وارد شد",'parse_mode' => 'MarkDown']);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
$MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "به دلیل محدودیت تلگرام ربات نتوانست وارد لینک شود",'parse_mode' => 'MarkDown']);
    } catch (\danog\MadelineProto\Exception $e2) {
       $MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "به دلیل محدودیت تلگرام ربات نتوانست وارد لینک شود",'parse_mode' => 'MarkDown']);
    }
}
}
if($link == "yes"){
      
    if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg)) {
    
        try {
            $MadelineProto->messages->importChatInvite([
      'hash' => str_replace('https://t.me/joinchat/', '', $msg),
    ]);
$MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "ربات به یک گروه وارد شد",'parse_mode' => 'MarkDown']);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
$MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "به دلیل محدودیت تلگرام ربات نتوانست وارد لینک شود",'parse_mode' => 'MarkDown']);
    } catch (\danog\MadelineProto\Exception $e2) {
       $MadelineProto->messages->sendMessage(['peer' =>[*[ADMIN]*],'message' => "به دلیل محدودیت تلگرام ربات نتوانست وارد لینک شود",'parse_mode' => 'MarkDown']);
    }
}
}
