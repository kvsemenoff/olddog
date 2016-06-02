<?php get_header(); ?>
        
        <section class="content">
            <div class="cent">
            <?php get_sidebar(); ?>
                
                <div class="content_frame clearfix">
                    <div class="w100">
                        

                        <?php require_once('search_form.php'); ?>
                        <?php require_once('promo.php'); ?>
                        
                        <div class="categories">
                            <ul>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat1.jpg" alt=""><span>Удилища</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat2.jpg" alt=""><span>Катушки</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat3.jpg" alt=""><span>Приманки</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat4.jpg" alt=""><span>Леска</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat5.jpg" alt=""><span>Аксессуары</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat6.jpg" alt=""><span>Электроника</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat7.jpg" alt=""><span>Одежда, обувь</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat8.jpg" alt=""><span>Оснастка</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat9.jpg" alt=""><span>Туризм</span></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cat10.jpg" alt=""><span>Лодки, моторы</span></a></li>
                            </ul>
                        </div>
                        
                        <div class="manufacturers clearfix">
                            <h3>Производители</h3>
                            <a href="#" class="btn">Все производители</a>
                            <div class="owl-carousel">
                                <?php wp_reset_query(); ?>
                                <?php $wp_query = new WP_Query(array(
                                       'cat' => '9'
                                        )); ?>
                                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <div>
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                        
                        <div class="video_reviews">
                            <h3><a href="#">Видеообзоры</a></h3>
                            <ul>
                                <?php wp_reset_query(); ?>
                                <?php $wp_query = new WP_Query(array(
                                       'cat' => '10'
                                        )); ?>
                                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <li>
                                    <?php the_post_thumbnail(); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php endwhile;?>
                            </ul>
                        </div>
                        
                        <div class="articles">
                            <h3><a href="#">Статьи и информация</a></h3>
                            <?php
                                 wp_reset_query();
                                 $wp_query = new WP_Query(array(
                                   'cat' => '8'
                                    ));
                                 
                                    while ($wp_query->have_posts()) : $wp_query->the_post();

                                ?>
                            <?php if(get_field('на_главной') == 'да'){ ?>    
                            <div class="art_large">
                            
                                <?php the_post_thumbnail(); ?>
                                <h4><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h4>
                                <?php the_content(); ?> 
                            
                            
                            </div>
                            <?php } ?>
                            <?php endwhile;?>
                            
                            <div class="art_small">

                                <?php
                                 wp_reset_query();
                                 $wp_query = new WP_Query(array(
                                   'cat' => '8'
                                    ));
                                 
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                ?>
                                <?php if(get_field('на_главной') != 'да'){ ?>
                                <div class="item">
                                    <?php the_post_thumbnail(); ?>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <?php the_content(); ?>
                                </div>
                                <?php } ?>
                                <?php endwhile;?>
                            </div>  
                        </div>
                        
    
                </div><!-- content_frame -->
                </div>
            </div>
        </section><!-- content -->

 <?php get_footer(); ?>