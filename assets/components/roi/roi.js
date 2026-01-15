/**
 * ROI Section Logic
 * Handles counting animations when section comes into view.
 */

document.addEventListener('DOMContentLoaded', () => {
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
});
