<?php
/**
 * The template for displaying blog-category-slider 
 *
 * display slider
 *
 * @package colorist
 */

$colorist_blog_slider_cat = get_theme_mod( 'blog_slider_cat', '' );
$colorist_blog_slider_count = get_theme_mod( 'blog_slider_count', 5 );
$colorist_blog_slider_posts = array(
	'cat' => absint($colorist_blog_slider_cat),
	'posts_per_page' => absint($colorist_blog_slider_count)
);

	if ($colorist_blog_slider_cat) {
		$colorist_query = new WP_Query($colorist_blog_slider_posts);
			if( $colorist_query->have_posts()) : ?>
				<div class="flexslider">
					<ul class="slides">
						<?php while($colorist_query->have_posts()) :
								$colorist_query->the_post();
								if( has_post_thumbnail() ) : ?>
								    <li>
								    	<div class="flex-image">
								    		<?php the_post_thumbnail('full'); ?>
								    	</div>
								    	<?php $content = get_the_content();
								    	if( !empty($content) ) : ?>
									    	<div class="flex-caption">
									    		<?php the_content(); ?>
									    	</div>
									    <?php endif; ?>
								    </li>
								<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<?php  
				$colorist_query = null;
				wp_reset_postdata();	
	}elseif( current_user_can('manage_options') ) {	?>	
		<div class="flexslider">  
			<ul class="slides">	          
				<li>   	
					<div class="flex-image">
						<?php echo '<img src="' . get_template_directory_uri() . '/images/slider.jpg" alt="" >';?>	
					</div>
					<?php	
					$slide_description = sprintf('<h1> %1$s </h1><p>%2$s</p><p><a href="%3$s" target="_blank"> %4$s</a></p>',__('Slider Setting','colorist'), __('You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ). Go to Customizer and click colorist Options => Blog => Blog Page and select Blog Slider Post Category and No.of Sliders.','colorist'), esc_url(admin_url('customize.php')) , __('Customizer','colorist'));?>
					<div class="flex-caption"> <?php echo $slide_description;?></div>
				</li>
			</ul>
		</div><!-- flex-slider end -->	<?php
	}