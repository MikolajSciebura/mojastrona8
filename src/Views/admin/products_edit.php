<div class="admin-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="admin-content">
        <div class="container-fluid">
            <header class="admin-header">
                <h2>Edytuj Produkt</h2>
                <a href="<?= SITE_URL ?>/admin/produkty" class="btn btn-outline">Powrót</a>
            </header>

            <div class="admin-card">
                <form action="<?= SITE_URL ?>/admin/produkty/update/<?= $product['id'] ?>" method="POST">
                    <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nazwa Produktu</label>
                            <input type="text" name="name" value="<?= e($product['name']) ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Cena (PLN)</label>
                            <input type="number" name="price" step="0.01" value="<?= $product['price'] ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kategoria</label>
                            <select name="category_id" class="form-control">
                                <option value="1" <?= $product['category_id'] == 1 ? 'selected' : '' ?>>Komputery Gamingowe</option>
                                <option value="2" <?= $product['category_id'] == 2 ? 'selected' : '' ?>>Stacje Robocze</option>
                                <option value="3" <?= $product['category_id'] == 3 ? 'selected' : '' ?>>Procesory</option>
                                <option value="4" <?= $product['category_id'] == 4 ? 'selected' : '' ?>>Karty Graficzne</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stan Magazynowy</label>
                            <input type="number" name="stock" value="<?= $product['stock'] ?>" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Opis</label>
                        <textarea name="description" rows="5" class="form-control"><?= e($product['description'] ?? '') ?></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <label>
                            <input type="checkbox" name="is_pc" value="1" <?= $product['is_pc'] ? 'checked' : '' ?>>
                            Czy to gotowy zestaw PC?
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-neon">Zapisz Zmiany</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<style>
.admin-card {
    background: var(--bg-card);
    padding: 30px;
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.05);
}
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}
.form-group label {
    display: block;
    margin-bottom: 10px;
    color: var(--text-muted);
}
.form-control {
    width: 100%;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 12px;
    border-radius: 8px;
    color: white;
}
.checkbox-group {
    margin: 20px 0;
}
.form-actions {
    margin-top: 30px;
}
</style>
