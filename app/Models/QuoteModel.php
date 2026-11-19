<?php namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{
    protected $table = 'quote_table';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Quote'
    ];
}

?>