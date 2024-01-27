<?php 
/* Template Name: Property Template */ 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

            <?php
                while ( have_posts() ) {
                    the_post();
                    the_title(
                        '<header class="entry-header"><h1 class="entry-title display-2 fw-semibold">',
                        '</h1></header><!-- .entry-header -->'
                    );
                }
            ?>

                <?php 
                $terms = get_terms([
                    'taxonomy' => 'property_type',
                    'orderby' => 'term_id', 
                    'order' => 'ASC',
                ]);

                foreach($terms as $term): ?>
                    
                    <h2 class="my-4 display-6 fw-semibold"><?php echo $term->name; ?></h2>

                    <?php $properties = get_posts([

                        'post_type' => 'property', 
                        'tax_query' => [
                            [
                                'taxonomy' => 'property_type',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ]
                        ],
                        'orderby' => 'meta_value_num', 
                        'meta_key' => 'price',
                        'order' => 'ASC', 

                    ]); ?>

                    <div class="row"> 

                        <?php foreach($properties as $property): ?>

                                <div class="col-md-6 col-lg-4 mb-4">
                                    <a href="<?php echo get_permalink($property); ?>" class="text-decoration-none">
                                        <div class="card">
                                            <img src="<?php echo get_the_post_thumbnail_url($property); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-black"><?php echo $property->post_title; ?></h5>
                                                <p class="card-text text-success fw-bold"><?php echo '$' . number_format($property->price); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                        <?php endforeach; ?>

                    </div>

                <?php endforeach; ?>

			</main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();

?>