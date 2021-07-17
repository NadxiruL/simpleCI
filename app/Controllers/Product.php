<?php

namespace App\Controllers;

use App\Models\BookModel;

class Product extends BaseController
{
    protected $bookModel;

    public function __construct()

    {

        $this->bookModel = new bookModel();

        
    }
	public function index()
	{

        //$book = $this->bookModel->findAll();
        $data = [

            'title' => 'Home',
            'book' => $this->bookModel->getProduct()
        ];

    //   Manual get data from db..
    //     $db = \Config\Database::connect();
    //     $book = $db->query("SELECT * FROM book");
    //     dd($book);

    //     foreach($book->getResultArray() as $row ){

    //         ($row);
    //     }

        //$bookModel = new bookModel ();
        


               //code igniter akan mencari file home.php dalam folder views..
        return view('product/index', $data);

   

	}


    public function detail($book_id){

      

        $data = [

            'title' => 'Book Details',
            'book' => $this->bookModel->getProduct($book_id)

        ];

        return view ('product/detail' , $data);
       
    }

}

?>