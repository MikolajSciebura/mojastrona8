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
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="<?= SITE_URL ?>/" class="logo">
                <span class="text-neon">MS</span>TechPC
            </a>
            <nav class="nav-links">
                <a href="<?= SITE_URL ?>/sklep">Sklep</a>
                <a href="<?= SITE_URL ?>/konfigurator">Konfigurator</a>
                <a href="<?= SITE_URL ?>/serwis">Serwis</a>
                <a href="<?= SITE_URL ?>/blog">Blog</a>
                <a href="<?= SITE_URL ?>/o-nas">O nas</a>
                <a href="<?= SITE_URL ?>/kontakt">Kontakt</a>
            </nav>
            <div class="nav-actions">
                <a href="<?= SITE_URL ?>/koszyk" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="<?= SITE_URL ?>/konto" class="btn btn-outline">Mój Profil</a>
                <?php else: ?>
                    <a href="<?= SITE_URL ?>/logowanie" class="btn btn-outline">Logowanie</a>
                <?php endif; ?>
            </div>
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    <main>
