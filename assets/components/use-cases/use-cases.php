<?php
/**
 * Use Cases Section - PHP Component
 */
?>
<section class="use-cases-section fade-up">
    <div class="container full-width-container">
        <!-- Section Header -->
        <div class="use-cases-header">
            <span class="section-label-center">HYPERVSN USE CASES</span>
            <h2 class="section-title-center">View HYPERVSN in Action</h2>
            <p class="section-desc-center">See how HYPERVSN is changing digital signage worldwide. Any application. Any industry. Any business need.</p>
        </div>

        <!-- Content Grid -->
        <!-- Floating Interactive Comments (Overlay) -->
        <div class="feedback-bubble yellow bubble-1 fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/use-cases/avatar1.png" alt="User" class="bubble-avatar">
            <span>👍 This is the future of retail displays!</span>
        </div>

        <div class="feedback-bubble purple bubble-2 fade-up" style="transition-delay: 0.2s;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/use-cases/avatar2.png" alt="User" class="bubble-avatar">
            <span>It’s really amazing!</span>
        </div>

        <!-- Marquee Container -->
        <div class="marquee-wrapper">
            <div class="marquee-track">
                <?php 
                $cases = [
                    ['cat' => 'RETAIL', 'title' => 'Nike Instore Activation', 'video' => 'nike-video.mp4', 'poster' => 'digital-avatar.jpg'],
                    ['cat' => 'EVENTS', 'title' => 'Tech Launch 2025', 'video' => 'hero-video.mp4', 'poster' => 'holographic-human.jpg'],
                    ['cat' => 'CASINO', 'title' => 'Interactive Slots', 'video' => 'nike-video.mp4', 'poster' => 'smartv-slots.jpg'],
                    ['cat' => 'ENTERTAINMENT', 'title' => 'Live Concert Hologram', 'video' => 'hero-video.mp4', 'poster' => 'smartv-wall.jpg'],
                ];
                
                // Render loop twice for infinite scroll
                for ($k=0; $k<2; $k++) {
                    foreach ($cases as $case) {
                        ?>
                        <div class="use-case-card">
                            <div class="video-wrapper">
                                <video muted loop playsinline poster="<?php echo get_template_directory_uri(); ?>/assets/products/<?php echo $case['poster']; ?>">
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/use-cases/<?php echo $case['video']; ?>" type="video/mp4">
                                </video>
                                <div class="play-indicator"></div>
                            </div>
                            <div class="case-info">
                                <span class="case-category"><?php echo $case['cat']; ?></span>
                                <h4><?php echo $case['title']; ?></h4>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
