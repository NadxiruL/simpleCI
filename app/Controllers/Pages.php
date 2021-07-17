<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{

        $data = [

            'title' => 'Home'
        ];

      
               //code igniter akan mencari file home.php dalam folder views..
        return view('pages/home', $data);

   

	}

    public function about()
	{

        $data = [

            'title' => 'About'
        ];
     
               //code igniter akan mencari file about.php dalam folder views..
        return view('pages/about', $data);

       

	}


    public function contact() {

        $data = [

          'title' => 'Contact Us'  
        ];

        return view('pages/contact', $data);

    }

}

