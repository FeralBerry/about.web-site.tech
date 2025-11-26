<?php

namespace App\Http\Controllers\Front\API;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NotificationChannels\Telegram\Exceptions\CouldNotSendNotification;
use TelegramBot\Api\Exception;

class Contact
{
    protected TelegramBot $telegram;
    public function __construct()
    {
        $this->telegram = new TelegramBot();
    }

    public function sendContact(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $text = "Имя: ".$name."\nКонтакт: ".$email."\nСообщение: ".$message;
        $this->telegram->sendMessage($text,1);
    }

    /**
     * @throws Exception
     * @throws CouldNotSendNotification
     */
    public function sendHire(Request $request){

        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $text = "Имя: ".$name."\nКонтакт: ".$email."\nСообщение: ".$message;
        $this->telegram->sendMessage($text,1);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $f) {
                $path = $f->store('uploads', 'public');
                $this->telegram->sendHire($path,1);
            }
        }
    }
}
