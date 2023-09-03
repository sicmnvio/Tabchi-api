<?php

      if (in_array($userID, $admins)){

	if($msg == 'انلاین' ||$msg=="!ping" ||$msg=="#ping"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**ربات شما انلاین و اماده پاسخگویی است
🔥با ارسال کلمه راهنما می توانید لیست راهنمای ربات را ببینید**','parse_mode' => 'MarkDown']);
            }
      }
            if (in_array($userID, $admins)){

	if($msg == 'پشتیبان' ||$msg=="ساپورت" ||$msg=="support"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**☄️برای خرید ربات ضداسپم و سفارش انواع سورس به ایدی @S_A_F_T پیام بدهید**','parse_mode' => 'MarkDown']);
            }
      }
            if (in_array($userID, $admins)){

	if($msg == 'بروزرسانی ربات' ||$msg=="بروز" ||$msg=="ب سانی"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**💥ربات شما با موفقیت بروزرسانی شد نسخه جدید =>  2.0.1**','parse_mode' => 'MarkDown']);
            }
      }
            if (in_array($userID, $admins)){

	if($msg == 'کانال ما' ||$msg=="چنل ما" ||$msg=="ک ما"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**دلت میخواد یک ربات واسه خودت داشته باشی☺️
بیا تو این چنل یک ربات تبچی بدون سرور تو هاست رایگان بساز 😍

همه پست هاش تک چینه 😘

بیا امتحان کن نبود لفت بده
','parse_mode' => 'MarkDown']);
            }
      }
                  if (in_array($userID, $admins)){

	if($msg == 'تازه سازی' ||$msg=="تازه س" ||$msg=="ت سازی"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**تازه سازی تبلیغگر شما با موفقیت انجام شد🌟️**','parse_mode' => 'MarkDown']);
    	}
                  }
                                    if (in_array($userID, $admins)){

	if($msg == 'شناسه' ||$msg=="شن اسه" ||$msg=="ش اسه"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => '**شناسه من : 56809141🌟️**','parse_mode' => 'MarkDown']);
    	}
                  }
