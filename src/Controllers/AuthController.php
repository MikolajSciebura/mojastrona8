<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller {
    public function showLogin() {
        $this->view('auth/login', ['title' => 'Logowanie - MSTechPC']);
    }

    public function login() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) {
            die("CSRF Token validation failed.");
        }
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            $this->redirect('/konto');
        } else {
            $this->view('auth/login', ['error' => 'Błędny email lub hasło']);
        }
    }

    public function showRegister() {
        $this->view('auth/register', ['title' => 'Rejestracja - MSTechPC']);
    }

    public function register() {
        if (!\App\Core\Security::verify_csrf($_POST['csrf_token'] ?? '')) {
            die("CSRF Token validation failed.");
        }

        $data = [
            'first_name' => $_POST['first_name'] ?? '',
            'last_name' => $_POST['last_name'] ?? '',
            'email' => $_POST['email'] ?? '',
            'password' => password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT),
            'role' => 'user'
        ];

        $userModel = new User();
        if ($userModel->create($data)) {
            $this->redirect('/logowanie');
        } else {
            $this->view('auth/register', ['error' => 'Rejestracja nieudana. Może konto już istnieje?']);
        }
    }

    public function logout() {
        session_destroy();
        $this->redirect('/');
    }
}
