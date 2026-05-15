<section class="auth-section">
    <div class="container">
        <div class="auth-card" data-aos="fade-up">
            <h2>Dołącz do <span class="text-neon">MSTechPC</span></h2>
            <p>Zyskaj dostęp do historii zamówień i ekskluzywnych ofert.</p>

            <form action="<?= SITE_URL ?>/rejestracja" method="POST" class="auth-form">
                <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
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
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Zarejestruj się</button>
            </form>
            <div class="auth-footer">
                Masz już konto? <a href="<?= SITE_URL ?>/logowanie" class="text-neon">Zaloguj się</a>
            </div>
        </div>
    </div>
</section>

<style>
.auth-section { padding: 100px 0; display: flex; justify-content: center; }
.auth-card { background: var(--bg-card); padding: 40px; border-radius: 20px; max-width: 550px; width: 100%; margin: 0 auto; border: 1px solid rgba(255, 255, 255, 0.05); text-align: center; }
.auth-form { margin-top: 30px; text-align: left; }
.form-group { margin-bottom: 20px; }
.form-row { display: flex; gap: 15px; }
.form-group input { width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 8px; color: white; }
</style>
