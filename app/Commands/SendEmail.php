<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use Request;
use Mail;

class SendEmail implements SelfHandling
{

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
		$data = [
			'title' => Request::input('title'),	
			'detail' => Request::input('detail'),	
		];
		Mail::send(['html' => 'email'],$data, function($message)
		{
			$message->from('532838908@qq.com', 'simpleCms的网站留言')->to('shsrain@163.com')->subject(Request::input('title'));
		});        
    }
}
