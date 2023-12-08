<?php 

namespace DonaMaria\Controllers;

require_once __DIR__ . '/../Core/Controller.php';

use DonaMaria\Core\Controller;

class LoginController extends Controller{

    public function login()
    {
        $this->view('login', ['pagina' => 'Página de Login']); 
    }

    public function criarconta()
    {
        $this->view('conta');
    }
}