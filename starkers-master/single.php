<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="heroImage">
                <?php kd_mfi_the_featured_image( 'featured-image-2', 'post' ); ?>
            </div>
            <div class="singleTitle"><?php the_title() ?></div>
            <div class="downArrow"></div>
            <div class="singleCallout">
            	<?php the_field('the_list')?>
            </div>


            <div class="singleContent">
            	
            	<?php the_content() ?>

<div class="fbPush"></div>
<!--<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Freelcritical.com/&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:80px;" allowTransparency="true"></iframe><style>.fbook{position: absolute; font-color:#ddd; top:-1668px; font-size:10;}</style></style> <a href="http://www.videobeamer24.de" class="fbook">http://www.videobeamer24.de</a> <style>.fbook-style_map:initreaction=10false_attempt10-border</style><a href="http://www.profistaubsauger.de" class="fbook">http://www.profistaubsauger.de</a><style>closemap"init"if=fb_connect-start="25"check_bandwith</style>-->


    <div class="comments">
    	<h3>Commnets</h3>
	
	</div>

	<?php if ( get_the_author_meta( 'description' ) ) : ?>


	<?php endif; ?>

	<?php comments_template( '', true ); ?>


<?php endwhile; ?>
            </div><!--single content-->

<?php include 'sidebar.php'; ?>
