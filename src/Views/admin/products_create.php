<div class="admin-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="admin-content">
        <header class="admin-header">
            <h2>Dodaj Nowy <span class="text-neon">Produkt</span></h2>
        </header>

        <form action="/admin/produkty/dodaj" method="POST" class="admin-form">
            <input type="hidden" name="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
            <div class="form-grid">
                <div class="form-group">
                    <label>Nazwa Produktu</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Cena (zł)</label>
                    <input type="number" step="0.01" name="price" required>
                </div>
                <div class="form-group">
                    <label>Kategoria</label>
                    <select name="category_id">
                        <option value="1">Laptopy</option>
                        <option value="2">Komputery Gamingowe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stan Magazynowy</label>
                    <input type="number" name="stock" value="10">
                </div>
            </div>
            <div class="form-group">
                <label>Opis</label>
                <textarea name="description" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz Produkt</button>
        </form>
    </main>
</div>

<style>
.admin-form { background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.05); }
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
.admin-form label { display: block; margin-bottom: 10px; color: var(--text-muted); }
.admin-form input, .admin-form select, .admin-form textarea { width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 8px; color: white; }
</style>
