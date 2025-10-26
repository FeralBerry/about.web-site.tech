<?php

namespace App\Http\Controllers\Front\API;


use Illuminate\Http\Request;
use App\Models\Contact as C;

class Contact
{
    public function send(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $mess = $request['mess'];
        $data = [
            'error' => null,
            'success' => 'The message was sent successfully'
        ];

        if(strlen($name) < 3){
            $data = [
                'error' => 'The name must be at least 3 characters long'
            ];
            return $data;
        }
        if(empty($email)){
            $data = [
                'error' => 'Email required'
            ];
            return $data;
        }
        if(strlen($mess) < 9){
            $data = [
                'error' => 'The message must be at least 10 characters long.'
            ];
            return $data;
        }
        C::create([
            'name' => $name,
            'email' => $email,
            'message' => $mess
        ]);
        return $data;
    }
}
