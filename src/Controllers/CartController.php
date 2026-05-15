<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class CartController extends Controller {
    public function index() {
        $cart = $_SESSION['cart'] ?? [];
        $this->view('shop/cart', [
            'title' => 'Twój Koszyk - MSTechPC',
            'cart' => $cart
        ]);
    }

    public function add() {
        $productId = $_POST['product_id'] ?? null;
        if (!$productId) $this->json(['success' => false]);

        $productModel = new Product();
        $product = $productModel->find($productId);

        if ($product) {
            if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

            if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId]['quantity']++;
            } else {
                $_SESSION['cart'][$productId] = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'quantity' => 1
                ];
            }
            $this->json(['success' => true, 'cart_count' => count($_SESSION['cart'])]);
        }
        $this->json(['success' => false]);
    }
}
