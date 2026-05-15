    </main>
    <footer class="footer">
        <div class="container text-center">
            <div class="footer-top">
                <div class="footer-logo">
                    <i class="fas fa-map-marker-alt text-neon" style="font-size: 2rem;"></i>
                    <h2 class="section-title mt-3">Lokalnie. <span class="text-neon">Częstochowa & Kłobuck.</span></h2>
                    <p class="mt-4" style="max-width: 600px; margin: 0 auto; color: var(--text-muted);">
                        Naprawa komputera, laptopa lub konsoli? Przyjmujemy sprzęt osobiście, oferujemy dojazd do firm i wysyłkę kurierem z całej Polski.
                    </p>
                    <div class="flex justify-center gap-4 mt-8">
                        <a href="<?= SITE_URL ?>/serwis" class="btn btn-primary"><i class="fas fa-tools"></i> Zgłoś naprawę</a>
                        <a href="<?= SITE_URL ?>/kontakt" class="btn btn-outline">Kontakt</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> MSTechPC - Profesjonalny Serwis i Sklep Komputerowy. Realizacja Premium.</p>
            </div>
        </div>
    </footer>

    <?php include __DIR__ . "/../layout/cookies.php"; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>
