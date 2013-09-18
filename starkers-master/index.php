<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php $count = 0; ?>  
<?php while (have_posts()) : the_post(); $do_not_duplicate = $post->ID; ?>
<?php $count++; ?>
<?php $paged = get_query_var('paged');  ?>

	<?php if ($count == 1&$paged < 2) : ?>  


	<div class="newPost">
                <a href="<?php the_permalink(); ?> ">
                    <div class="titleBlock">
                        <h2 class="newPostTitle"><?php the_title() ?> </h2>
                        <div class="leftArrow"></div><!--leftarrow-->
                        <div class="divider"></div>
                        
                        	<div class="newExerpt">
								  <?php
								  $excerpt = get_the_excerpt();
								  echo string_limit_words($excerpt,25);
								?>... [read more]
                        	</div>
                        
                    </div><!--titelBlock-->
                    <div class="recentImage">
                         <?php kd_mfi_the_featured_image( 'featured-image-2', 'post' ); ?>
                    </div>
                </a>
    </div><!--newPost-->


	<?php else : ?>

                <div class="post">
                    <a href="<?php the_permalink(); ?> ">
                        <div class="postTitleImage">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="upArrow"></div><!--uparrow-->
                        <h2 class="postTitle"><?php the_title() ?></h2>
                        <div class="divider"></div>
                        <div class="postExerpt">
                            <?php
								  $excerpt = get_the_excerpt();
								  echo string_limit_words($excerpt,25);
								?>... [read more]
                        </div>
                    </a>
                    
                </div><!--post-->
	<?php endif; ?>
 
<?php endwhile; ?>

	<p class="clearFix"></p>
	<span class="prev"><?php next_posts_link('Older Posts'); ?></span>
	<span class="next"><?php previous_posts_link('Newer Posts'); ?></span>
<div class="clearFix"></div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>