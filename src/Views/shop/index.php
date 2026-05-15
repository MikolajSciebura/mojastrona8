<div class="shop-header-section">
    <div class="container">
        <h1 data-aos="fade-up">E-Commerce <span class="text-neon">Premium</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Wybierz gotową konfigurację lub skompletuj własny zestaw z najlepszych podzespołów na rynku.</p>
    </div>
</div>

<section class="shop-content">
    <div class="container">
        <div class="shop-layout">
            <aside class="filters" data-aos="fade-right">
                <div class="filter-group">
                    <h3>Kategorie</h3>
                    <ul class="category-list">
                        <li><a href="<?= SITE_URL ?>/kategoria/komputery-gamingowe" class="active">Komputery Gamingowe</a></li>
                        <li><a href="<?= SITE_URL ?>/kategoria/stacje-robocze">Stacje Robocze</a></li>
                        <li><a href="<?= SITE_URL ?>/kategoria/procesory">Procesory</a></li>
                        <li><a href="<?= SITE_URL ?>/kategoria/karty-graficzne">Karty Graficzne</a></li>
                        <li><a href="<?= SITE_URL ?>/kategoria/akcesoria">Akcesoria</a></li>
                    </ul>
                </div>

                <div class="filter-group">
                    <h3>Cena</h3>
                    <div class="price-range">
                        <input type="range" min="0" max="20000" step="500" class="range-slider">
                        <div class="range-values">
                            <span>0 zł</span>
                            <span>20 000+ zł</span>
                        </div>
                    </div>
                </div>

                <div class="promo-box">
                    <i class="fas fa-shipping-fast"></i>
                    <h4>Darmowa Dostawa</h4>
                    <p>Dla wszystkich zamówień powyżej 5000 zł.</p>
                </div>
            </aside>

            <div class="product-main">
                <div class="shop-toolbar">
                    <div class="results-count">Pokazano <strong><?= count($products) ?></strong> produktów</div>
                    <div class="sort-options">
                        <span>Sortuj:</span>
                        <select class="sort-select">
                            <option>Najpopularniejsze</option>
                            <option>Cena: rosnąco</option>
                            <option>Cena: malejąco</option>
                            <option>Najnowsze</option>
                        </select>
                    </div>
                </div>

                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <?php if ($product['is_pc']): ?>
                            <!-- Premium PC Card -->
                            <div class="pc-config-card" data-aos="fade-up">
                                <div class="pc-tag"><?= e($product['category'] ?? 'GAMING') ?></div>
                                <h3 class="pc-title"><?= e($product['name']) ?></h3>
                                <div class="pc-specs">
                                    <div class="spec-row">
                                        <span class="spec-label">CPU</span>
                                        <span class="spec-value">Ryzen 5 5600</span>
                                    </div>
                                    <div class="spec-row">
                                        <span class="spec-label">GPU</span>
                                        <span class="spec-value">RTX 4060</span>
                                    </div>
                                    <div class="spec-row">
                                        <span class="spec-label">RAM</span>
                                        <span class="spec-value">16GB DDR4</span>
                                    </div>
                                </div>
                                <div class="pc-footer">
                                    <div class="pc-price"><?= number_format($product['price'], 0, ',', ' ') ?> <span>zł</span></div>
                                    <a href="<?= SITE_URL ?>/produkt/<?= $product['slug'] ?>" class="btn-config-sm">KONFIGURUJ</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Regular Product Card -->
                            <div class="product-card" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>" alt="<?= e($product['name']) ?>">
                                </div>
                                <div class="product-info">
                                    <h3><?= e($product['name']) ?></h3>
                                    <div class="price"><?= number_format($product['price'], 2, ',', ' ') ?> zł</div>
                                    <div class="product-actions">
                                        <a href="<?= SITE_URL ?>/produkt/<?= $product['slug'] ?>" class="btn btn-outline btn-sm">Szczegóły</a>
                                        <button class="btn btn-primary btn-sm add-to-cart" data-id="<?= $product['id'] ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.shop-header-section {
    padding: 100px 0 60px;
    background: linear-gradient(180deg, rgba(0,242,255,0.05) 0%, rgba(5,5,5,0) 100%);
    text-align: center;
}
.shop-header-section h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
}
.shop-header-section p {
    color: #888;
    max-width: 700px;
    margin: 0 auto;
}

.shop-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
    padding: 40px 0 100px;
}

.filter-group {
    margin-bottom: 40px;
}
.filter-group h3 {
    font-size: 1.1rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.category-list {
    list-style: none;
    padding: 0;
}
.category-list li {
    margin-bottom: 12px;
}
.category-list a {
    color: #888;
    text-decoration: none;
    transition: var(--transition);
    display: block;
}
.category-list a:hover, .category-list a.active {
    color: var(--neon-blue);
    padding-left: 5px;
}

.range-slider {
    width: 100%;
    accent-color: var(--neon-blue);
    margin-bottom: 10px;
}
.range-values {
    display: flex;
    justify-content: space-between;
    font-size: 0.85rem;
    color: #666;
}

.promo-box {
    background: rgba(0, 242, 255, 0.05);
    border: 1px solid rgba(0, 242, 255, 0.1);
    padding: 25px;
    border-radius: 15px;
    text-align: center;
}
.promo-box i {
    font-size: 2rem;
    color: var(--neon-blue);
    margin-bottom: 15px;
}
.promo-box h4 {
    margin-bottom: 10px;
}
.promo-box p {
    font-size: 0.85rem;
    color: #888;
}

.shop-toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
}
.sort-select {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    margin-left: 10px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
}

/* Regular card styling for non-PC items */
.product-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition);
}
.product-card:hover {
    border-color: var(--neon-blue);
    transform: translateY(-5px);
}
.product-img {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0f0f0f;
    padding: 20px;
}
.product-img img {
    max-height: 100%;
    object-fit: contain;
}
.product-info {
    padding: 20px;
}
.product-info h3 {
    font-size: 1rem;
    margin-bottom: 10px;
    height: 40px;
    overflow: hidden;
}
.price {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--neon-blue);
    margin-bottom: 15px;
}
.product-actions {
    display: flex;
    gap: 10px;
}

@media (max-width: 992px) {
    .shop-layout {
        grid-template-columns: 1fr;
    }
    .filters {
        display: none; /* In real project we would have a mobile drawer */
    }
}
</style>
