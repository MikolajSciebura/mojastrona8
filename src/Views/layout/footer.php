    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <a href="/" class="logo"><span class="text-neon">MS</span>TechPC</a>
                    <p>Twój partner w świecie technologii. Budujemy komputery marzeń dla graczy i profesjonalistów.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Sklep</h4>
                    <ul>
                        <li><a href="/kategoria/komputery-gamingowe">Komputery Gamingowe</a></li>
                        <li><a href="/kategoria/laptopy">Laptopy</a></li>
                        <li><a href="/konfigurator">Konfigurator PC</a></li>
                        <li><a href="/serwis">Serwis i Naprawa</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Informacje</h4>
                    <ul>
                        <li><a href="/o-nas">O nas</a></li>
                        <li><a href="/blog">Blog Technologiczny</a></li>
                        <li><a href="/regulamin">Regulamin</a></li>
                        <li><a href="/polityka-prywatnosci">Polityka Prywatności</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Kontakt</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Al. Najświętszej Maryi Panny, Częstochowa</p>
                    <p><i class="fas fa-phone"></i> +48 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> kontakt@mstechpc.pl</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> MSTechPC. Wszystkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>

    <?php include __DIR__ . "/../layout/cookies.php"; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>
