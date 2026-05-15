<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ShopController extends Controller {
    public function index() {
        $productModel = new Product();
        $products = $productModel->all();

        $this->view('shop/index', [
            'title' => 'Sklep - MSTechPC',
            'products' => $products
        ]);
    }

    public function show($slug) {
        $productModel = new Product();
        $product = $productModel->findBySlug($slug);

        if (!$product) {
            $this->redirect('/sklep');
        }

        $this->view('shop/product', [
            'title' => $product['name'] . ' - MSTechPC',
            'product' => $product
        ]);
    }

    public function service() {
        $this->view('shop/service', [
            'title' => 'Serwis Komputerowy Częstochowa - Naprawa Laptopów i PC',
            'meta_description' => 'Profesjonalny serwis komputerowy w Częstochowie. Naprawiamy laptopy, składamy komputery, usuwamy wirusy. Sprawdź status naprawy online.'
        ]);
    }
}
