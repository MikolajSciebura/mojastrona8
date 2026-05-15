<div class="admin-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="admin-content">
        <div class="container-fluid">
            <header class="admin-header">
                <h2>Dashboard</h2>
                <div class="admin-user">
                    <span>Zalogowany jako: <strong>Admin</strong></span>
                </div>
            </header>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="stat-info">
                        <h4>Sprzedaż (30 dni)</h4>
                        <div class="stat-number">45 230,00 zł</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-user-plus"></i></div>
                    <div class="stat-info">
                        <h4>Nowi Klienci</h4>
                        <div class="stat-number">128</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-box-open"></i></div>
                    <div class="stat-info">
                        <h4>Zamówienia</h4>
                        <div class="stat-number">56</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
.admin-wrapper {
    display: flex;
    min-height: 100vh;
}
.admin-sidebar {
    width: 250px;
    background: #050505;
    border-right: 1px solid rgba(255, 255, 255, 0.05);
    padding: 30px 0;
}
.sidebar-header {
    padding: 0 30px 30px;
}
.sidebar-menu li a {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    color: var(--text-muted);
}
.sidebar-menu li a:hover, .sidebar-menu li a.active {
    background: rgba(0, 242, 255, 0.05);
    color: var(--neon-blue);
    border-right: 3px solid var(--neon-blue);
}
.admin-content {
    flex-grow: 1;
    padding: 30px;
    background: #0a0a0a;
}
.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}
.stat-card {
    background: var(--bg-card);
    padding: 30px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 20px;
    border: 1px solid rgba(255, 255, 255, 0.05);
}
.stat-icon {
    width: 50px;
    height: 50px;
    background: rgba(0, 242, 255, 0.1);
    color: var(--neon-blue);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}
.stat-number {
    font-size: 1.5rem;
    font-weight: 800;
}
</style>
