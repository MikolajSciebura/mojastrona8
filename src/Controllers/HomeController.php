<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('home/index', [
            'title' => 'MSTechPC - Profesjonalne Komputery Gamingowe i Serwis',
            'meta_description' => 'MSTechPC Częstochowa - Składanie komputerów, serwis PC, laptopy. Najlepsza jakość i wydajność.'
        ]);
    }

    public function privacy() {
        $this->view('home/privacy', ['title' => 'Polityka Prywatności - MSTechPC']);
    }

    public function terms() {
        $this->view('home/terms', ['title' => 'Regulamin - MSTechPC']);
    }

    public function rodo() {
        $this->view('home/privacy', ['title' => 'RODO - MSTechPC']);
    }
}
