<?php

namespace App\Models;
use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'id_room';
    protected $allowedFields = ['type_room', 'price'];
}
