<div class="admin-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="admin-content">
        <header class="admin-header">
            <h2>Panel <span class="text-neon">Serwisanta</span></h2>
        </header>

        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID Zlecenia</th>
                        <th>Klient</th>
                        <th>Sprzęt</th>
                        <th>Status</th>
                        <th>Ostatnia aktualizacja</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#RE7782</td>
                        <td>Jan Kowalski</td>
                        <td>Laptop MSI GF63</td>
                        <td><span class="badge badge-processing">W trakcie naprawy</span></td>
                        <td>2024-05-15 10:30</td>
                        <td>
                            <button class="btn btn-outline btn-sm">Aktualizuj</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<style>
.badge { padding: 5px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: bold; }
.badge-processing { background: rgba(0, 242, 255, 0.1); color: var(--neon-blue); border: 1px solid var(--neon-blue); }
</style>
