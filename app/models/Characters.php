<?php

namespace App\models;

use Core\Model;

class Characters extends Model
{
    public function getAll()
    {
        return $this->database->select('cast','name');
    }
}