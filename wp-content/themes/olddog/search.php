
<?php get_header(); ?>

<section class="content">
    <div class="cent">

        <?php require_once('sidebar.php'); ?>

        <div class="content_frame clearfix">
            <div class="w100">

                <?php require_once('search_form.php'); ?>

                <div class="product_detailed clearfix">
                    <div class="description">

                       <h3>Результаты поиска</h3>
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><br>
							<?php endwhile;
						else :
							echo "По Вашему запросу ничего не нвайдено. ";
						endif; ?>	

                    </div>
                </div>
            </div>
        </div><!-- content_frame -->
    </div>
</section><!-- content -->

   
<?php get_footer(); ?>
