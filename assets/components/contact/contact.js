/**
 * Contact Form Logic
 */

document.addEventListener('DOMContentLoaded', () => {
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
});
