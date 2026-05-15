<section class="blog-header">
    <div class="container">
        <h1>Blog <span class="text-neon">Technologiczny</span></h1>
        <p>Wiedza, testy i nowości ze świata hardware.</p>
    </div>
</section>

<section class="blog-posts">
    <div class="container">
        <div class="blog-grid">
            <article class="blog-card" data-aos="fade-up">
                <div class="blog-img">
                    <img src="<?= asset('assets/img/blog-1.jpg') ?>" alt="RTX 5090 News">
                </div>
                <div class="blog-body">
                    <span class="blog-date">12.05.2024</span>
                    <h3>Nadchodzi RTX 5090 - czego możemy się spodziewać?</h3>
                    <p>Analizujemy najnowsze przecieki dotyczące nowej generacji kart od NVIDIA...</p>
                    <a href="<?= SITE_URL ?>/blog/rtx-5090-news" class="text-neon">Czytaj więcej →</a>
                </div>
            </article>
            <!-- More blog posts -->
        </div>
    </div>
</section>

<style>
.blog-header {
    padding: 60px 0;
    text-align: center;
}
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    padding: 40px 0;
}
.blog-card {
    background: var(--bg-card);
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
}
.blog-body {
    padding: 25px;
}
.blog-date {
    font-size: 0.8rem;
    color: var(--text-muted);
}
.blog-body h3 {
    margin: 10px 0;
}
</style>
