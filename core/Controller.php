<?php


namespace Core;

use League\Plates\Engine;
use Medoo\Medoo;

class Controller
{
    /** @var Engine */
    protected $view;

    public function __construct()
    {
        $this->view = new Engine('../app/views');
    }
}