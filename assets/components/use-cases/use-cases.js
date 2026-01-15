/**
 * Use Cases JS: Auto-centering Slider with Pause
 * Logic: Move right-to-left, stop at center for 2s, repeat.
 */

document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.slider-track');
    const viewport = document.querySelector('.slider-viewport');
    let cards = Array.from(document.querySelectorAll('.use-case-card'));

    if (!track || !viewport || cards.length === 0) return;

    // Configuration
    const CARD_WIDTH = 500; 
    const GAP = 30;
    const PAUSE_DURATION = 2000; // 2 seconds
    const TRANSITION_DURATION = 600; // Matches CSS

    let currentIndex = 0;
    let autoPlayTimer;

    // --- 1. SETUP INFINITE LOOP LOGIC ---
    // Clone enough items to fill the screen on both sides to allow seamless looping
    // For a simple right-to-left flow, we just need to append clones to the end 
    // and when we reach them, snap back.
    
    // Simpler approach: Real "Endless" loop often involves moving the first item to the last
    // after animation completes. This maintains the DOM size.
    
    // Initial centering
    function updatePositions() {
        const viewportWidth = viewport.offsetWidth;
        const totalCardWidth = CARD_WIDTH + GAP;
        
        // We want the 'currentIndex' card to be exactly in the middle
        // Center position = (Viewport / 2) - (Card / 2)
        const centerOffset = (viewportWidth / 2) - (CARD_WIDTH / 2);
        
        // Calculate translateX
        // Base shift = currentIndex * totalCardWidth
        const translateX = centerOffset - (currentIndex * totalCardWidth);
        
        track.style.transform = `translateX(${translateX}px)`;
        
        // Update Active Class
        cards.forEach((card, index) => {
            if (index === currentIndex) {
                card.classList.add('active');
                // Play video if active
                const vid = card.querySelector('video');
                if (vid) vid.play().catch(()=>{});
            } else {
                card.classList.remove('active');
                 // Pause others
                 const vid = card.querySelector('video');
                 if (vid) {
                     vid.pause();
                     vid.currentTime = 0;
                 }
            }
        });
    }

    // --- 2. MOVE NEXT LOGIC ---
    function moveNext() {
        currentIndex++;
        
        // Transition
        track.style.transition = `transform ${TRANSITION_DURATION}ms cubic-bezier(0.25, 1, 0.5, 1)`;
        updatePositions();

        // CHECK LOOP:
        // If we have reached the last REAL item, we need to prepare the "snap back" 
        // logic. 
        // BUT, standard translation has limits. 
        // BETTER STRATEGY: "Append & Shift".
        // Instead of moving an index, we realistically want to physically move the first DOM element 
        // to the end of the list after it slides out of view.
    }
    
    // --- 3. REVISED STRATEGY: APPEND & SHIFT ---
    // This allows truly infinite scrolling without calculating massive offsets.
    
    // Reset index to "1" (virtually), but actually we just operate on DOM order.
    // We will center the 2nd item (index 1) initially if we want pre-buffer, 
    // or just center index 0 and handle it.
    
    // Let's stick to the "Index" approach with clones for smoother visual snapping if the list is long enough.
    // If list is short (4 items), we need multiple clones.
    
    // Create Clones to create a buffer
    // Clone all items and append
    const originalLength = cards.length;
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });
    // Re-query cards
    cards = Array.from(document.querySelectorAll('.use-case-card'));
    
    // Start at index 0
    updatePositions();
    
    function loop() {
        // Wait 2 seconds
        autoPlayTimer = setTimeout(() => {
            currentIndex++;
            track.style.transition = `transform ${TRANSITION_DURATION}ms cubic-bezier(0.25, 1, 0.5, 1)`;
            updatePositions();
            
            // Loop Logic
            // If we reach the start of the cloned set (index == originalLength)
            if (currentIndex >= originalLength) {
                // Wait for transition to finish, then SNAP back to index 0
                setTimeout(() => {
                    track.style.transition = 'none'; // Instant snap
                    currentIndex = 0; // Reset to start of original set (which looks identical to start of clone set)
                    updatePositions();
                }, TRANSITION_DURATION);
            }
            
            // Continue loop
            loop(); // Recursive call
            
        }, PAUSE_DURATION + TRANSITION_DURATION); // Wait for Pause + Time taken to slide
    }

    // Initialize
    // Wait a bit for layout
    setTimeout(loop, 100);
    
    // Responsive update
    window.addEventListener('resize', () => {
        track.style.transition = 'none';
        updatePositions();
    });
});
