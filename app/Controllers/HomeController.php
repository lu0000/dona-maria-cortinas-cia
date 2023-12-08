<?php 

namespace DonaMaria\Controllers;

require_once __DIR__ . '/../Core/Controller.php';

use DonaMaria\Core\Controller;

class HomeController extends Controller{

    public function index()
    {
        $this->view('inicial', ['titulo' => 'Dona Maria']);
    }
}