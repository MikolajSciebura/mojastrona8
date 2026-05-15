<section class="service-status-page">
    <div class="container">
        <div class="status-card" data-aos="zoom-in">
            <?php if ($repair): ?>
                <div class="status-header">
                    <span class="badge badge-neon"><?= e($repair['status']) ?></span>
                    <h2>Zgłoszenie <span class="text-neon"><?= e($repair['repair_id']) ?></span></h2>
                </div>

                <div class="status-details">
                    <div class="detail-row">
                        <span>Urządzenie:</span>
                        <strong><?= e($repair['device']) ?></strong>
                    </div>
                    <div class="detail-row">
                        <span>Klient:</span>
                        <strong><?= e($repair['customer_name']) ?></strong>
                    </div>
                    <div class="detail-row">
                        <span>Data przyjęcia:</span>
                        <strong><?= date('d.m.Y H:i', strtotime($repair['created_at'])) ?></strong>
                    </div>
                    <hr>
                    <div class="detail-row">
                        <span>Opis usterki/naprawy:</span>
                        <p><?= e($repair['description']) ?></p>
                    </div>
                    <div class="detail-row cost-row">
                        <span>Szacowany koszt:</span>
                        <strong class="text-neon"><?= number_format($repair['estimated_cost'], 2, ',', ' ') ?> zł</strong>
                    </div>
                </div>

                <div class="status-timeline">
                    <!-- Simple timeline visual -->
                    <div class="timeline-step active">
                        <div class="step-dot"></div>
                        <span>Przyjęto</span>
                    </div>
                    <div class="timeline-step <?= in_array($repair['status'], ['W trakcie naprawy', 'Gotowe do odbioru', 'Zakończono']) ? 'active' : '' ?>">
                        <div class="step-dot"></div>
                        <span>W naprawie</span>
                    </div>
                    <div class="timeline-step <?= in_array($repair['status'], ['Gotowe do odbioru', 'Zakończono']) ? 'active' : '' ?>">
                        <div class="step-dot"></div>
                        <span>Gotowe</span>
                    </div>
                </div>

            <?php else: ?>
                <div class="error-box text-center">
                    <i class="fas fa-exclamation-triangle fa-3x text-danger"></i>
                    <h2>Nie znaleziono zgłoszenia</h2>
                    <p>Upewnij się, że numer <strong><?= e($repairId) ?></strong> jest poprawny.</p>
                    <a href="<?= SITE_URL ?>/serwis" class="btn btn-primary">Spróbuj ponownie</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
.service-status-page { padding: 80px 0; min-height: 70vh; }
.status-card { background: rgba(15, 15, 15, 0.95); backdrop-filter: blur(10px); padding: 40px; border-radius: 20px; border: 1px solid rgba(0, 242, 255, 0.2); max-width: 700px; margin: 0 auto; box-shadow: 0 10px 50px rgba(0,0,0,0.8); }
.status-header { text-align: center; margin-bottom: 30px; }
.badge-neon { background: var(--neon-blue); color: black; padding: 5px 15px; border-radius: 20px; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 15px; display: inline-block; }
.detail-row { display: flex; justify-content: space-between; margin-bottom: 15px; flex-wrap: wrap; }
.detail-row span { color: var(--text-muted); }
.detail-row p { width: 100%; margin-top: 5px; }
.cost-row { font-size: 1.2rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px; margin-top: 15px; }
.status-timeline { display: flex; justify-content: space-between; margin-top: 40px; position: relative; }
.status-timeline::before { content: ''; position: absolute; top: 15px; left: 10%; right: 10%; height: 2px; background: rgba(255,255,255,0.1); z-index: 1; }
.timeline-step { position: relative; z-index: 2; text-align: center; width: 33%; }
.step-dot { width: 30px; height: 30px; background: #333; border-radius: 50%; margin: 0 auto 10px; border: 4px solid #000; }
.timeline-step.active .step-dot { background: var(--neon-blue); box-shadow: 0 0 15px var(--neon-blue); }
.timeline-step.active span { color: var(--neon-blue); font-weight: bold; }
hr { border: 0; border-top: 1px solid rgba(255,255,255,0.05); margin: 20px 0; }
</style>
