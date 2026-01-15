<?php
/**
 * Template Name: Solutions Page
 *
 * This is the template that displays the Solutions page.
 */

// IDE HELPERS
if (!function_exists('get_header')) { require_once 'wp-stub.php'; }

get_header(); 
?>

<main class="solutions-content">
    <!-- SOLUTIONS OVERVIEW SECTION -->
    <section class="section solutions-section" id="solutions-overview">
        <div class="container">
            <div class="section-header">
                 <h2 class="section-title">SOLUTIONS OVERVIEW</h2>
                 <p class="section-subtitle">3D Holographic Displays for any industry</p>
            </div>
            <div class="solutions-explorer">
                <div class="solutions-list">
                    <!-- Digital Avatar -->
                    <div class="solution-item active" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/digital-avatar.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-digital-avatar.png" alt=""></div>
                        <div class="sol-info">
                            <h4>Digital Avatar</h4>
                            <p>Digital Avatar solution for any industry</p>
                        </div>
                    </div>
                    <!-- Holographic Human -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/holographic-human.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-holographic-human.png" alt=""></div>
                        <div class="sol-info">
                            <h4>Holographic Human</h4>
                            <p>Life-size 3D holographic human</p>
                        </div>
                    </div>
                    <!-- Lift & Learn -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/lift-learn.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-lift-learn.png" alt=""></div>
                        <div class="sol-info">
                            <h4>Lift & Learn</h4>
                            <p>Interactive product discoveries</p>
                        </div>
                    </div>
                    <!-- SmartV 3D Modeller -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/modeller.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-modeller.png" alt=""></div>
                        <div class="sol-info">
                            <h4>SmartV 3D Modeller</h4>
                            <p>Interactive 3D holographic models</p>
                        </div>
                    </div>
                    <!-- SmartV Wall -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/smartv-wall.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-wall.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN SmartV Wall</h4>
                            <p>Scalable 3D Holographic display</p>
                        </div>
                    </div>
                    <!-- Prime & Edge -->
                     <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/prime-edge.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-prime-edge.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN Prime & Edge</h4>
                            <p>Our new all-in-one solution</p>
                        </div>
                    </div>
                    <!-- Live Streaming -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/live-streaming.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-live-streaming.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN Live Streaming</h4>
                            <p>Broadcast Live Events in Real-time</p>
                        </div>
                    </div>
                    <!-- Catalogue -->
                     <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/catalogue.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-catalogue.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN 3D Catalogue</h4>
                            <p>Controlled 3D products catalogue</p>
                        </div>
                    </div>
                    <!-- Slots -->
                     <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/slots.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-slots.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN Slots</h4>
                            <p>3D Holographic Slot Machine</p>
                        </div>
                    </div>
                     <!-- SmartV Solo -->
                    <div class="solution-item" data-image="<?php echo get_template_directory_uri(); ?>/assets/solutions/smartv-solo.jpg">
                        <div class="sol-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-solo.png" alt=""></div>
                        <div class="sol-info">
                            <h4>HYPERVSN SmartV Solo</h4>
                            <p>Interactive Holographic Display</p>
                        </div>
                    </div>
                </div>

                <div class="solution-preview">
                    <div class="preview-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/digital-avatar.jpg');">
                        <div class="preview-overlay">
                            <h3 class="preview-title-text">Digital Avatar</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
