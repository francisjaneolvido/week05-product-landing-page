document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (!menuButton || !mobileMenu) {
        return;
    }

    menuButton.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');

        mobileMenu.classList.toggle('hidden');
        menuButton.setAttribute('aria-expanded', String(!isOpen));

        if (menuIcon) {
            menuIcon.textContent = isOpen ? '☰' : '×';
        }
    });

    mobileLinks.forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');

            if (menuIcon) {
                menuIcon.textContent = '☰';
            }
        });
    });
});