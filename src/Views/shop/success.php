<section class="success-section">
    <div class="container text-center">
        <div class="success-card" data-aos="zoom-in">
            <i class="fas fa-check-circle text-neon" style="font-size: 5rem; margin-bottom: 20px;"></i>
            <h1>Dziękujemy za <span class="text-neon">zamówienie</span>!</h1>
            <p>Twoje zamówienie <strong>#<?= $order_id ?? 'ORD-'.time() ?></strong> zostało przyjęte do realizacji.</p>
            <p>Potwierdzenie wysłaliśmy na Twój adres e-mail.</p>
            <div class="success-actions">
                <a href="<?= SITE_URL ?>/faktura" class="btn btn-outline">Pobierz Fakturę</a>
                <a href="<?= SITE_URL ?>/konto" class="btn btn-primary">Moje konto</a>
                <a href="<?= SITE_URL ?>/" class="btn btn-outline">Strona główna</a>
            </div>
        </div>
    </div>
</section>

<style>
.success-section { padding: 100px 0; }
.success-card { background: var(--bg-card); padding: 60px; border-radius: 20px; border: 1px solid var(--neon-blue); max-width: 600px; margin: 0 auto; }
.success-actions { margin-top: 40px; display: flex; justify-content: center; gap: 20px; }
</style>
