<?php namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = 'banner_table';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Name',
        'Description',
        'image',
        'Status',
        'created_at'
        
    ];
}

?>