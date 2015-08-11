<?php
namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller{
	public function index(Request $request){
		 $user = 'Santosh';
		\Config::set('mail.driver', 'smtp');
		\Config::set('mail.host', 'smtp.gmail.com');
		\Config::set('mail.username', 'santoshthewarrior45@gmail.com'); // gmail username
		\Config::set('mail.password', 'schntheo'); // gmail password
		\Config::set('mail.encryption', 'tls');

        //Mail::send('emails.test',['testVar' => 'Just a silly test'],function($message) { 
        	//$message->to('santoshthewarrior@hotmail.com')->subject('A simple test');
        //});
        Mail::send('emails.test', ['user' => $user], function ($message) use ($user) {
            $message->to('santoshthewarrior@hotmail.com', 'Santosh')->subject('Test');
        });
    }
	
}