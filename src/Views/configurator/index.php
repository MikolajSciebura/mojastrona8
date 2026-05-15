<section class="configurator">
    <div class="container">
        <div class="section-header">
            <h1>Zaawansowany <span class="text-neon">Konfigurator PC</span></h1>
            <p>Zbuduj swoją bestię. System automatycznie sprawdza kompatybilność części.</p>
        </div>

        <div class="config-grid">
            <input type="hidden" id="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">
            <div class="config-steps">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Wybierz Procesor (CPU)</h3>
                        <select class="form-control pc-part" data-type="cpu">
                            <option value="">Wybierz procesor...</option>
                            <?php foreach ($cpus as $cpu): ?>
                                <option value="<?= $cpu['id'] ?>" data-price="<?= $cpu['price'] ?>"><?= $cpu['name'] ?> (+<?= $cpu['price'] ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Płyta Główna</h3>
                        <select class="form-control pc-part" data-type="mobo">
                            <option value="">Wybierz płytę główną...</option>
                            <?php foreach ($mobos as $mobo): ?>
                                <option value="<?= $mobo['id'] ?>" data-price="<?= $mobo['price'] ?>"><?= $mobo['name'] ?> (+<?= $mobo['price'] ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Karta Graficzna (GPU)</h3>
                        <select class="form-control pc-part" data-type="gpu">
                            <option value="">Wybierz kartę graficzną...</option>
                            <?php foreach ($gpus as $gpu): ?>
                                <option value="<?= $gpu['id'] ?>" data-price="<?= $gpu['price'] ?>"><?= $gpu['name'] ?> (+<?= $gpu['price'] ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <aside class="config-summary">
                <div class="summary-card">
                    <h3>Podsumowanie</h3>
                    <ul id="part-list">
                        <!-- JS fills this -->
                    </ul>
                    <div class="total-price">
                        Suma: <span id="total-amount">0.00</span> zł
                    </div>
                    <div class="psu-usage">
                        Szacowany pobór mocy: <span id="psu-calc" class="text-neon">0</span> W
                    </div>
                    <button class="btn btn-primary btn-block" id="add-config-to-cart">Dodaj Konfigurację do Koszyka</button>
                    <p class="compatibility-info text-neon"><i class="fas fa-check-circle"></i> Części są kompatybilne</p>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>
.config-grid {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
    margin-top: 40px;
}
.step-card {
    background: var(--bg-card);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 20px;
    display: flex;
    gap: 20px;
    border: 1px solid rgba(255, 255, 255, 0.05);
}
.step-number {
    width: 40px;
    height: 40px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}
.step-content {
    flex-grow: 1;
}
.step-content h3 {
    margin-bottom: 15px;
    font-size: 1.1rem;
}
.form-control {
    width: 100%;
    padding: 12px;
    background: #1a1a1a;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    border-radius: 8px;
}
.summary-card {
    background: var(--bg-card);
    padding: 30px;
    border-radius: 15px;
    border: 1px solid var(--neon-blue);
    position: sticky;
    top: 100px;
}
.summary-card h3 {
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 10px;
}
.total-price {
    font-size: 1.5rem;
    font-weight: 800;
    margin: 20px 0;
    text-align: right;
}
.compatibility-info {
    font-size: 0.8rem;
    margin-top: 15px;
    text-align: center;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const parts = document.querySelectorAll('.pc-part');
    const totalDisplay = document.getElementById('total-amount');
    const partList = document.getElementById('part-list');
    const csrfToken = document.getElementById('csrf_token').value;

    function updateSummary() {
        let total = 0;
        let watts = 0;
        partList.innerHTML = '';

        parts.forEach(select => {
            const option = select.options[select.selectedIndex];
            if (option.value) {
                const price = parseFloat(option.getAttribute('data-price'));
                total += price;

                // Simulated wattage calculation
                if (select.getAttribute('data-type') === 'cpu') watts += 105;
                if (select.getAttribute('data-type') === 'gpu') watts += 285;
                if (select.getAttribute('data-type') === 'mobo') watts += 50;

                const li = document.createElement('li');
                li.style.display = 'flex';
                li.style.justifyContent = 'space-between';
                li.style.marginBottom = '10px';
                li.style.fontSize = '0.9rem';
                li.innerHTML = `<span>${select.getAttribute('data-type').toUpperCase()}</span> <span>${price.toFixed(2)} zł</span>`;
                partList.appendChild(li);
            }
        });

        totalDisplay.innerText = total.toLocaleString('pl-PL', { minimumFractionDigits: 2 });
        document.getElementById('psu-calc').innerText = watts;
    }

    parts.forEach(select => {
        select.addEventListener('change', updateSummary);
    });

    document.getElementById('add-config-to-cart').addEventListener('click', async () => {
        let total = 0;
        let partsData = {};

        parts.forEach(select => {
            const option = select.options[select.selectedIndex];
            if (option.value) {
                total += parseFloat(option.getAttribute('data-price'));
                partsData[select.getAttribute('data-type')] = option.text;
            }
        });

        if (total === 0) return alert('Wybierz części!');

        const formData = new FormData();
        formData.append('csrf_token', csrfToken);
        formData.append('config[total]', total);
        // Simplification for the demo
        formData.append('config[parts]', JSON.stringify(partsData));

        const response = await fetch('/konfigurator/zapisz', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();
        if (result.success) {
            window.location.href = '/koszyk';
        }
    });
});
</script>
