<?php

namespace App\Models;
use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id_review';
    protected $allowedFields = ['id_room', 'guest_name', 'rating', 'review'];

    // Untuk join dengan tabel room
    public function getReviewWithRoom()
    {
        return $this->select('review.*, room.type_room')
                    ->join('room', 'room.id_room = review.id_room')
                    ->findAll();
    }
}
