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

        //jika product tiada dalam table

       /*  if (empty($data['product'])) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException('Book ' . $book_id . ' not found');
        } */

        return view ('product/detail' , $data); 
       
    }


    public function insert() {

     

        $data = [

            'title' => 'Insert Product',
            'validation' => \config\Services::validation()

        ];

            return view('product/insert', $data);

    }

    public function save(){

        if(!$this->validate([

            'name' => [
                
                'rules' => 'required|is_unique[book.name]',
                'errors' => [

                    'required' => '{field} must be filled',
                    'is_unique' => '{field} is already taken'
                ]

            ]

        ])) {

            $validation = \Config\Services::validation();
       
            return redirect()->to('/product/insert')->withInput()->with('validation', $validation);

        }



        $this->bookModel->save([

            'name' => $this->request->getVar('name'),
            'writer' => $this->request->getVar('writer'),
            'publisher' => $this->request->getVar('publisher'),
            'photo' => $this->request->getVar('photo')


        ]);

        session()->setFlashdata('notifications', 'data successfully inserted!');

        return redirect()->to('/product');

    }

}

?>