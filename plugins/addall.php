<?php
     if (in_array($userID, $admins)){
 if(preg_match("/^[#\!\/](addall) (.*)$/", $msg)){
			preg_match("/^[#\!\/](addall) (.*)$/", $msg, $text1);
				$user = $text1[2];
				$dialogs = $MadelineProto->get_dialogs();
							foreach ($dialogs as $peer) {
							   	$type = $MadelineProto->get_info($peer);
									$type3 = $type['type'];
									if($type3 == "supergroup"){
										$MadelineProto->channels->inviteToChannel(['channel' => $peer, 'users' => [$user] ]);
									}
								}
							          $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Adding User To AllGroup...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'<b>Added✅</b>', 'parse_mode' => 'html' ]);
							}
     }