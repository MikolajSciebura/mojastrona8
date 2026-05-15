<div id="cookie-consent" class="cookie-popup">
    <div class="cookie-content">
        <h3>🍪 Nasza strona używa ciasteczek</h3>
        <p>Używamy plików cookies, aby zapewnić Ci najlepsze wrażenia z korzystania z naszej strony. Klikając "Akceptuję", wyrażasz zgodę na używanie wszystkich ciasteczek.</p>
        <div class="cookie-btns">
            <button class="btn btn-outline" onclick="closeCookies()">Ustawienia</button>
            <button class="btn btn-primary" onclick="acceptCookies()">Akceptuję</button>
        </div>
    </div>
</div>

<style>
.cookie-popup {
    position: fixed;
    bottom: 20px;
    right: 20px;
    max-width: 400px;
    background: rgba(18, 18, 18, 0.9);
    backdrop-filter: blur(15px);
    border: 1px solid var(--neon-blue);
    border-radius: 15px;
    padding: 25px;
    z-index: 9999;
    display: none;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}
.cookie-content h3 {
    margin-bottom: 10px;
    font-size: 1.1rem;
}
.cookie-content p {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin-bottom: 20px;
}
.cookie-btns {
    display: flex;
    gap: 10px;
}
</style>

<script>
function acceptCookies() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookie-consent').style.display = 'none';
}

function closeCookies() {
    document.getElementById('cookie-consent').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            document.getElementById('cookie-consent').style.display = 'block';
        }, 2000);
    }
});
</script>
