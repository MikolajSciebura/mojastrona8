<div class="product-page-wrapper">
    <div class="container">
        <nav class="premium-breadcrumbs" data-aos="fade-down">
            <a href="<?= SITE_URL ?>">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?= SITE_URL ?>/sklep">Sklep</a>
            <i class="fas fa-chevron-right"></i>
            <span><?= e($product['name']) ?></span>
        </nav>

        <div class="product-main-grid">
            <!-- Left: Gallery -->
            <div class="product-gallery-container" data-aos="fade-right">
                <div class="main-image-box">
                    <img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>" alt="<?= e($product['name']) ?>">
                    <div class="glass-overlay"></div>
                </div>
                <div class="thumbnail-grid">
                    <div class="thumb active"><img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>"></div>
                    <!-- Placeholders for more images -->
                    <div class="thumb"><img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>" style="filter: opacity(0.3)"></div>
                </div>
            </div>

            <!-- Right: Info -->
            <div class="product-info-container" data-aos="fade-left">
                <div class="availability-badge">
                    <span class="pulse"></span>
                    <?= $product['stock'] > 0 ? 'Dostępny w magazynie' : 'Na zamówienie' ?>
                </div>

                <h1 class="product-title"><?= e($product['name']) ?></h1>

                <div class="product-rating">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>(12 opinii klientów)</span>
                </div>

                <div class="product-price-section">
                    <div class="current-price"><?= number_format($product['price'], 2, ',', ' ') ?> <span>zł</span></div>
                    <div class="vat-info">Cena zawiera podatek VAT 23%</div>
                </div>

                <div class="product-short-features">
                    <ul>
                        <li><i class="fas fa-check text-neon"></i> Gwarancja premium 24 miesiące</li>
                        <li><i class="fas fa-check text-neon"></i> Darmowa dostawa kurierem</li>
                        <li><i class="fas fa-check text-neon"></i> Wsparcie techniczne MSTech</li>
                    </ul>
                </div>

                <div class="purchase-controls">
                    <div class="quantity-input">
                        <button class="qty-btn">-</button>
                        <input type="number" value="1" min="1">
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn-neon-action add-to-cart" data-id="<?= $product['id'] ?>">
                        DODAJ DO KOSZYKA
                    </button>
                </div>

                <div class="product-meta">
                    <p><strong>SKU:</strong> MST-<?= str_pad($product['id'], 5, '0', STR_PAD_LEFT) ?></p>
                    <p><strong>Kategoria:</strong> <?= e($product['category_name'] ?? 'Podzespoły') ?></p>
                </div>
            </div>
        </div>

        <!-- Bottom: Tabs/Description -->
        <div class="product-extra-content" data-aos="fade-up">
            <div class="tabs-header">
                <button class="tab-btn active">Opis produktu</button>
                <button class="tab-btn">Specyfikacja techniczna</button>
                <button class="tab-btn">Opinie</button>
            </div>
            <div class="tab-content">
                <div class="description-text">
                    <?= nl2br(e($product['description'] ?? 'Brak szczegółowego opisu dla tego produktu.')) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.product-page-wrapper {
    padding: 120px 0 100px;
    background: radial-gradient(circle at 10% 20%, rgba(0,242,255,0.02) 0%, transparent 50%);
}

.premium-breadcrumbs {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 40px;
}
.premium-breadcrumbs a {
    color: #888;
    text-decoration: none;
    transition: var(--transition);
}
.premium-breadcrumbs a:hover { color: var(--neon-blue); }
.premium-breadcrumbs i { font-size: 0.7rem; }

.product-main-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    margin-bottom: 100px;
}

.main-image-box {
    position: relative;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 30px;
    padding: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.main-image-box img {
    max-width: 100%;
    z-index: 2;
}
.glass-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, transparent 100%);
    pointer-events: none;
}

.thumbnail-grid {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}
.thumb {
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 12px;
    padding: 10px;
    cursor: pointer;
}
.thumb.active { border-color: var(--neon-blue); }

.availability-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(0, 242, 255, 0.1);
    color: var(--neon-blue);
    padding: 8px 15px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 25px;
}
.pulse {
    width: 8px; height: 8px;
    background: var(--neon-blue);
    border-radius: 50%;
    box-shadow: 0 0 10px var(--neon-blue);
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.4; }
    100% { opacity: 1; }
}

.product-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 15px;
    line-height: 1.1;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
}
.stars { color: #f1c40f; }
.product-rating span { color: #555; font-size: 0.9rem; }

.product-price-section {
    margin-bottom: 40px;
}
.current-price {
    font-size: 3rem;
    font-weight: 800;
    font-family: 'Exo 2', sans-serif;
}
.current-price span { font-size: 1.5rem; color: var(--neon-blue); }
.vat-info { color: #555; font-size: 0.85rem; }

.product-short-features {
    margin-bottom: 40px;
}
.product-short-features ul {
    list-style: none;
    padding: 0;
}
.product-short-features li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    color: #aaa;
}

.purchase-controls {
    display: flex;
    gap: 20px;
    margin-bottom: 40px;
}
.quantity-input {
    display: flex;
    align-items: center;
    background: #000;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    overflow: hidden;
}
.qty-btn {
    background: none; border: none; color: white;
    width: 40px; height: 50px; cursor: pointer;
}
.quantity-input input {
    background: none; border: none; color: white;
    width: 50px; text-align: center; font-weight: 700;
}

.product-meta {
    border-top: 1px solid rgba(255,255,255,0.05);
    padding-top: 30px;
    color: #555;
    font-size: 0.9rem;
}
.product-meta p { margin-bottom: 8px; }

.product-extra-content {
    background: rgba(255, 255, 255, 0.01);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 30px;
    padding: 60px;
}
.tabs-header {
    display: flex;
    gap: 40px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    margin-bottom: 40px;
}
.tab-btn {
    background: none; border: none; color: #555;
    padding-bottom: 20px; font-weight: 700;
    cursor: pointer; position: relative;
}
.tab-btn.active { color: white; }
.tab-btn.active::after {
    content: ''; position: absolute; bottom: -1px; left: 0;
    width: 100%; height: 2px; background: var(--neon-blue);
}

.description-text {
    line-height: 1.8;
    color: #aaa;
    font-size: 1.1rem;
}

@media (max-width: 992px) {
    .product-main-grid { grid-template-columns: 1fr; gap: 40px; }
    .product-title { font-size: 2.5rem; }
}
</style>
