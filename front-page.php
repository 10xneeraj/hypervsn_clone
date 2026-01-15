<?php
/**
 * The template for displaying the front page
 * 
 * Used for the 'Home' page.
 */

// IDE HELPERS (Delete on Production) - Resolves "Undefined function" errors in VS Code
if (!function_exists('get_header')) { require_once 'wp-stub.php'; }

get_header(); 
?>

<main id="main-content">

    <?php 
    /**
     * Component: Hero
     * File: template-parts/section-hero.php
     */
    get_template_part('template-parts/section', 'hero'); 
    ?>

    <?php 
    /**
     * Component: Trusted Logos
     * File: template-parts/section-trusted.php
     */
    get_template_part('template-parts/section', 'trusted'); 
    ?>

    <?php 
    /**
     * Component: ROI/Business Value
     * File: template-parts/section-roi.php
     */
    get_template_part('template-parts/section', 'roi'); 
    ?>

    <?php 
    /**
     * Component: Solutions
     * File: template-parts/section-solutions.php
     */
    get_template_part('template-parts/section', 'solutions'); 
    ?>

    <?php 
    /**
     * Component: Technology
     * File: template-parts/section-technology.php
     */
    get_template_part('template-parts/section', 'technology'); 
    ?>

    <?php 
    /**
     * Component: Use Cases Slider
     * File: template-parts/section-use-cases.php
     */
    get_template_part('template-parts/section', 'use-cases'); 
    ?>

    <?php 
    /**
     * Component: CTA
     * File: template-parts/section-cta.php
     */
    get_template_part('template-parts/section', 'cta'); 
    ?>

</main>

<?php get_footer(); ?>
