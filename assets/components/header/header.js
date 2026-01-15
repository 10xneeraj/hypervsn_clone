/**
 * Header Component JS
 * Handles mobile menu toggle, sticky header logic, and mega-menu interactions.
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. HEADER & SCROLL LOGIC ---
    const header = document.querySelector('.header-main');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;
        
        // Add/Remove Sticky Class
        if (currentScroll > 100) {
            header.classList.add('sticky');
            
            // Scroll Direction Logic
            if (currentScroll > lastScrollY) {
                // Scrolling Down -> Hide Nav
                document.body.classList.add('scroll-down');
                document.body.classList.remove('scroll-up');
            } else {
                // Scrolling Up -> Show Nav
                document.body.classList.remove('scroll-down');
                document.body.classList.add('scroll-up');
            }
        } else {
            header.classList.remove('sticky');
            document.body.classList.remove('scroll-down');
            document.body.classList.remove('scroll-up');
        }
        
        lastScrollY = currentScroll;
    });

    // --- 2. MEGA MENU INTERACTIONS ---
    const navItems = document.querySelectorAll('.main-nav_item.has-mega');
    const megaMenus = document.querySelectorAll('.mega-menu');
    let activeMenu = null;

    // Helper: Close all menus
    function closeAllMenus() {
        megaMenus.forEach(m => m.classList.remove('active'));
        navItems.forEach(i => i.classList.remove('active'));
        activeMenu = null;
    }

    navItems.forEach(item => {
        const targetId = item.getAttribute('data-target');
        const targetMenu = document.getElementById(targetId);
        if (!targetMenu) return;

        // Toggle on click
        const clickTarget = item.querySelector('.main-nav_item-button');

        if (clickTarget) {
            clickTarget.addEventListener('click', (e) => {
                // Prevent default only if we are in a mode where hover isn't primary interaction (e.g. tablet? or logic tweak)
                // For now, mirroring original logic which handled clicks to toggle
                e.preventDefault();
                e.stopPropagation();
                
                if (activeMenu === targetMenu) {
                    closeAllMenus();
                } else {
                    closeAllMenus();
                    targetMenu.classList.add('active');
                    item.classList.add('active');
                    activeMenu = targetMenu;
                }
            });
        }
    });

    // Close on click outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.header-main')) {
            closeAllMenus();
        }
    });

    // Close on scroll
    window.addEventListener('scroll', () => {
        if (activeMenu) closeAllMenus();
    }, { passive: true });


    // --- 3. MOBILE MENU TOGGLE ---
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.header-main_nav'); // Targeted specifically
    
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active'); // Ensure CSS supports this for mobile view
            
            // Hamburger Animation
            const spans = menuToggle.querySelectorAll('span');
            if (mainNav.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });
    }
});
