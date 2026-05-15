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
}
