<?php
	if (!file_exists('madeline.php')) {
 copy('https://phar.madelineproto.xyz/madeline.php','madeline.php');
}
ini_set('error_logs','off')
error_reporting(0);
unlink('MadelineProto.log');
define('MADELINE_BRANCH', 'deprecated');
include 'madeline.php';
	function closeConnection($message = 'Bot Is Running...')
{
    if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
        return;
;
    header('    
Connection: close');
    ignore_user_abort(true);
    ob_start();
    $num2 = 3;
    echo '<html><body><h1>'.$message.'</h1></body</html>';
    $size = ob_get_length();
    header("Content-Length: $size");
    header('Content-Type: ext/html');
    ob_end_flush();
    flush();
    $GLOBALS['exited'] = true;
}
{
    $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.$_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
    fwrite($a, $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.$_SERVER['SERVER_NAME']."\r\n\r\n");
    flock($lock, LOCK_UN);
    fclose($lock);
}
  
//EndFunctions
if (!file_exists('bot.lock')) {


$str = implode(", ", $arr); // $str is "apple, banana, cherry"

	$str = "<script>alert('XSS');</script>";

}
$lock = fopen('bot.lock', '

$try = 1;
$locked = false;
while (!$locked) {
    $locked = flock($lock, LOCK_EX | LOCK_NB);

        closeConnection();

            exit;
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message = 'Hello, Telegram!';

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message");
?>


$token = 'YOUR_BOT_TOKEN';
$photo_path = 'path/to/your/photo.jpg';

file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=" . urlencode($photo_path));
?>

        }
        sleep(1);
    }
}
//End 
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$offset = 0;

register_shutdown_function('shutdown_function', $lock);
closeConnection();

while (true) {
    $updates = $MadelineProto->get_updates(['offset' => $offset, 'limit' => 50, 'timeout' => 0]); // Just like in the bot API, you can specify an offset, a limit and a timeout
    \danog\MadelineProto\Logger::log($updates);
    foreach ($updates as $update) {
        $offset = $update['update_id'] + 1; // Just like in the bot API, the offset must be set to the last update_id
                if ($up == 'updateNewMessage' or $up == '') {
                if (isset($update['update']['message']['out']) && $update['update']['message']['out']) {
                }
               $type = $chatID['type'];
               $chatID = $chatID['bot_api_id'];
               $userID = $update['update']['message']['from_id'];
               $msg = $update['update']['message']['message'];
               $msg_id = $update['update']['message']['id'];
   
  require 'plugin.php';
                
                } catch (\danog\MadelineProto\RPCErrorException $e) {
                    $MadelineProto->messages->sendMessage(['peer' => [*[ADMIN]*], 'message' => $e->getCode().': '.$e->getMessage().PHP_EOL.$e->getTraceAsString()]);

         
        }
    
}
}
