<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ConfiguratorController extends Controller {
    public function index() {
        $productModel = new Product();

        $cpus = $productModel->getByCategory('procesory');
        $gpus = $productModel->getByCategory('karty-graficzne');
        $mobos = $productModel->getByCategory('plyty-glowne');
        $rams = $productModel->getByCategory('pamieci-ram');

        $this->view('configurator/index', [
            'title' => 'Konfigurator PC - MSTechPC',
            'cpus' => $cpus,
            'gpus' => $gpus,
            'mobos' => $mobos,
            'rams' => $rams
        ]);
    }

    public function save() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) {
            $this->json(['success' => false, 'message' => 'CSRF Error']);
        }

        $configData = $_POST['config'] ?? null;
        if ($configData) {
            // In a real app, save to pc_configurations table
            // For now, add to cart as a special item
            if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

            $configId = 'custom_pc_' . time();
            $_SESSION['cart'][$configId] = [
                'id' => $configId,
                'name' => 'Custom MSTech Gaming PC',
                'price' => $configData['total'],
                'image' => 'custom-pc.png',
                'quantity' => 1,
                'is_config' => true,
                'details' => $configData['parts']
            ];

            $this->json(['success' => true, 'cart_count' => count($_SESSION['cart'])]);
        }
    }
}
