

<?php
/*
Template Name: Home*/
get_header(); ?>

                    
                    
                    

			<?php 
                        
                         if (is_blog()) { 
                             
                             ?>
                    <div class="container home">
                            <div class="row">
                            <div class="col-sm-12 text-right">
                            <?php 
                             /* Start the Loop */
                                while ( have_posts() ) :
                                        the_post();

                                        get_template_part( 'template-parts/content/content');

                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) {
                                                comments_template();
                                        }

                                endwhile; // End of the loop.
                                
                                ?>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                    </div>
                            <?php    
                         }else{
                             ?>
 <div class="row">
                                    <div class="col-sm-12">
                                        <?php
                             if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
                                        
                                       
  
				endwhile; endif; 
                                
                                ?>
                                        </div> <!-- /.col -->
                            </div> <!-- /.row -->
                                        <?php
                         }
                        
				
			?>

		
<?php get_footer(); ?>