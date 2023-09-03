<?php
if (in_array($userID, $admins)){
if ($msg == 'F2all' or $msg == 'f2all') {
$rid =  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup" || $type3 == "user" || $type3 == "chat"){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$rid], ]); 
}  
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'فروارد همگانی با موفقیت به همه ارسال شد👌🏻','parse_mode' => "markdown"]);
}
if ($msg == 'F2pv' or $msg == 'f2pv') {
$rid =  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "user" ){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$rid], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'فروارد همگانی با موفقیت به پیوی ها ارسال شد👌🏻','parse_mode' => "markdown"]);
}
if ($msg == 'F2gps' or $msg == 'f2gps') {
$rid =  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "chat" ){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$rid], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'فروارد همگانی با موفقیت به گروه ها ارسال شد👌🏻','parse_mode' => "markdown"]);
}
if ($msg == 'F2sgps' or $msg == 'f2sgps') {
$rid =  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup" ){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$rid], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'فروارد همگانی با موفقیت به سوپرگروه ها ارسال شد👌🏻','parse_mode' => "markdown"]);
}
//---
 if(preg_match("/^(s2all) (.*)$/", $msg)){
preg_match("/^(s2all) (.*)$/", $msg, $text1);
$text = $text1[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup" ||$type3 == "user"||$type3 == "chat"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'ارسال همگانی با موفقیت به همه ارسال شد👌🏻','parse_mode' => "markdown"]);		
}

if(preg_match("/^(s2pv) (.*)$/", $msg)){
preg_match("/^(s2pv) (.*)$/", $msg, $text1);
$text = $text1[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "user"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'ارسال همگانی با موفقیت به پیوی ها ارسال شد👌🏻','parse_mode' => "markdown"]);			
}
//
if(preg_match("/^(s2sgps) (.*)$/", $msg)){
preg_match("/^(s2sgps) (.*)$/", $msg, $text1);
$text = $text1[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'ارسال همگانی با موفقیت به سوپرگروه ها ارسال شد👌🏻','parse_mode' => "markdown"]);		
}
if(preg_match("/^(s2gps) (.*)$/", $msg)){
preg_match("/^(s2gps) (.*)$/", $msg, $text1);
$text = $text1[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "chat"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'ارسال همگانی با موفقیت به گروه ها ارسال شد👌🏻','parse_mode' => "markdown"]);		
}
}
