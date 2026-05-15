<?php

namespace App\Controllers;

use App\Core\Controller;

class UserController extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('/logowanie');
        }
    }

    public function profile() {
        $this->view('auth/profile', [
            'title' => 'Mój Profil - MSTechPC'
        ]);
    }
}
