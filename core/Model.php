<?php

namespace Core;

use Medoo\Medoo;

class Model
{
    /** @var Medoo */
    protected $database;

    public function __construct()
    {
        if (getenv('DB_TYPE')) {
            $this->database = new Medoo([
                'database_type' => getenv('DB_TYPE'),
                'database_name' => getenv('DB_NAME'),
                'server' => getenv('DB_SERVER'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD')
            ]);
        }
    }
}