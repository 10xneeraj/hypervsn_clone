/**
 * Hero Section Logic
 * Handles the typing animation for the hero title.
 */

document.addEventListener('DOMContentLoaded', () => {
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
});
