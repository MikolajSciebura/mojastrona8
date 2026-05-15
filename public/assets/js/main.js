document.addEventListener('DOMContentLoaded', () => {
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.padding = '10px 0';
            navbar.style.background = 'rgba(10, 10, 10, 0.95)';
        } else {
            navbar.style.padding = '15px 0';
            navbar.style.background = 'rgba(10, 10, 10, 0.8)';
        }
    });

    // Mobile Menu Toggle (Simplified)
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav-links');

    if (toggle) {
        toggle.addEventListener('click', () => {
            // In a real app, we'd show a full mobile overlay
            alert('Mobile menu feature coming soon!');
        });
    }

    // Add to cart AJAX
    const addToCartBtns = document.querySelectorAll('.add-to-cart');
    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', async (e) => {
            const productId = btn.getAttribute('data-id');
            const formData = new FormData();
            formData.append('product_id', productId);

            try {
                const response = await fetch('/koszyk/dodaj', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();

                if (result.success) {
                    const icon = btn.querySelector('i');
                    icon.classList.remove('fa-shopping-cart');
                    icon.classList.add('fa-check');

                    document.querySelector('.cart-count').innerText = result.cart_count;

                    setTimeout(() => {
                        icon.classList.remove('fa-check');
                        icon.classList.add('fa-shopping-cart');
                    }, 2000);
                }
            } catch (error) {
                console.error('Error adding to cart:', error);
            }
        });
    });
});
