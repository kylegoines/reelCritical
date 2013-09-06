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

<div class="clearfix"></div>

            <div class="about">
                <div class="info">
                    <h3>hi im danielle</h3>
                </div>
                <div class="leftArrow"></div>
                <div class="divider"></div>
                <ul class="social">
                    <li><a class="linkedin" href="http://www.linkedin.com/">linedin</a></li>
                    <li><a class="facebook" href="https://www.facebook.com/">facebook</a></li>
                    <li><a class="twitter" href="https://twitter.com/">twitter</a></li>
                </ul>
                <p>
                   Whether you call them movies, films, or pictures–I love them all. I love to watch them, analyze them, write them, and talk about them with close friends and complete strangers. 
Each movie holds a bit of truth, whether profound or incidental. In this blog, I’ll explore some of those truths and try to offer a fresh perspective on old and new movies, alike.<br><br>
This blog will contain criticism, but I want to be clear: I respect the people who make movies, even if I don’t particularly like the movies they make. I developed this perspective at Emerson College where I graduated with a degree in Writing for Film & TV.
                </p>


            </div><!--about-->

            <div class="aboutPic">
                <img src="<?php bloginfo('template_directory'); ?>/img/aboutpic2.jpg" alt="me"/>
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>