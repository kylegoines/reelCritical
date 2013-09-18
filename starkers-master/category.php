<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>

<?php while ( have_posts() ) : the_post(); ?>
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
<?php endwhile; ?>

<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>