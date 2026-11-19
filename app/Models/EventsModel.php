<?php namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'events_table';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Name',
        'Description',
        'Type',
        'Link',
        'Date',
        'created_at'
        
    ];
}

?>