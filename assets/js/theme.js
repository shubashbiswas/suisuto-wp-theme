/**
 * Sui Suto Theme Core JavaScript
 * 
 * Lightweight, vanilla JavaScript for quiet luxury interactions.
 * Version: 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Sticky Header Elevation on Scroll
    const header = document.querySelector('.site-header');
    if (header) {
        let lastKnownScrollPosition = 0;
        let ticking = false;

        const updateHeaderState = (scrollPos) => {
            if (scrollPos > 30) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        };

        window.addEventListener('scroll', function () {
            lastKnownScrollPosition = window.scrollY;
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    updateHeaderState(lastKnownScrollPosition);
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Initial check on load
        updateHeaderState(window.scrollY);
    }

    // 2. Mobile Navigation Drawer Lock & Accessibility
    const navToggle = document.querySelector('.wp-block-navigation__responsive-container-open');
    const navClose = document.querySelector('.wp-block-navigation__responsive-container-close');
    const navContainer = document.querySelector('.wp-block-navigation__responsive-container');

    if (navToggle && navContainer) {
        navToggle.addEventListener('click', function () {
            document.body.classList.add('mobile-nav-active');
        });
    }

    if (navClose) {
        navClose.addEventListener('click', function () {
            document.body.classList.remove('mobile-nav-active');
        });
    }

    // 3. Newsletter Form Interaction Feedback
    const newsletterForms = document.querySelectorAll('.suisuto-newsletter-form');
    newsletterForms.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const input = form.querySelector('input[type="email"]');
            const feedback = form.querySelector('.suisuto-form-feedback');

            if (input && input.value.trim() !== '') {
                if (feedback) {
                    feedback.textContent = 'Thank you for joining the Sui Suto circle. Your private dispatch invitation will arrive shortly.';
                    feedback.classList.remove('has-error');
                    feedback.classList.add('has-success');
                    feedback.style.display = 'block';
                }
                input.value = '';
            } else if (feedback) {
                feedback.textContent = 'Please enter a valid email address.';
                feedback.classList.add('has-error');
                feedback.classList.remove('has-success');
                feedback.style.display = 'block';
            }
        });
    });

    // 4. Product Gallery Visibility Safeguard
    const productGalleries = document.querySelectorAll('.woocommerce-product-gallery');
    productGalleries.forEach(function (gallery) {
        gallery.style.opacity = '1';
    });

    // 5. Accessible smooth focus indicators for buttons and interactive controls
    document.body.addEventListener('keydown', function (e) {
        if (e.key === 'Tab') {
            document.body.classList.add('user-is-tabbing');
        }
    });

    document.body.addEventListener('mousedown', function () {
        document.body.classList.remove('user-is-tabbing');
    });
});
