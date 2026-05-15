<?php

namespace App\Controllers;

use App\Core\Controller;

class CheckoutController extends Controller {
    public function index() {
        if (empty($_SESSION['cart'])) {
            $this->redirect('/sklep');
        }
        $this->view('shop/checkout', [
            'title' => 'Zamówienie - MSTechPC',
            'cart' => $_SESSION['cart']
        ]);
    }

    public function process() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) {
            die("CSRF Error");
        }

        $orderModel = new \App\Models\Order();
        $total = array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $_SESSION['cart']));

        $orderId = $orderModel->createOrder(
            $_SESSION['user_id'] ?? null,
            $_SESSION['cart'],
            $total,
            $_POST
        );

        $_SESSION['last_order_id'] = $orderId;
        $_SESSION['cart'] = [];

        $this->view('shop/success', [
            'title' => 'Dziękujemy za zamówienie!',
            'order_id' => $orderId
        ]);
    }

    public function invoice() {
        $this->view('shop/invoice', ['title' => 'Faktura - MSTechPC']);
    }
}
