<section class="shop-header">
    <div class="container">
        <h1>Nasze <span class="text-neon">Produkty</span></h1>
        <p>Najwyższa jakość podzespołów i gotowych zestawów.</p>
    </div>
</section>

<section class="shop-content">
    <div class="container">
        <div class="shop-layout">
            <aside class="filters">
                <h3>Kategorie</h3>
                <ul class="category-list">
                    <li><a href="/kategoria/komputery-gamingowe">Komputery Gamingowe</a></li>
                    <li><a href="/kategoria/procesory">Procesory</a></li>
                    <li><a href="/kategoria/karty-graficzne">Karty Graficzne</a></li>
                    <!-- More categories -->
                </ul>
            </aside>
            <div class="product-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card" data-aos="fade-up">
                        <div class="product-img">
                            <img src="/assets/img/products/<?= $product['image'] ?? 'placeholder.png' ?>" alt="<?= $product['name'] ?>">
                            <?php if ($product['is_pc']): ?>
                                <span class="badge">GOTOWY PC</span>
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <h3><?= $product['name'] ?></h3>
                            <div class="price"><?= number_format($product['price'], 2, ',', ' ') ?> zł</div>
                            <div class="product-actions">
                                <a href="/produkt/<?= $product['slug'] ?>" class="btn btn-outline btn-sm">Szczegóły</a>
                                <button class="btn btn-primary btn-sm add-to-cart" data-id="<?= $product['id'] ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.shop-header {
    padding: 60px 0;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/assets/img/shop-bg.jpg');
    background-size: cover;
    text-align: center;
}
.shop-layout {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 40px;
    padding: 60px 0;
}
.category-list li {
    margin-bottom: 10px;
}
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
}
.product-card {
    background: var(--bg-card);
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: var(--transition);
}
.product-card:hover {
    transform: translateY(-5px);
    border-color: var(--neon-blue);
}
.product-img {
    position: relative;
    height: 250px;
    background: #1a1a1a;
    display: flex;
    align-items: center;
    justify-content: center;
}
.badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: var(--neon-blue);
    color: black;
    font-size: 0.7rem;
    font-weight: bold;
    padding: 4px 8px;
    border-radius: 4px;
}
.product-info {
    padding: 20px;
}
.product-info h3 {
    font-size: 1.1rem;
    margin-bottom: 10px;
    height: 50px;
    overflow: hidden;
}
.price {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--neon-blue);
    margin-bottom: 15px;
}
.product-actions {
    display: flex;
    gap: 10px;
}
.btn-sm {
    padding: 8px 15px;
    font-size: 0.9rem;
}
</style>
