<?php

namespace App\Controllers;

use App\Core\Controller;

class BlogController extends Controller {
    public function index() {
        $this->view('blog/index', [
            'title' => 'Blog Technologiczny - MSTechPC',
            'meta_description' => 'Bądź na bieżąco z nowościami ze świata IT. Recenzje, poradniki i testy sprzętu.'
        ]);
    }
}
