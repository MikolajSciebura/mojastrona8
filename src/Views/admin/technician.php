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
                        <th>ID Zgłoszenia</th>
                        <th>Klient</th>
                        <th>Urządzenie</th>
                        <th>Status</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($repairs as $repair): ?>
                    <tr>
                        <td><strong><?= e($repair['repair_id']) ?></strong></td>
                        <td><?= e($repair['customer_name']) ?></td>
                        <td><?= e($repair['device']) ?></td>
                        <td><span class="badge"><?= e($repair['status']) ?></span></td>
                        <td>
                            <form action="<?= SITE_URL ?>/admin/serwis/status" method="POST" style="display: flex; gap: 10px;">
                                <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
                                <input type="hidden" name="id" value="<?= $repair['id'] ?>">
                                <select name="status" class="form-control" style="padding: 5px;">
                                    <option value="Nowe zgłoszenie">Nowe</option>
                                    <option value="W trakcie naprawy">W naprawie</option>
                                    <option value="Czeka na części">Części</option>
                                    <option value="Gotowe do odbioru">Gotowe</option>
                                    <option value="Wydano">Wydano</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">Aktualizuj</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<style>
.badge { background: rgba(0, 242, 255, 0.1); color: var(--neon-blue); padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; }
.btn-sm { padding: 5px 10px; font-size: 0.8rem; }
</style>
