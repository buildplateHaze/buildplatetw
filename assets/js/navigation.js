document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
            mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
            
            if (!isExpanded) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('mobile-menu-enter');
                requestAnimationFrame(() => {
                    mobileMenu.classList.add('mobile-menu-enter-active');
                });
            } else {
                mobileMenu.classList.add('mobile-menu-exit');
                mobileMenu.addEventListener('transitionend', function handler() {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('mobile-menu-exit');
                    mobileMenu.removeEventListener('transitionend', handler);
                });
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.add('hidden');
            }
        });
    }

    const categoriesToggle = document.getElementById('categories-toggle');
    const categoriesMenu = document.getElementById('categories-menu');

    if (categoriesToggle && categoriesMenu) {
        categoriesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isExpanded = categoriesToggle.getAttribute('aria-expanded') === 'true';
            
            // Toggle aria-expanded
            categoriesToggle.setAttribute('aria-expanded', !isExpanded);
            
            // Toggle menu visibility
            categoriesMenu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!categoriesToggle.contains(event.target) && !categoriesMenu.contains(event.target)) {
                categoriesToggle.setAttribute('aria-expanded', 'false');
                categoriesMenu.classList.add('hidden');
            }
        });
    }
}); 