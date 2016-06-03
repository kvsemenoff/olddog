<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<section class="content">
    <div class="cent">

     				<?php get_sidebar(); ?>
     				<div class="content_frame clearfix">
                    <div class="w100">
                    <?php get_template_part('search_form'); ?>
					<?php get_template_part('promo'); ?>
					<?php add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
					function jk_woocommerce_breadcrumbs() {
					    return array(
					            'delimiter'   => '',
					            'wrap_before' => '<div class="breadcrumbs"><ul>',
					            'wrap_after'  => '</ul></div>',
					            'before'      => '<li><a href="#">',
					            'after'       => '</a></li>',
					            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
					        );
					} ?>
					<?php
						/**
						 * woocommerce_before_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
					?>

					
						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php
						/**
						 * woocommerce_after_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						//do_action( 'woocommerce_after_main_content' );
					?>

					<?php echo do_shortcode('[product_categories_list]'); ?>
					</div></div>
	</div>
</section>				
<?php get_footer( 'shop' ); ?>

