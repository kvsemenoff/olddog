<?php get_header(); ?>
<section class="content">
            <div class="cent">
                
                <?php require_once('sidebar.php'); ?>
      
                <div class="content_frame clearfix">
                    <div class="w100">

                    
                        <?php require_once('search_form.php'); ?>
                       <!--  <div class="search">
                            <form action="#">
                                <input type="text" class="inp_s" value="" placeholder="Поиск по сайту">
                                <button class="btn green">Найти</button>
                            </form>
                        </div> -->
                        


                        

                        
                        <div class="product_detailed clearfix">
                      
                            
                            <div class="description">
                               <h3><?php the_title(); ?></h3>
                               
                               <?php while ( have_posts() ) : the_post(); ?>
							   <?php the_content(); ?>
							   <?php endwhile; // end of the loop. ?>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div><!-- content_frame -->
                
            </div>
        </section><!-- content -->

   
<?php get_footer(); ?>