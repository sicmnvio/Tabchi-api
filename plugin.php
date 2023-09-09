<?php
                 $admins = [
  8888, //ایدی عددی
];
$listplugins = [
  "ping",
  "help",
  "option",
  "sendads",
  "countchats",
  "addall",
  "link",
]; //========================
$cplug = count($listplugins) - 1;
for($n=0; $n<=$cplug; $n++) {
  $pluginlist = "plugins/".$listplugins[$n].".php";
  include($pluginlist);
}
$data = json_decode(file_get_contents("data.json"),true);
$markread = $data["data"]["markread"];
$typing = $data["data"]["typing"];
$contacts = $data["data"]["contacts"];
$link = $data["data"]["link"];
unlink("MadelineProto.log");



