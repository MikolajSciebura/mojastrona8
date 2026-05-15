<section class="hero">
    <div class="container">
        <div class="hero-tag">
            <i class="fas fa-circle" style="font-size: 0.5rem;"></i> Częstochowa - Kłobuck - Online PL
        </div>
        <h1 class="hero-title" data-aos="fade-up">
            KOMPUTERY,<br>
            KTÓRE <span class="text-neon">WYGRYWAJĄ.</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
            Składamy gamingowe PC z RTX, naprawiamy każdy sprzęt i obsługujemy IT firmowe. Diagnoza <span class="text-neon">GRATIS</span>, gwarancja <span class="text-neon">24 miesiące.</span>
        </p>
        <div class="flex gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="<?= SITE_URL ?>/konfigurator" class="btn btn-primary"><i class="fas fa-rocket"></i> Skonfiguruj swój PC</a>
            <a href="<?= SITE_URL ?>/serwis" class="btn btn-outline"><i class="fas fa-wrench"></i> Zgłoś serwis</a>
        </div>

        <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
            <div class="hero-stat-item">
                <h3>12+</h3>
                <p>Lat doświadczenia</p>
            </div>
            <div class="hero-stat-item">
                <h3>5000+</h3>
                <p>Naprawionych PC</p>
            </div>
            <div class="hero-stat-item">
                <h3>24h</h3>
                <p>Serwis ekspresowy</p>
            </div>
            <div class="hero-stat-item">
                <h3>4.9</h3>
                <p>Ocena klientów</p>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-tag">// CO ROBIMY</span>
            <h2 class="section-title">Trzy obszary, <span class="text-neon">pełen spektrum</span></h2>
            <p class="text-muted mt-4">Od pojedynczej naprawy po obsługę IT całej firmy.</p>
        </div>

        <div class="card-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon"><i class="fas fa-microchip"></i></div>
                <h3>Konfigurator PC</h3>
                <p>Złóż swój wymarzony komputer gamingowy. Autoweryfikacja kompatybilności, kalkulacja FPS, presety AI/Gaming/Studio.</p>
                <a href="<?= SITE_URL ?>/konfigurator" class="text-neon">Zobacz więcej <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200" style="border-color: var(--neon-purple);">
                <div class="service-icon" style="background: rgba(188, 19, 254, 0.1); color: var(--neon-purple);"><i class="fas fa-tools"></i></div>
                <h3>Serwis komputerów</h3>
                <p>Naprawa PC, laptopów, odzyskiwanie danych, instalacja Windows. Diagnoza zawsze GRATIS, ekspres 24h.</p>
                <a href="<?= SITE_URL ?>/serwis" class="text-neon">Zobacz więcej <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon"><i class="fas fa-headset"></i></div>
                <h3>Obsługa firm IT</h3>
                <p>Outsourcing IT dla MŚP w regionie. Audyty, sieci, serwery, helpdesk. Stała opieka lub na zlecenie.</p>
                <a href="<?= SITE_URL ?>/kontakt" class="text-neon">Zobacz więcej <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="pc-sets bg-dark">
    <div class="container">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="section-tag">// POLECANE ZESTAWY</span>
                <h2 class="section-title">Gotowe konfiguracje <span class="text-neon">RTX</span></h2>
            </div>
            <a href="<?= SITE_URL ?>/sklep" class="btn btn-outline btn-small">Cały sklep <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="card-grid">
            <!-- Set 1 -->
            <div class="pc-card" data-aos="zoom-in">
                <span class="pc-tag">1080p Gaming</span>
                <h3 class="pc-title">MSTech STORM</h3>
                <div class="spec-table">
                    <div class="spec-row"><span class="spec-label">CPU</span><span class="spec-value">Ryzen 5 5600</span></div>
                    <div class="spec-row"><span class="spec-label">GPU</span><span class="spec-value">RTX 4060</span></div>
                    <div class="spec-row"><span class="spec-label">RAM</span><span class="spec-value">16GB DDR4</span></div>
                    <div class="spec-row"><span class="spec-label">Wydajność</span><span class="spec-value text-neon">144+ FPS Full HD</span></div>
                </div>
                <div class="pc-price-row">
                    <div class="pc-price">4 999 <span>zł</span></div>
                    <a href="<?= SITE_URL ?>/produkt/1" class="btn btn-primary btn-small">Konfiguruj</a>
                </div>
            </div>

            <!-- Set 2 -->
            <div class="pc-card" data-aos="zoom-in" data-aos-delay="100" style="border-color: var(--neon-blue); position: relative;">
                <div style="position: absolute; top: -15px; right: 20px; background: var(--gradient-primary); font-size: 0.6rem; padding: 4px 10px; border-radius: 4px; font-weight: 800;">BESTSELLER</div>
                <span class="pc-tag">1440p Gaming</span>
                <h3 class="pc-title">MSTech TITAN</h3>
                <div class="spec-table">
                    <div class="spec-row"><span class="spec-label">CPU</span><span class="spec-value">Intel i7-14700K</span></div>
                    <div class="spec-row"><span class="spec-label">GPU</span><span class="spec-value">RTX 4070 Super</span></div>
                    <div class="spec-row"><span class="spec-label">RAM</span><span class="spec-value">32GB DDR5</span></div>
                    <div class="spec-row"><span class="spec-label">Wydajność</span><span class="spec-value text-neon">160+ FPS 2K</span></div>
                </div>
                <div class="pc-price-row">
                    <div class="pc-price">8 499 <span>zł</span></div>
                    <a href="<?= SITE_URL ?>/produkt/2" class="btn btn-primary btn-small">Konfiguruj</a>
                </div>
            </div>

            <!-- Set 3 -->
            <div class="pc-card" data-aos="zoom-in" data-aos-delay="200">
                <span class="pc-tag">4K Enthusiast</span>
                <h3 class="pc-title">MSTech APEX</h3>
                <div class="spec-table">
                    <div class="spec-row"><span class="spec-label">CPU</span><span class="spec-value">Ryzen 9 7950X</span></div>
                    <div class="spec-row"><span class="spec-label">GPU</span><span class="spec-value">RTX 4090</span></div>
                    <div class="spec-row"><span class="spec-label">RAM</span><span class="spec-value">64GB DDR5</span></div>
                    <div class="spec-row"><span class="spec-label">Wydajność</span><span class="spec-value text-neon">100+ FPS 4K</span></div>
                </div>
                <div class="pc-price-row">
                    <div class="pc-price">18 999 <span>zł</span></div>
                    <a href="<?= SITE_URL ?>/produkt/3" class="btn btn-primary btn-small">Konfiguruj</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benchmarks">
    <div class="container">
        <div class="flex gap-12 items-center flex-wrap md:flex-nowrap">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <span class="section-tag">// DLACZEGO MSTechPC</span>
                <h2 class="section-title">Nie składamy <span style="opacity: 0.5;">losowo.</span><br>Składamy <span class="text-neon">świadomie.</span></h2>
                <p class="text-muted mt-6 mb-8">Każdy komputer przechodzi 24-godzinny stress-test, indywidualne profile zasilania i benchmark wydajności. Dostajesz raport, nie pudło.</p>

                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-4">
                        <div class="service-icon" style="margin-bottom: 0; width: 40px; height: 40px; font-size: 1rem;"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h4 style="font-size: 0.9rem;">Gwarancja 24 miesiące</h4>
                            <p style="font-size: 0.75rem; color: var(--text-muted);">Pełna gwarancja na cały zestaw, nie tylko podzespoły.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="service-icon" style="margin-bottom: 0; width: 40px; height: 40px; font-size: 1rem;"><i class="fas fa-tachometer-alt"></i></div>
                        <div>
                            <h4 style="font-size: 0.9rem;">Stress-test 24h</h4>
                            <p style="font-size: 0.75rem; color: var(--text-muted);">Każdy PC testowany Prime95, FurMark i grami AAA przed wysyłką.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="service-icon" style="margin-bottom: 0; width: 40px; height: 40px; font-size: 1rem;"><i class="fas fa-truck"></i></div>
                        <div>
                            <h4 style="font-size: 0.9rem;">Bezpieczna dostawa</h4>
                            <p style="font-size: 0.75rem; color: var(--text-muted);">Specjalistyczne pakowanie, InPost, Kurier, odbiór osobisty.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2" data-aos="fade-left">
                <div class="benchmark-container">
                    <div class="benchmark-header">
                        <span>LIVE PERFORMANCE</span>
                        <i class="fas fa-chart-line text-neon"></i>
                    </div>

                    <div class="benchmark-row">
                        <div class="benchmark-label"><span>Cyberpunk 2077 RT Ultra</span><span>162 FPS</span></div>
                        <div class="benchmark-bar-bg"><div class="benchmark-bar-fill" style="width: 95%;"></div></div>
                    </div>
                    <div class="benchmark-row">
                        <div class="benchmark-label"><span>Call of Duty Warzone</span><span>210 FPS</span></div>
                        <div class="benchmark-bar-bg"><div class="benchmark-bar-fill" style="width: 98%;"></div></div>
                    </div>
                    <div class="benchmark-row">
                        <div class="benchmark-label"><span>Counter-Strike 2</span><span>580 FPS</span></div>
                        <div class="benchmark-bar-bg"><div class="benchmark-bar-fill" style="width: 100%;"></div></div>
                    </div>
                    <div class="benchmark-row">
                        <div class="benchmark-label"><span>Baldur's Gate 3</span><span>144 FPS</span></div>
                        <div class="benchmark-bar-bg"><div class="benchmark-bar-fill" style="width: 85%;"></div></div>
                    </div>
                    <div class="benchmark-row">
                        <div class="benchmark-label"><span>Forza Horizon 5</span><span>185 FPS</span></div>
                        <div class="benchmark-bar-bg"><div class="benchmark-bar-fill" style="width: 90%;"></div></div>
                    </div>

                    <p style="font-size: 0.6rem; color: var(--text-muted); margin-top: 20px; text-align: center; text-transform: uppercase; letter-spacing: 1px;">Konfiguracja: MSTech TITAN - 1440p Ultra</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.w-full { width: 100%; }
.md\:w-1\/2 { width: 50%; }
.gap-4 { gap: 1rem; }
.gap-6 { gap: 1.5rem; }
.gap-12 { gap: 3rem; }
.mt-3 { margin-top: 0.75rem; }
.mt-4 { margin-top: 1rem; }
.mt-6 { margin-top: 1.5rem; }
.mt-8 { margin-top: 2rem; }
.mb-8 { margin-bottom: 2rem; }
.mb-12 { margin-bottom: 3rem; }
.flex-col { flex-direction: column; }
.justify-center { justify-content: center; }
@media (max-width: 768px) {
    .md\:w-1\/2 { width: 100%; }
    .hero-title { font-size: 3.5rem; }
}
</style>
