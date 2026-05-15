<section class="profile-section">
    <div class="container">
        <h1>Witaj, <span class="text-neon">Użytkowniku</span>!</h1>
        <div class="profile-grid">
            <aside class="profile-sidebar">
                <div class="profile-card">
                    <img src="<?= asset("assets/img/default_avatar.png") ?>" alt="Avatar" class="profile-avatar">
                    <h3>Konto Premium</h3>
                    <ul class="profile-menu">
                        <li><a href="<?= SITE_URL ?>/konto" class="active">Dashboard</a></li>
                        <li><a href="<?= SITE_URL ?>/konto/zamowienia">Moje Zamówienia</a></li>
                        <li><a href="<?= SITE_URL ?>/konto/ustawienia">Ustawienia</a></li>
                        <li><a href="<?= SITE_URL ?>/wyloguj">Wyloguj się</a></li>
                    </ul>
                </div>
            </aside>
            <div class="profile-content">
                <div class="welcome-card">
                    <h2>Twoje ostatnie zamówienia</h2>
                    <p>Brak zamówień do wyświetlenia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.profile-section { padding: 60px 0; }
.profile-grid { display: grid; grid-template-columns: 300px 1fr; gap: 40px; margin-top: 30px; }
.profile-card { background: var(--bg-card); padding: 30px; border-radius: 15px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.05); }
.profile-avatar { width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px; border: 2px solid var(--neon-blue); }
.profile-menu { margin-top: 30px; text-align: left; }
.profile-menu li a { display: block; padding: 12px 0; color: var(--text-muted); border-bottom: 1px solid rgba(255, 255, 255, 0.05); }
.profile-menu li a.active { color: var(--neon-blue); font-weight: bold; }
.welcome-card { background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.05); }
</style>
