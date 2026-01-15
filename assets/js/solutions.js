document.addEventListener('DOMContentLoaded', () => {
    const solutionItems = document.querySelectorAll('.solution-item');
    const previewCard = document.getElementById('previewCard');
    const previewTitle = document.getElementById('previewTitle');

    solutionItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Remove active class from all
            solutionItems.forEach(i => i.classList.remove('active'));
            
            // Add active to current
            item.classList.add('active');

            // Update preview
            const newImage = item.getAttribute('data-image');
            const newTitle = item.querySelector('h4').textContent;

            if (previewCard) {
                previewCard.style.backgroundImage = `url('${newImage}')`;
            }
            if (previewTitle) {
                previewTitle.textContent = newTitle;
                
                // Add a small animation effect
                previewTitle.style.opacity = '0';
                setTimeout(() => {
                    previewTitle.style.opacity = '1';
                }, 50);
            }
        });
    });
});
