<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'hgvalguna_myguests';

    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];

	
    public function getGuest($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}