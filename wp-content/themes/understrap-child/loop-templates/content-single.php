<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title mb-4">', '</h1>' ); ?>

	</header><!-- .entry-header -->

    <img src="<?php echo get_the_post_thumbnail_url( $post ); ?>" class="img-fluid">

	<div class="entry-content">

        <div class="row mt-4">
            <div class="col-6 col-lg-4 mb-2">
                <h3>Price</H3>
                <p class="text-success fw-bold fs-4 mb-0"><?php echo '$' . number_format(get_field('price')); ?></p>
            </div>
            <div class="col-6 col-lg-4 mb-2">
                <h3>Area</H3>
                <p class="text-dark fw-bold fs-4 mb-0"><?php echo get_field('square_footage') . ' square foot (ft²)'; ?></p>
            </div>
        </div>
        
        <?php 
        
        $terms = get_the_terms( $post->ID, 'property_type' );
        
        foreach($terms as $type): ?>

            <div class="badge text-bg-dark mb-2"><?php echo $type->name; ?></div>

        <?php endforeach; ?>

		<div class="text-secondary">
            <?php the_content(); ?>
        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
