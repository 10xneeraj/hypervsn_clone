<?php
/**
 * Hero Section Template Part
 */
?>
<section class="hero-section">
    <div class="hero-bg-video">
        <video autoplay muted loop playsinline poster="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-poster.jpg" id="heroVideo">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>
    </div>
    
    <div class="container hero-content">
        <h1 class="hero-title">
            3D Holographic<br>Displays for <span class="typing-effect"></span><span class="typing-cursor">|</span>
        </h1>
        <p class="hero-subtitle">Revolutionize your audience engagement with Hypervsn.</p>
        <div class="hero-actions">
            <a href="#" class="btn btn-primary btn-lg">Discover More</a>
            <a href="#" class="btn btn-outline btn-lg">Watch Video</a>
        </div>
    </div>
</section>
