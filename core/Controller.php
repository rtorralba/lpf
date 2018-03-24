<?php

namespace Core;

use League\Plates\Engine;

class Controller
{
    /** @var Engine */
    protected $view;
    /** @var array */
    protected $sharedData = [];

    public function __construct()
    {
        $this->view = new Engine('../app/Views');
    }

    public function render(string $view, array $data)
    {
        $mergedData = array_merge($this->sharedData, $data);
        echo $this->view->render($view, $mergedData);
    }
}