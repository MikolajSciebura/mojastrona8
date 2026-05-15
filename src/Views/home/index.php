<section class="hero">
    <div class="container">
        <div class="hero-content" data-aos="fade-right">
            <h1 class="hero-title">Zdefiniuj Nową Erę <span class="text-neon">Wydajności</span></h1>
            <p class="hero-subtitle">Tworzymy ekstremalne maszyny gamingowe i profesjonalne stacje robocze, które przekraczają granice możliwości.</p>
            <div class="hero-btns">
                <a href="<?= SITE_URL ?>/sklep" class="btn btn-primary">Zobacz Komputery</a>
                <a href="<?= SITE_URL ?>/konfigurator" class="btn btn-outline">Zbuduj Własny PC</a>
            </div>
        </div>
        <div class="hero-image" data-aos="fade-left">
            <img src="<?= asset('assets/img/hero-pc.png') ?>" alt="Premium Gaming PC">
            <div class="glass-card floating">
                <div class="card-stat">
                    <span class="stat-value">300+</span>
                    <span class="stat-label">FPS w 4K</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-seo">
    <div class="container">
        <div class="about-grid">
            <div class="about-text" data-aos="fade-up">
                <h2>Lider Technologii w <span class="text-neon">Częstochowie</span></h2>
                <p>MSTechPC to nie tylko sklep komputerowy. To centrum innowacji, gdzie pasja do hardware'u spotyka się z wieloletnim doświadczeniem. Od lat dostarczamy najwyższej klasy <strong>komputery gamingowe w Częstochowie</strong>, budując zaufanie wśród tysięcy zadowolonych klientów z całego województwa śląskiego.</p>
                <p>Specjalizujemy się w <strong>składaniu komputerów na zamówienie</strong>, optymalizacji jednostek pod kątem AI, montażu wideo oraz streamingu. Nasze zestawy RTX Częstochowa to synonim wydajności i bezkompromisowej jakości.</p>
                <div class="stats-row">
                    <div class="mini-stat">
                        <span class="text-neon">10+</span>
                        <p>Lat doświadczenia</p>
                    </div>
                    <div class="mini-stat">
                        <span class="text-neon">5000+</span>
                        <p>Złożonych PC</p>
                    </div>
                </div>
            </div>
            <div class="about-services" data-aos="fade-left">
                <div class="service-tag-card">
                    <h3>Nasze Specjalizacje:</h3>
                    <ul>
                        <li><i class="fas fa-check text-neon"></i> Serwis komputerowy Częstochowa i Kłobuck</li>
                        <li><i class="fas fa-check text-neon"></i> Naprawa laptopów wszystkich marek</li>
                        <li><i class="fas fa-check text-neon"></i> Modernizacja starych komputerów</li>
                        <li><i class="fas fa-check text-neon"></i> Profesjonalne stacje robocze AI/CGI</li>
                        <li><i class="fas fa-check text-neon"></i> Czyszczenie i wymiana past termo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gaming-section">
    <div class="container">
        <h2 class="text-center" data-aos="fade-up">Najlepsze <span class="text-neon">Komputery Gamingowe</span> Śląsk</h2>
        <div class="gaming-content">
            <div class="gaming-card" data-aos="flip-left">
                <div class="card-inner">
                    <h3>Seria MSTech Venom</h3>
                    <p>Zdominuj rankingi dzięki mocy NVIDIA RTX 4090 i procesorom Intel Core i9. Każdy zestaw testujemy w 10 popularnych grach.</p>
                </div>
            </div>
            <div class="gaming-card" data-aos="flip-right">
                <div class="card-inner">
                    <h3>Seria MSTech Ghost</h3>
                    <p>Idealna równowaga między ceną a wydajnością. Komputery RTX Częstochowa dla graczy 1440p.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.about-seo { padding: 100px 0; background: rgba(255,255,255,0.02); }
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.mini-stat { margin-top: 30px; margin-right: 40px; display: inline-block; }
.mini-stat span { font-size: 2.5rem; font-weight: 800; display: block; }
.service-tag-card { background: var(--bg-card); padding: 40px; border-radius: 20px; border: 1px solid var(--neon-blue); }
.service-tag-card ul li { margin-bottom: 15px; }
.gaming-section { padding: 100px 0; }
.gaming-content { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 50px; }
.gaming-card { background: linear-gradient(45deg, #121212, #1a1a1a); border-radius: 20px; padding: 50px; position: relative; overflow: hidden; border: 1px solid rgba(255,255,255,0.05); }
.gaming-card:hover { border-color: var(--neon-purple); }
</style>

<section class="features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-title">Dlaczego <span class="text-neon">MSTechPC</span>?</h2>
            <p>Jakość, której możesz zaufać. Wydajność, której potrzebujesz.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-microchip"></i>
                <h3>Najlepsze Części</h3>
                <p>Używamy tylko markowych podzespołów od topowych producentów.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-tools"></i>
                <h3>Precyzyjny Montaż</h3>
                <p>Każdy komputer jest składany z pasją i dbałością o cable management.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-delay="300">
                <i class="fas fa-shield-alt"></i>
                <h3>3 Lata Gwarancji</h3>
                <p>Zapewniamy pełne wsparcie i gwarancję na nasze zestawy.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in" data-aos-delay="400">
                <i class="fas fa-rocket"></i>
                <h3>Ekspresowa Wysyłka</h3>
                <p>Twój nowy komputer dotrze do Ciebie bezpiecznie i szybko.</p>
            </div>
        </div>
    </div>
</section>
