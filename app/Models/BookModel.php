<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'book_id';
    protected $useTimestamps = true;

    public function getProduct($book_id = false)
    {

        if ($book_id == false) {

            return $this->findAll();
        }

        return $this->where(['book_id' => $book_id])->first();

    }
}

?>
