<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
            $this->redirect('/logowanie');
        }
    }

    public function dashboard() {
        $this->view('admin/dashboard', [
            'title' => 'Panel Administratora - MSTechPC'
        ]);
    }

    public function products() {
        $productModel = new Product();
        $products = $productModel->all();
        $this->view('admin/products', [
            'products' => $products
        ]);
    }

    public function productsCreate() {
        $this->view('admin/products_create', ['title' => 'Dodaj Produkt']);
    }

    public function productsStore() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) die("CSRF Error");

        $productModel = new Product();
        $productModel->create([
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'category_id' => $_POST['category_id'],
            'stock' => $_POST['stock'],
            'description' => $_POST['description'],
            'is_pc' => (isset($_POST['is_pc']) || strpos(strtolower($_POST['name']), 'pc') !== false) ? 1 : 0
        ]);

        $this->redirect('/admin/produkty');
    }

    public function productsEdit($id) {
        $productModel = new Product();
        $product = $productModel->find($id);
        if (!$product) $this->redirect('/admin/produkty');

        $this->view('admin/products_edit', [
            'title' => 'Edytuj Produkt',
            'product' => $product
        ]);
    }

    public function productsUpdate($id) {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) die("CSRF Error");

        $productModel = new Product();
        $productModel->update($id, [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'category_id' => $_POST['category_id'],
            'stock' => $_POST['stock'],
            'description' => $_POST['description'],
            'is_pc' => isset($_POST['is_pc']) ? 1 : 0
        ]);

        $this->redirect('/admin/produkty');
    }

    public function productsDelete($id) {
        // In a real app, this should be a POST request for safety
        $productModel = new Product();
        $productModel->delete($id);
        $this->redirect('/admin/produkty');
    }

    public function blog() {
        $this->view('admin/blog_index', [
            'title' => 'Zarządzanie Blogiem',
            'posts' => [
                ['id' => 1, 'title' => 'Nadchodzi RTX 5090', 'date' => '2024-05-12', 'author' => 'Admin'],
                ['id' => 2, 'title' => 'Jak dbać o chłodzenie?', 'date' => '2024-05-10', 'author' => 'Admin']
            ]
        ]);
    }

    public function blogCreate() {
        $this->view('admin/blog_create', ['title' => 'Dodaj Post']);
    }

    public function blogStore() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) die("CSRF Error");
        // Logic to save post to DB
        $this->redirect('/admin/blog');
    }

    public function technician() {
        $serviceModel = new \App\Models\Service();
        $repairs = $serviceModel->all(); // Assuming all() exists or mock it

        $this->view('admin/technician', [
            'title' => 'Panel Serwisanta',
            'repairs' => $repairs ?: [
                ['id' => 1, 'repair_id' => 'RE7782', 'customer_name' => 'Jan Kowalski', 'device' => 'Laptop MSI', 'status' => 'W trakcie naprawy']
            ]
        ]);
    }

    public function updateRepairStatus() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) die("CSRF Error");
        $id = $_POST['id'];
        $status = $_POST['status'];

        $db = \App\Core\Database::getInstance();
        if ($db) {
            $stmt = $db->prepare("UPDATE repairs SET status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
        }

        $this->redirect('/admin/serwis');
    }
}
