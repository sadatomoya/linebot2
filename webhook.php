<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = '6eTZVQJKKlU+rWH/HALGZX4I/3S6AXjt6RweR7wn7f4/WsnKNgCuh0EV/ymbLgJlZh9xMuhfd2TdK9+gsw79uwRXzQzA3cUAt1fH5c6IhjAyfFBmcuFEh/UJ/FyEE8x6cpiYZ+yinMlZRFEAWvha2QdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'b367193c20bd18c41451463749542ee6';
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
					if(strpos($message['text'],'天気') !== false){
						$rep = "晴れるといいね〜" . "http://weather.yahoo.co.jp/weather/";
					} else if (strpos($message['text'],'疲れた') !== false){
						$rep = "お疲れさまでした！！！";
					} else if (strpos($message['text'],'おっら') !== false){
						$rep = "なんやこら";
					} else if (strpos($message['text'],'ムーミン') !== false){
						$rep = "ど〜ぞ〜" .  "https://www.peikko-moomin.jp/";
					} elseif (strpos($message['text']) !== false){
						$rep = $message['text'];
					}
                    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $rep
							)
						)
					));
                    break;
                default:
                    error_log('Unsupported message type: ' . $message['type']);
                    break;
            }
            break;
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};
