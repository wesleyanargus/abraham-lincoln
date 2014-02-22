<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package   WordPress
 * @subpackage  Abraham Lincoln
 * @since     Abraham Lincoln 0.1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="row">
          <div class="row content article">
            <div class="col-md-9">
              <div class="relative">
                <div class="article-text">
	                <h1><span><a href="#"><?php the_title(); ?></a><span></h1>
	                <h4><span><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span></h4>
                </div>
              </div>
              <div class="article-text">
                <!--<div class="photo">
                <img src="http://wesleyanargus.com/wp-content/uploads/2014/02/Arora_SenatorTalk2.jpg">
                <small>Trisha Arora/Photo Editor</small>
                </div>-->
                <?php the_content(); ?>
                
					<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
					<h3>About <?php echo get_the_author() ; ?></h3>
					<?php the_author_meta( 'description' ); ?>
					<?php endif; ?>
              </div>
              <div class="article-text">
              	<?php comments_template( '', true ); ?>
              </div>
            </div>
            <div class="col-md-3">
              <?php get_sidebar(); ?>
            </div>
          </div>
      </div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>