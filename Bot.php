<?php
require 'vendor/autoload.php'; // تحميل مكتبة Telegram Bot API

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exception;

// ضع هنا التوكن الخاص بالبوت
$token = "7515818676:AAHIo0sxuUMXllmZFF7fueuml13Q9XfZ10k";

try {
    $bot = new BotApi($token);

        // استلام التحديثات
            $updates = $bot->getUpdates();

                foreach ($updates as $update) {
                        $message = $update->getMessage();
                                $chatId = $message->getChat()->getId();
                                        $text = $message->getText();

                                                // الرد بكلمة "هلا" على أي رسالة
                                                        $bot->sendMessage($chatId, "هلا");
                                                            }
                                                            } catch (Exception $e) {
                                                                echo "Error: " . $e->getMessage();
                                                                }