<?php

namespace App\Core;

abstract class Controller {
    protected function view($name, $data = []) {
        extract($data);
        $viewFile = __DIR__ . "/../Views/" . str_replace('.', '/', $name) . ".php";

        if (file_exists($viewFile)) {
            // Skip layout for admin views if they are meant to be standalone or have their own layout
            if (strpos($name, 'admin/') === 0) {
                echo '<!DOCTYPE html><html lang="pl"><head><meta charset="UTF-8"><link rel="stylesheet" href="/assets/css/main.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></head><body>';
                include $viewFile;
                echo '</body></html>';
            } else {
                // Header
                include __DIR__ . "/../Views/layout/header.php";
                include $viewFile;
                // Footer
                include __DIR__ . "/../Views/layout/footer.php";
            }
        } else {
            die("View $name not found.");
        }
    }

    protected function json($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    protected function redirect($url) {
        header("Location: $url");
        exit;
    }
}
