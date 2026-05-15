<section class="configurator-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Master <span class="text-neon">Configurator</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Zaprojektuj swój idealny komputer gamingowy z inteligentną weryfikacją kompatybilności.</p>
    </div>
</section>

<section class="configurator-main">
    <div class="container">
        <div class="config-layout">
            <input type="hidden" id="csrf_token" value="<?= \App\Core\Security::csrf_token() ?>">

            <div class="config-steps-container">
                <!-- Step: CPU -->
                <div class="config-step-card" data-aos="fade-right">
                    <div class="step-info">
                        <div class="step-badge">01</div>
                        <h3>Procesor <span class="text-neon">CPU</span></h3>
                    </div>
                    <div class="step-select-wrapper">
                        <select class="form-select-premium pc-part" data-type="cpu">
                            <option value="">Wybierz serce swojego komputera...</option>
                            <?php foreach ($cpus as $cpu): ?>
                                <option value="<?= $cpu['id'] ?>" data-price="<?= $cpu['price'] ?>"><?= $cpu['name'] ?> (+<?= number_format($cpu['price'], 0, ',', ' ') ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                        <div class="part-details-hint">Rekomendowane do: Gaming / Streaming</div>
                    </div>
                </div>

                <!-- Step: Mobo -->
                <div class="config-step-card" data-aos="fade-right" data-aos-delay="50">
                    <div class="step-info">
                        <div class="step-badge">02</div>
                        <h3>Płyta Główna <span class="text-neon">Motherboard</span></h3>
                    </div>
                    <div class="step-select-wrapper">
                        <select class="form-select-premium pc-part" data-type="mobo">
                            <option value="">Wybierz fundament zestawu...</option>
                            <?php foreach ($mobos as $mobo): ?>
                                <option value="<?= $mobo['id'] ?>" data-price="<?= $mobo['price'] ?>"><?= $mobo['name'] ?> (+<?= number_format($mobo['price'], 0, ',', ' ') ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Step: GPU -->
                <div class="config-step-card" data-aos="fade-right" data-aos-delay="100">
                    <div class="step-info">
                        <div class="step-badge">03</div>
                        <h3>Karta Graficzna <span class="text-neon">GPU</span></h3>
                    </div>
                    <div class="step-select-wrapper">
                        <select class="form-select-premium pc-part" data-type="gpu">
                            <option value="">Wybierz moc obliczeniową...</option>
                            <?php foreach ($gpus as $gpu): ?>
                                <option value="<?= $gpu['id'] ?>" data-price="<?= $gpu['price'] ?>"><?= $gpu['name'] ?> (+<?= number_format($gpu['price'], 0, ',', ' ') ?> zł)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- More steps can be added here -->
            </div>

            <aside class="config-sidebar" data-aos="fade-left">
                <div class="premium-summary-card">
                    <div class="card-header">
                        <i class="fas fa-microchip text-neon"></i>
                        <span>Twój Build</span>
                    </div>

                    <div class="selected-parts-list" id="part-list">
                        <div class="empty-state">Wybierz pierwszy podzespół, aby rozpocząć konfigurację.</div>
                    </div>

                    <div class="stats-panel">
                        <div class="stat-item">
                            <span class="stat-label">Pobór mocy (TDP)</span>
                            <span class="stat-value"><span id="psu-calc">0</span> W</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Kompatybilność</span>
                            <span class="stat-value text-neon"><i class="fas fa-shield-alt"></i> OK</span>
                        </div>
                    </div>

                    <div class="total-section">
                        <div class="total-label">Suma brutto:</div>
                        <div class="total-value"><span id="total-amount">0.00</span> <span>zł</span></div>
                    </div>

                    <button class="btn-neon-action btn-block" id="add-config-to-cart">
                        DODAJ DO KOSZYKA <i class="fas fa-shopping-cart"></i>
                    </button>

                    <button class="btn-outline btn-block" id="export-pdf" style="margin-top: 15px; border-color: rgba(255,255,255,0.1);">
                        EKSPORTUJ DO PDF <i class="fas fa-file-pdf"></i>
                    </button>

                    <div class="config-security-note">
                        <i class="fas fa-lock"></i> Bezpieczna płatność i gwarancja 24m.
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>
.configurator-header {
    padding: 120px 0 60px;
    background: radial-gradient(circle at center, rgba(0,242,255,0.05) 0%, transparent 70%);
}
.configurator-header h1 {
    font-size: 3.5rem;
    font-weight: 800;
}

.config-layout {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 50px;
    padding-bottom: 100px;
}

.config-step-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 30px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    transition: var(--transition);
}
.config-step-card:hover {
    border-color: rgba(0, 242, 255, 0.2);
    background: rgba(255, 255, 255, 0.03);
}

.step-info {
    display: flex;
    align-items: center;
    gap: 20px;
}
.step-badge {
    width: 50px;
    height: 50px;
    background: rgba(0, 242, 255, 0.1);
    color: var(--neon-blue);
    border: 1px solid var(--neon-blue);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-family: 'Exo 2', sans-serif;
}
.step-info h3 {
    font-size: 1.4rem;
    margin: 0;
}

.form-select-premium {
    width: 100%;
    background: #000;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 15px 20px;
    border-radius: 12px;
    font-size: 1rem;
    outline: none;
    cursor: pointer;
    transition: var(--transition);
}
.form-select-premium:focus {
    border-color: var(--neon-blue);
    box-shadow: 0 0 15px rgba(0, 242, 255, 0.1);
}

.part-details-hint {
    font-size: 0.8rem;
    color: #555;
    margin-top: 10px;
    margin-left: 5px;
}

.premium-summary-card {
    background: rgba(5, 5, 5, 0.8);
    backdrop-filter: blur(20px);
    border: 1px solid var(--neon-blue);
    border-radius: 24px;
    padding: 40px;
    position: sticky;
    top: 120px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
}
.card-header {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.selected-parts-list {
    min-height: 100px;
    margin-bottom: 30px;
}
.empty-state {
    color: #555;
    font-size: 0.9rem;
    line-height: 1.5;
}

.stats-panel {
    border-top: 1px solid rgba(255,255,255,0.05);
    padding: 20px 0;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.stat-item {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
}
.stat-label { color: #888; }
.stat-value { font-weight: 600; }

.total-section {
    margin: 30px 0;
}
.total-label {
    color: #888;
    font-size: 0.9rem;
    margin-bottom: 5px;
}
.total-value {
    font-size: 2.5rem;
    font-weight: 800;
    font-family: 'Exo 2', sans-serif;
    color: #fff;
}
.total-value span:last-child {
    font-size: 1.2rem;
    color: var(--neon-blue);
}

.btn-neon-action {
    background: var(--neon-blue);
    color: #000;
    border: none;
    padding: 20px;
    border-radius: 12px;
    font-weight: 800;
    width: 100%;
    cursor: pointer;
    transition: var(--transition);
    text-transform: uppercase;
    letter-spacing: 1px;
}
.btn-neon-action:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 242, 255, 0.4);
}

.config-security-note {
    margin-top: 20px;
    text-align: center;
    font-size: 0.8rem;
    color: #555;
}

@media (max-width: 1200px) {
    .config-layout {
        grid-template-columns: 1fr;
    }
    .config-sidebar {
        order: -1;
    }
    .premium-summary-card {
        position: relative;
        top: 0;
    }
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

    function getSelectedConfig() {
        let total = 0;
        let partsData = [];

        parts.forEach(select => {
            const option = select.options[select.selectedIndex];
            if (option.value) {
                total += parseFloat(option.getAttribute('data-price'));
                partsData.push({
                    type: select.getAttribute('data-type').toUpperCase(),
                    name: option.text.split(' (+')[0],
                    price: parseFloat(option.getAttribute('data-price'))
                });
            }
        });
        return { total, parts: partsData };
    }

    document.getElementById('add-config-to-cart').addEventListener('click', async () => {
        const config = getSelectedConfig();
        if (config.total === 0) return alert('Wybierz przynajmniej jeden podzespół!');

        const formData = new FormData();
        formData.append('csrf_token', csrfToken);
        formData.append('config[total]', config.total);
        formData.append('config[parts]', JSON.stringify(config.parts));

        const response = await fetch(SITE_URL + '/konfigurator/zapisz', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();
        if (result.success) {
            window.location.href = SITE_URL + '/koszyk';
        }
    });

    document.getElementById('export-pdf').addEventListener('click', () => {
        const config = getSelectedConfig();
        if (config.total === 0) return alert('Wybierz podzespoły przed eksportem!');

        const configJson = btoa(JSON.stringify(config));
        window.open(SITE_URL + '/konfigurator/drukuj?data=' + configJson, '_blank');
    });
});
</script>
