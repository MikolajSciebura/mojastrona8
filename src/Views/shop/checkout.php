<section class="checkout-section">
    <div class="container">
        <h1>Finalizacja <span class="text-neon">Zamówienia</span></h1>
        <form action="<?= SITE_URL ?>/checkout/proces" method="POST" class="checkout-form">
            <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
            <div class="checkout-grid">
                <div class="billing-details">
                    <h3>Dane do wysyłki</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Imię</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label>Nazwisko</label>
                            <input type="text" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input type="text" name="address" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Kod pocztowy</label>
                            <input type="text" name="zip" required>
                        </div>
                        <div class="form-group">
                            <label>Miasto</label>
                            <input type="text" name="city" required>
                        </div>
                    </div>
                </div>
                <aside class="order-review">
                    <div class="summary-card">
                        <h3>Twoje zamówienie</h3>
                        <?php foreach ($cart as $item): ?>
                            <div class="review-item">
                                <span><?= e($item['name']) ?> (x<?= e($item['quantity']) ?>)</span>
                                <span><?= number_format($item['price'] * $item['quantity'], 2, ',', ' ') ?> zł</span>
                            </div>
                        <?php endforeach; ?>
                        <div class="summary-total">
                            <span>Do zapłaty:</span>
                            <span class="text-neon"><?= number_format(array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart)), 2, ',', ' ') ?> zł</span>
                        </div>
                        <div class="payment-methods">
                            <h4>Metoda płatności</h4>
                            <label class="radio-container">BLIK
                                <input type="radio" name="payment" value="blik" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Przelewy24
                                <input type="radio" name="payment" value="p24">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Zamawiam i płacę</button>
                    </div>
                </aside>
            </div>
        </form>
    </div>
</section>

<style>
.checkout-section { padding: 60px 0; }
.checkout-grid { display: grid; grid-template-columns: 1fr 400px; gap: 50px; margin-top: 40px; }
.billing-details h3 { margin-bottom: 30px; }
.form-row { display: flex; gap: 20px; }
.review-item { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.9rem; }
.payment-methods { margin-top: 30px; }
.radio-container { display: block; position: relative; padding-left: 35px; margin-bottom: 12px; cursor: pointer; font-size: 1rem; }
</style>
