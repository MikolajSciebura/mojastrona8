<div class="admin-wrapper">
    <aside class="admin-sidebar">
        <div class="sidebar-header">
            <h2 class="text-neon" style="font-size: 1.5rem;">MS Admin</h2>
        </div>
        <nav class="sidebar-menu">
            <ul>
                <li><a href="<?= SITE_URL ?>/admin" class="<?= $_SERVER['REQUEST_URI'] == '/admin' ? 'active' : '' ?>"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                <li><a href="<?= SITE_URL ?>/admin/produkty" class="<?= strpos($_SERVER['REQUEST_URI'], '/admin/produkty') !== false ? 'active' : '' ?>"><i class="fas fa-boxes"></i> Produkty</a></li>
                <li><a href="<?= SITE_URL ?>/admin/zamowienia"><i class="fas fa-shopping-bag"></i> Zamówienia</a></li>
                <li><a href="<?= SITE_URL ?>/admin/serwis"><i class="fas fa-tools"></i> Serwis</a></li>
                <li><a href="<?= SITE_URL ?>/admin/blog"><i class="fas fa-newspaper"></i> Blog</a></li>
                <li><a href="<?= SITE_URL ?>/admin/ustawienia"><i class="fas fa-cog"></i> Ustawienia</a></li>
                <li class="mt-auto"><a href="<?= SITE_URL ?>/wyloguj"><i class="fas fa-sign-out-alt"></i> Wyloguj</a></li>
            </ul>
        </nav>
    </aside>
    <main class="admin-content">
        <div class="container-fluid">
            <header class="admin-header">
                <div class="header-left">
                    <h1>Dashboard</h1>
                    <p class="text-muted">Witaj ponownie, Administratorze.</p>
                </div>
                <div class="header-right">
                    <div class="admin-profile">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=00f2ff&color=000" alt="Admin">
                        <div class="profile-info">
                            <span class="profile-name">Admin MS</span>
                            <span class="profile-role">Super Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up">
                    <div class="stat-main">
                        <div class="stat-icon bg-blue-glow"><i class="fas fa-shopping-cart"></i></div>
                        <div class="stat-data">
                            <span class="stat-label">Sprzedaż (30 dni)</span>
                            <span class="stat-value">45 230,00 zł</span>
                        </div>
                    </div>
                    <div class="stat-trend trend-up">
                        <i class="fas fa-arrow-up"></i> 12.5% <span>vs poprz. mies.</span>
                    </div>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-main">
                        <div class="stat-icon bg-purple-glow"><i class="fas fa-user-plus"></i></div>
                        <div class="stat-data">
                            <span class="stat-label">Nowi Klienci</span>
                            <span class="stat-value">128</span>
                        </div>
                    </div>
                    <div class="stat-trend trend-up">
                        <i class="fas fa-arrow-up"></i> 8.2% <span>vs poprz. mies.</span>
                    </div>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-main">
                        <div class="stat-icon bg-orange-glow"><i class="fas fa-box-open"></i></div>
                        <div class="stat-data">
                            <span class="stat-label">Zamówienia</span>
                            <span class="stat-value">56</span>
                        </div>
                    </div>
                    <div class="stat-trend trend-down">
                        <i class="fas fa-arrow-down"></i> 2.1% <span>vs poprz. mies.</span>
                    </div>
                </div>
            </div>

            <div class="admin-grid mt-8">
                <div class="admin-card recent-orders">
                    <div class="card-header">
                        <h3>Ostatnie Zamówienia</h3>
                        <a href="<?= SITE_URL ?>/admin/zamowienia" class="btn btn-small btn-outline">Zobacz wszystkie</a>
                    </div>
                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Klient</th>
                                    <th>Produkt</th>
                                    <th>Status</th>
                                    <th>Kwota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-8821</td>
                                    <td>Jan Kowalski</td>
                                    <td>Extreme Gaming R1</td>
                                    <td><span class="badge badge-paid">Opłacone</span></td>
                                    <td>12 999 zł</td>
                                </tr>
                                <tr>
                                    <td>#ORD-8820</td>
                                    <td>Anna Nowak</td>
                                    <td>MSTech Storm</td>
                                    <td><span class="badge badge-pending">Oczekiwanie</span></td>
                                    <td>5 499 zł</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="admin-card active-repairs">
                    <div class="card-header">
                        <h3>Statusy Serwisu</h3>
                        <a href="<?= SITE_URL ?>/admin/serwis" class="btn btn-small btn-outline">Zarządzaj</a>
                    </div>
                    <div class="repair-list">
                        <div class="repair-item">
                            <div class="repair-info">
                                <span class="repair-id">#RE7782</span>
                                <span class="repair-device">Laptop ASUS ROG</span>
                            </div>
                            <span class="badge badge-processing">W trakcie naprawy</span>
                        </div>
                        <div class="repair-item">
                            <div class="repair-info">
                                <span class="repair-id">#RE7781</span>
                                <span class="repair-device">PC Gamingowy - Modernizacja</span>
                            </div>
                            <span class="badge badge-done">Gotowe do odbioru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
