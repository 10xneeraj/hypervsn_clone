<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme.
 */

// IDE HELPERS (Delete on Production) - Resolves "Undefined function" errors in VS Code
if (!function_exists('get_header')) { require_once 'wp-stub.php'; }

get_header(); ?>

<main id="main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
