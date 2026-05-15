<section class="service-page">
    <div class="container">
        <div class="section-header text-center">
            <h1>Serwis Komputerowy <span class="text-neon">Częstochowa</span></h1>
            <p>Ekspresowa naprawa laptopów i komputerów stacjonarnych.</p>
        </div>

        <div class="repair-status-box" data-aos="fade-up">
            <h3>Sprawdź status naprawy</h3>
            <form action="/serwis/status" method="GET" class="status-form">
                <input type="text" name="repair_id" placeholder="Numer zgłoszenia (np. RE7782)" required>
                <button type="submit" class="btn btn-primary">Sprawdź</button>
            </form>
        </div>

        <div class="services-detailed-grid">
            <div class="service-item" data-aos="fade-right">
                <i class="fas fa-laptop-medical"></i>
                <h3>Naprawa Laptopów</h3>
                <p>Wymiana matryc, klawiatur, gniazd zasilania. Naprawa płyt głównych po zalaniu. Obsługujemy marki: ASUS, MSI, Lenovo, Dell, HP, Apple MacBook.</p>
            </div>
            <div class="service-item" data-aos="fade-up">
                <i class="fas fa-microchip"></i>
                <h3>Modernizacja PC</h3>
                <p>Twój komputer wolno działa? Przyspieszymy go! Wymiana dysków na SSD NVMe, dołożenie RAM, zmiana procesora i karty graficznej.</p>
            </div>
            <div class="service-item" data-aos="fade-left">
                <i class="fas fa-virus-slash"></i>
                <h3>Odwirusowanie i Soft</h3>
                <p>Usuwanie złośliwego oprogramowania, instalacja Windows 11, optymalizacja systemu pod gry i pracę biurową.</p>
            </div>
        </div>
    </div>
</section>

<style>
.service-page { padding: 80px 0; }
.repair-status-box { background: var(--bg-card); padding: 40px; border-radius: 20px; border: 1px solid var(--neon-blue); max-width: 600px; margin: 40px auto; text-align: center; }
.status-form { display: flex; gap: 10px; margin-top: 20px; }
.status-form input { flex-grow: 1; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: #1a1a1a; color: white; }
.services-detailed-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 60px; }
.service-item { background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.05); }
.service-item i { font-size: 3rem; color: var(--neon-blue); margin-bottom: 20px; }
</style>
