<?php

namespace App\controllers;

use App\models\Characters;
use Core\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        echo 'SPF works!';
    }

    public function wopr(string $name = 'FALKEN')
    {
        $charactersModel = new Characters();
        $characters = $charactersModel->getAll();
        echo $this->view->render('wopr', [
            'name' => $name,
            'characters' => $characters
        ]);
    }
}
