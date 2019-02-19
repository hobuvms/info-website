<?php 
/*
Template Name: Page
*/
get_header(); ?>

	<div class="container">
            
            <div class="row">
                
                <h1 style="text-align: center;"><?php echo get_the_title(); ?></h1>
            
                <div class="col-sm-12" style="margin:20px 0;">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
        </div>
<?php get_footer(); ?>