    </main>

    <!-- Pre-footer section (based on screenshot) -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">// OPINIE</span>
                <h2 class="section-title">Klienci, <span class="text-neon">którzy wrócili</span></h2>
            </div>
            <div class="card-grid">
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="stars">★★★★★</div>
                    <p>"Składali mi PC z RTX 4080. Zero problemów, świetna komunikacja, pełen raport po stress-teście. Polecam!"</p>
                    <div class="testimonial-author">MAREK K. <span class="author-loc">- CZĘSTOCHOWA</span></div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stars">★★★★★</div>
                    <p>"Obsługują nasze IT od 3 lat. Szybcy, kompetentni, faktura zawsze na czas. Profesjonalna firma."</p>
                    <div class="testimonial-author">STUDIO FILMHANS <span class="author-loc">- KŁOBUCK</span></div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stars">★★★★★</div>
                    <p>"Odzyskali dane z dysku po zalaniu, którego inny serwis nie chciał ruszyć. Cuda się zdarzają."</p>
                    <div class="testimonial-author">ANNA W. <span class="author-loc">- CZĘSTOCHOWA</span></div>
                </div>
            </div>

            <div class="cta-banner mt-12" data-aos="zoom-in">
                <div class="cta-icon">
                    <i class="fas fa-magic text-neon"></i>
                </div>
                <h2 class="cta-title">Gotowy na <span class="text-neon">nowy PC?</span></h2>
                <p>Otwórz konfigurator, wybierz podzespoły, a my złożymy i przetestujemy.<br>Wysyłka w 3-5 dni roboczych.</p>
                <a href="<?= SITE_URL ?>/konfigurator" class="btn btn-primary mt-6">
                    <i class="fas fa-desktop"></i> OTWÓRZ KONFIGURATOR
                </a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <div class="logo mb-6">
                        <img src="<?= asset('assets/img/logo.png') ?>" alt="MSTechPC" onerror="this.src='https://placehold.co/40x40/00f2ff/000000?text=MS'">
                        <span class="logo-text">MSTechPC</span>
                    </div>
                    <p class="footer-desc">
                        Profesjonalny serwis komputerowy, sklep IT i konfigurator komputerów gamingowych dla Częstochowy, Kłobucka i całej Polski.
                    </p>
                    <div class="social-links mt-6">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>SKLEP</h4>
                    <ul>
                        <li><a href="<?= SITE_URL ?>/sklep">Komputery gamingowe</a></li>
                        <li><a href="<?= SITE_URL ?>/sklep?cat=laptopy">Laptopy</a></li>
                        <li><a href="<?= SITE_URL ?>/sklep?cat=podzespoly">Podzespoły PC</a></li>
                        <li><a href="<?= SITE_URL ?>/sklep?cat=peryferia">Peryferia</a></li>
                        <li><a href="<?= SITE_URL ?>/konfigurator">Konfigurator PC</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>SERWIS</h4>
                    <ul>
                        <li><a href="<?= SITE_URL ?>/serwis">Naprawa komputerów</a></li>
                        <li><a href="<?= SITE_URL ?>/serwis">Naprawa laptopów</a></li>
                        <li><a href="<?= SITE_URL ?>/serwis">Odzyskiwanie danych</a></li>
                        <li><a href="<?= SITE_URL ?>/serwis">Obsługa firm IT</a></li>
                        <li><a href="<?= SITE_URL ?>/faq">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>KONTAKT</h4>
                    <ul class="contact-list">
                        <li><i class="fas fa-map-marker-alt"></i> Częstochowa & Kłobuck</li>
                        <li><i class="fas fa-phone-alt"></i> +48 500 000 000</li>
                        <li><i class="fas fa-envelope"></i> kontakt@mstechpc.pl</li>
                    </ul>
                    <p class="hours mt-4">
                        Pon-Pt: 9:00 - 18:00<br>
                        Sob: 10:00 - 14:00
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">
                    &copy; <?= date('Y') ?> MSTechPC. Wszelkie prawa zastrzeżone.
                </div>
                <div class="footer-legal">
                    <a href="<?= SITE_URL ?>/polityka-prywatnosci">Polityka prywatności</a>
                    <a href="<?= SITE_URL ?>/regulamin">Regulamin</a>
                    <a href="<?= SITE_URL ?>/rodo">RODO</a>
                </div>
            </div>
        </div>
    </footer>

    <?php include __DIR__ . "/../layout/cookies.php"; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    document.querySelector('.navbar').classList.add('scrolled');
                } else {
                    document.querySelector('.navbar').classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>
