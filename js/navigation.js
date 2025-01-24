document.addEventListener('DOMContentLoaded', function() {
    // Category menu toggle
    const categoryToggles = document.querySelectorAll('.category-toggle');
    const categoryMenus = document.querySelectorAll('.category-submenu');

    categoryToggles.forEach((toggle, index) => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            
            // Close all other menus
            categoryToggles.forEach((otherToggle, otherIndex) => {
                if (index !== otherIndex) {
                    otherToggle.setAttribute('aria-expanded', 'false');
                    categoryMenus[otherIndex].classList.add('hidden');
                }
            });

            // Toggle current menu
            toggle.setAttribute('aria-expanded', !isExpanded);
            categoryMenus[index].classList.toggle('hidden');
        });
    });

    // Close menus when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.category-toggle') && !e.target.closest('.category-submenu')) {
            categoryToggles.forEach((toggle, index) => {
                toggle.setAttribute('aria-expanded', 'false');
                categoryMenus[index].classList.add('hidden');
            });
        }
    });

    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    }
}); 