<section class="cart-section">
    <div class="container">
        <h1>Twój <span class="text-neon">Koszyk</span></h1>

        <?php if (empty($cart)): ?>
            <div class="empty-cart" data-aos="fade-up">
                <i class="fas fa-shopping-basket"></i>
                <p>Twój koszyk jest pusty.</p>
                <a href="<?= SITE_URL ?>/sklep" class="btn btn-primary">Wróć do sklepu</a>
            </div>
        <?php else: ?>
            <div class="cart-grid">
                <div class="cart-items">
                    <?php
                    $total = 0;
                    foreach ($cart as $item):
                        $total += $item['price'] * $item['quantity'];
                    ?>
                        <div class="cart-item">
                            <img src="<?= asset('assets/img/products/' . ($item['image'] ?? 'placeholder.png')) ?>" alt="<?= e($item['name']) ?>">
                            <div class="item-info">
                                <h3><?= e($item['name']) ?></h3>
                                <div class="item-price"><?= number_format($item['price'], 2, ',', ' ') ?> zł</div>
                            </div>
                            <div class="item-quantity">
                                <span>Ilość: <?= $item['quantity'] ?></span>
                            </div>
                            <button class="remove-btn"><i class="fas fa-trash"></i></button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <aside class="cart-summary">
                    <div class="summary-card">
                        <h3>Podsumowanie</h3>
                        <div class="summary-row">
                            <span>Wartość produktów:</span>
                            <span><?= number_format($total, 2, ',', ' ') ?> zł</span>
                        </div>
                        <div class="summary-row">
                            <span>Dostawa:</span>
                            <span class="text-neon">GRATIS</span>
                        </div>
                        <div class="summary-total">
                            <span>Razem:</span>
                            <span><?= number_format($total, 2, ',', ' ') ?> zł</span>
                        </div>
                        <a href="<?= SITE_URL ?>/checkout" class="btn btn-primary btn-block">Przejdź do płatności</a>
                    </div>
                </aside>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
.cart-section {
    padding: 60px 0;
}
.empty-cart {
    text-align: center;
    padding: 100px 0;
}
.empty-cart i {
    font-size: 5rem;
    color: var(--bg-card);
    margin-bottom: 20px;
}
.cart-grid {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
    margin-top: 40px;
}
.cart-item {
    background: var(--bg-card);
    padding: 20px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    border: 1px solid rgba(255, 255, 255, 0.05);
}
.cart-item img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}
.item-info {
    flex-grow: 1;
}
.item-info h3 {
    font-size: 1rem;
    margin-bottom: 5px;
}
.item-price {
    color: var(--neon-blue);
    font-weight: bold;
}
.remove-btn {
    background: none;
    border: none;
    color: #ff4d4d;
    cursor: pointer;
    font-size: 1.2rem;
}
.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}
.summary-total {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    margin-top: 20px;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    font-size: 1.4rem;
    font-weight: 800;
}
</style>
