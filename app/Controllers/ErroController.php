<?php 

namespace DonaMaria\Controllers;

require_once __DIR__ . '/../Core/Controller.php';

use DonaMaria\Core\Controller;

class ErroController extends Controller{

    public function erro404()
    {
        $this->view('404'); 
    }

    public function gato(){
        $this->view('gato');
    }
}