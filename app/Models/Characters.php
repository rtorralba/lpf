<?php

namespace App\Models;

use Core\Model;

class Characters extends Model
{
    public function getAll()
    {
        return $this->database->select('cast','name');
    }
}