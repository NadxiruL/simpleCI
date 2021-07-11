<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		// ketika method ini dipanggil , method ini akan memanggil welcome_massage.php di dalam folder views.
		//      Views/welcome_message.php
		 return view('welcome_message');
	}
}
