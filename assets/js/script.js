/*
    File: assets/js/script.js
    Purpose: Handles all interactive elements for the Hypervsn Clone.
    Functionality:
        - Sticky Header & Scroll Logic
        - Mobile Menu Toggle
        - Mega Menu Interactions
        - Hero Video Handling
        - Business Value (ROI) Section Animations
        - Typing Text Animation
        - Solutions Overview Hover Effects
        - Form Handling (Mock)
*/

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. HEADER & SCROLL LOGIC ---
    // Moved to assets/components/header/header.js
    /*
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
    */

    // --- 2. MEGA MENU INTERACTIONS ---
    // Moved to assets/components/header/header.js
    /*
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
        const btn = item.querySelector('.main-nav_item-button, .main-nav_item-button > span'); 
        // Note: selector adjusted to catch the span if user clicks text directly
        const clickTarget = item.querySelector('.main-nav_item-button');

        if (clickTarget) {
            clickTarget.addEventListener('click', (e) => {
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
    */


    // --- 3. MOBILE MENU TOGGLE ---
    // Moved to assets/components/header/header.js
    /*
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
    */


    // --- 4. BUSINESS VALUE (ROI) ANIMATION ---
    // Moved to assets/components/roi/roi.js
    /*
    const roiSection = document.querySelector('.roi-section');
    if (roiSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounting();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        observer.observe(roiSection);

        function startCounting() {
            const counters = document.querySelectorAll(".value");
            const bars = document.querySelectorAll(".progress span");

            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";
                let count = 0;
                const duration = 2000;
                const increment = target / (duration / 16);

                const updateCounter = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + suffix;
                    }
                };
                updateCounter();
            });

            bars.forEach(bar => {
                const width = bar.getAttribute("data-width");
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        }
    }
    */


    // --- 5. SOLUTIONS OVERVIEW INTERACTIONS ---
    // (Removed: Previous JS interactions replaced by CSS Grid & Bento Layout)



    // --- 6. GENERAL ANIMATIONS (Fade Up) ---
    const fadeObserverOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, fadeObserverOptions);

    const fadeElements = document.querySelectorAll('.fade-up');
    fadeElements.forEach(el => fadeObserver.observe(el));


    // --- 7. TYPING ANIMATION ---
    // Moved to assets/components/hero/hero.js
    /*
    const typingElements = document.querySelectorAll('.typing-effect');
    if (typingElements.length > 0) {
        const words = ["Retail", "Events", "Education", "Automotive", "Gaming", "Healthcare"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeSpeed = 100;

        function type() {
            const currentWord = words[wordIndex];
            const displayText = isDeleting ? currentWord.substring(0, charIndex - 1) : currentWord.substring(0, charIndex + 1);
            
            typingElements.forEach(el => {
                el.textContent = displayText;
            });

            if (!isDeleting && displayText === currentWord) {
                isDeleting = true;
                typeSpeed = 1500; // Pause at end
            } else if (isDeleting && displayText === "") {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 200;
            } else {
                typeSpeed = isDeleting ? 50 : 100;
            }

            charIndex = isDeleting ? charIndex - 1 : charIndex + 1;
            setTimeout(type, typeSpeed);
        }

        type();
    }
    */


    // --- 8. FORM HANDLING (Mock) ---
    // Moved to assets/components/contact/contact.js
    /*
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const msgDiv = document.getElementById('formMessage');
            
            // Check if backend variable exists (WordPress context)
            if (typeof hypervsn_ajax !== 'undefined') {
                const formData = new FormData(form);
                fetch(hypervsn_ajax.theme_uri + '/contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    msgDiv.style.color = 'var(--color-primary)';
                    msgDiv.textContent = data.message;
                    form.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    msgDiv.textContent = 'Submission error (Check console).';
                });
            } else {
                // Static Mock Fallback
                msgDiv.style.color = '#513ccc';
                msgDiv.textContent = 'Thanks for subscribing! (Mock Submission)';
                form.reset();
            }
        });
    }
    */

});