.admin-wrapper { display: flex; min-height: 100vh; background: #06060a; }
.admin-sidebar { width: 280px; background: #0b0b14; border-right: 1px solid var(--glass-border); display: flex; flex-direction: column; }
.sidebar-header { padding: 30px; border-bottom: 1px solid var(--glass-border); }
.sidebar-menu { flex-grow: 1; padding: 20px 0; }
.sidebar-menu ul li { margin-bottom: 5px; }
.sidebar-menu li a { display: flex; align-items: center; gap: 15px; padding: 12px 30px; color: var(--text-muted); font-size: 0.9rem; transition: var(--transition); }
.sidebar-menu li a:hover, .sidebar-menu li a.active { color: var(--neon-blue); background: rgba(0, 242, 255, 0.05); }
.sidebar-menu li a.active { border-left: 4px solid var(--neon-blue); }

.admin-content { flex-grow: 1; padding: 40px; }
.admin-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 40px; }
.admin-header h1 { font-size: 2rem; font-family: 'Exo 2', sans-serif; }
.admin-profile { display: flex; align-items: center; gap: 15px; background: var(--bg-card); padding: 10px 20px; border-radius: 40px; border: 1px solid var(--glass-border); }
.admin-profile img { width: 35px; height: 35px; border-radius: 50%; }
.profile-name { display: block; font-size: 0.9rem; font-weight: 700; }
.profile-role { display: block; font-size: 0.7rem; color: var(--text-muted); }

.stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
.stat-card { background: var(--bg-card); padding: 25px; border-radius: var(--border-radius); border: 1px solid var(--glass-border); }
.stat-main { display: flex; align-items: center; gap: 20px; margin-bottom: 20px; }
.stat-icon { width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
.bg-blue-glow { background: rgba(0, 242, 255, 0.1); color: var(--neon-blue); }
.bg-purple-glow { background: rgba(188, 19, 254, 0.1); color: var(--neon-purple); }
.bg-orange-glow { background: rgba(255, 165, 0, 0.1); color: #ffa500; }
.stat-label { display: block; color: var(--text-muted); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
.stat-value { display: block; font-size: 1.6rem; font-weight: 900; font-family: 'Exo 2', sans-serif; }
.stat-trend { font-size: 0.8rem; font-weight: 700; }
.stat-trend span { color: var(--text-muted); font-weight: 400; margin-left: 5px; }
.trend-up { color: #10b981; }
.trend-down { color: #ef4444; }

.admin-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 25px; }
.admin-card { background: var(--bg-card); border-radius: var(--border-radius); border: 1px solid var(--glass-border); padding: 25px; }
.card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
.card-header h3 { font-size: 1.1rem; font-weight: 800; }

.admin-table { width: 100%; border-collapse: collapse; }
.admin-table th { text-align: left; padding: 15px; color: var(--text-muted); font-size: 0.75rem; text-transform: uppercase; border-bottom: 1px solid var(--glass-border); }
.admin-table td { padding: 15px; font-size: 0.85rem; border-bottom: 1px solid rgba(255,255,255,0.02); }

.badge { padding: 4px 10px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; }
.badge-paid { background: rgba(16, 185, 129, 0.1); color: #10b981; }
.badge-pending { background: rgba(245, 158, 11, 0.1); color: #f59e0b; }
.badge-processing { background: rgba(59, 130, 246, 0.1); color: #3b82f6; }
.badge-done { background: rgba(16, 185, 129, 0.1); color: #10b981; }

.repair-item { display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.02); }
.repair-id { display: block; font-weight: 700; color: var(--neon-blue); font-size: 0.8rem; }
.repair-device { display: block; font-size: 0.8rem; }

.mt-8 { margin-top: 40px; }
.mt-auto { margin-top: auto; }
</style>
