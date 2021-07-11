<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{

        $data = [

            'title' => 'Home'
        ];

        echo view('layout/header' , $data);
               //code igniter akan mencari file home.php dalam folder views..
        return view('pages/home');

        echo view('layout/footer');

	}

    public function about()
	{

        $data = [

            'title' => 'About'
        ];
        echo view('layout/header', $data);
               //code igniter akan mencari file about.php dalam folder views..
        echo view('pages/about');

        echo view('layout/footer');

	}

}

