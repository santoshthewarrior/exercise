<?php
namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller{
	public function index(Request $request){
		$user ="Santosh";
		 Mail::send('mailer', ['name' => 'Santosh'], function ($m) use ($user) {
            $m->to('santoshthewarrior@hotmail.com', 'Someguy')->subject('Welcome');
        });
    }
	
}