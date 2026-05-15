<section class="auth-section">
    <div class="container">
        <div class="auth-card" data-aos="fade-up">
            <h2>Witaj Ponownie</h2>
            <p>Zaloguj się do swojego konta MSTechPC</p>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="/logowanie" method="POST" class="auth-form">
                <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required placeholder="twoj@email.pl">
                </div>
                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="password" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
            </form>
            <div class="auth-footer">
                Nie masz konta? <a href="/rejestracja" class="text-neon">Zarejestruj się</a>
            </div>
        </div>
    </div>
</section>

<style>
.auth-section {
    padding: 100px 0;
    display: flex;
    justify-content: center;
}
.auth-card {
    background: var(--bg-card);
    padding: 40px;
    border-radius: 20px;
    max-width: 450px;
    width: 100%;
    margin: 0 auto;
    border: 1px solid rgba(255, 255, 255, 0.05);
    text-align: center;
}
.auth-form {
    margin-top: 30px;
    text-align: left;
}
.form-group {
    margin-bottom: 20px;
}
.form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 0.9rem;
    color: var(--text-muted);
}
.form-group input {
    width: 100%;
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    color: white;
    outline: none;
    transition: var(--transition);
}
.form-group input:focus {
    border-color: var(--neon-blue);
}
.btn-block {
    width: 100%;
}
.auth-footer {
    margin-top: 25px;
    font-size: 0.9rem;
}
.alert {
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 0.9rem;
}
.alert-danger {
    background: rgba(255, 0, 0, 0.1);
    color: #ff4d4d;
    border: 1px solid rgba(255, 0, 0, 0.2);
}
</style>
