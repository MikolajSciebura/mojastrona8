<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MSTechPC - Premium Computer Store' ?></title>
    <meta name="description" content="<?= $meta_description ?? 'Najlepsze komputery gamingowe i serwis w Częstochowie.' ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/main.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Library for animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        const SITE_URL = '<?= SITE_URL ?>';
    </script>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="<?= SITE_URL ?>/" class="logo">
                <div class="logo-icon"><i class="fas fa-microchip"></i></div>
                <div class="logo-text">MSTech<span class="text-neon">PC</span></div>
            </a>
            <nav class="nav-links">
                <a href="<?= SITE_URL ?>/">Start</a>
                <a href="<?= SITE_URL ?>/sklep">Sklep</a>
                <a href="<?= SITE_URL ?>/konfigurator" class="text-neon"><i class="fas fa-magic"></i> Konfigurator PC</a>
                <a href="<?= SITE_URL ?>/serwis">Serwis</a>
                <a href="<?= SITE_URL ?>/blog">Blog</a>
                <a href="<?= SITE_URL ?>/kontakt">Kontakt</a>
            </nav>
            <div class="nav-actions">
                <a href="<?= SITE_URL ?>/logowanie" title="Konto"><i class="far fa-user"></i></a>
                <a href="<?= SITE_URL ?>/koszyk" class="cart-icon" title="Koszyk">
                    <i class="fas fa-shopping-basket"></i>
                    <span class="cart-count">0</span>
                </a>
                <a href="<?= SITE_URL ?>/konfigurator" class="btn btn-primary btn-small">Skonfiguruj PC</a>
            </div>
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    <main>
