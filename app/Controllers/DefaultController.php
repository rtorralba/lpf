<?php

namespace App\Controllers;

use App\Models\Characters;
use Core\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        echo 'SPF works!';
    }

    public function wopr($name = 'FALKEN')
    {
        $charactersModel = new Characters();
        $characters = $charactersModel->getAll();
        $this->render('wopr', [
            'name' => $name,
            'characters' => $characters
        ]);
    }
}
