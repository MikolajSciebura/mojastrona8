<div class="admin-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="admin-content">
        <header class="admin-header">
            <h2>Zarządzanie <span class="text-neon">Produktami</span></h2>
            <a href="<?= SITE_URL ?>/admin/produkty/dodaj" class="btn btn-primary">Dodaj Nowy</a>
        </header>

        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Obraz</th>
                        <th>Nazwa</th>
                        <th>Cena</th>
                        <th>Stock</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td>#<?= $product['id'] ?></td>
                        <td><img src="<?= asset('assets/img/products/' . ($product['image'] ?? 'placeholder.png')) ?>" width="50"></td>
                        <td><?= e($product['name']) ?></td>
                        <td><?= number_format($product['price'], 2, ',', ' ') ?> zł</td>
                        <td><?= $product['stock'] ?? 0 ?></td>
                        <td>
                            <a href="<?= SITE_URL ?>/admin/produkty/edycja/<?= $product['id'] ?>" class="text-neon"><i class="fas fa-edit"></i></a>
                            <a href="<?= SITE_URL ?>/admin/produkty/usun/<?= $product['id'] ?>" class="text-danger" style="margin-left: 10px;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<style>
.admin-table-container { background: var(--bg-card); border-radius: 15px; overflow: hidden; border: 1px solid rgba(255, 255, 255, 0.05); }
.admin-table { width: 100%; border-collapse: collapse; }
.admin-table th, .admin-table td { padding: 20px; text-align: left; border-bottom: 1px solid rgba(255, 255, 255, 0.05); }
.admin-table th { background: rgba(255, 255, 255, 0.02); color: var(--text-muted); font-size: 0.9rem; }
.text-danger { color: #ff4d4d; }
</style>
