<?php
/**
 * The template for displaying Author Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Abraham Lincoln
 * @since 		Abraham Lincoln 0.1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
      <div class="row">
          <div class="row content article">
            <div class="col-md-9">
              <div class="relative">
              
                <div class="article-text article-header">
<?php if ( have_posts() ): ?>
                <?php previous_posts_link('<span class="btn btn-argus pull-right">Newer posts &raquo;</span>'); ?>
                <?php next_posts_link('<span class="btn btn-argus pull-right">&laquo; Older posts</span>'); ?>


                <?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h3>About <?php echo get_the_author() ; ?></h3>
				<?php the_author_meta( 'description' ); ?>
				<?php endif; ?>
                <div class="clearfix"></div>
                </div>
              </div>
             
              <div class="article-text">

<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
	<section>
        <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <h4><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></h4>
        <p><?php the_excerpt(); ?></p>
    </section>
<?php endwhile; ?>
              </div>
              <div class="article-text article-header">
                <?php previous_posts_link('<span class="btn btn-argus pull-right">Newer posts &raquo;</span>'); ?>
                <?php next_posts_link('<span class="btn btn-argus pull-right">&laquo; Older posts</span>'); ?>

                <div class="clearfix"></div>
              </div>
<?php else: ?>
					<h2>No posts to display for <?php echo get_the_author() ; ?></h2>	
				</div>
			</div>
<?php endif; ?>
            </div>
            <div class="col-md-3">
            <?php get_sidebar(); ?>
            </div>
          </div>
      </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>