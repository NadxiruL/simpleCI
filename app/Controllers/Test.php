<?php

namespace App\Controllers;

class Test extends BaseController
{
	public function index()
	{

		echo 'Ini controller cuba method index';
	}


public function hello($nama = '' , $umur = '')
	{

		echo " Ini controller cuba method hello $nama , saya berumur $umur tahun ";
	}
}

