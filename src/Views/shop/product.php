<section class="product-details">
    <div class="container">
        <div class="product-header">
            <div class="product-gallery" data-aos="fade-right">
                <img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>" alt="<?= e($product['name']) ?>">
            </div>
            <div class="product-main-info" data-aos="fade-left">
                <nav class="breadcrumbs">
                    <a href="<?= SITE_URL ?>/sklep">Sklep</a> / <span><?= e($product['name']) ?></span>
                </nav>
                <h1><?= e($product['name']) ?></h1>
                <div class="price-tag"><?= number_format($product['price'], 2, ',', ' ') ?> zł</div>
                <p class="stock-status">Dostępność: <span class="text-neon"><?= $product['stock'] > 0 ? 'W magazynie' : 'Na zamówienie' ?></span></p>
                <div class="product-actions">
                    <button class="btn btn-primary btn-lg add-to-cart" data-id="<?= $product['id'] ?>">Dodaj do koszyka</button>
                    <button class="btn btn-outline btn-lg"><i class="far fa-heart"></i></button>
                </div>
            </div>
        </div>
        <div class="product-description" data-aos="fade-up">
            <h2>Opis produktu</h2>
            <div class="content">
                <?= nl2br(e($product['description'] ?? 'Brak opisu.')) ?>
            </div>
        </div>
    </div>
</section>

<style>
.product-details { padding: 60px 0; }
.product-header { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px; }
.product-gallery { background: var(--bg-card); border-radius: 20px; padding: 40px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.05); }
.breadcrumbs { margin-bottom: 20px; font-size: 0.9rem; color: var(--text-muted); }
.price-tag { font-size: 2.5rem; font-weight: 800; color: var(--neon-blue); margin: 20px 0; }
.product-actions { display: flex; gap: 20px; margin-top: 40px; }
.btn-lg { padding: 15px 40px; font-size: 1.1rem; }
.product-description { background: var(--bg-card); padding: 40px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.05); }
.product-description h2 { margin-bottom: 30px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 15px; }
</style>
