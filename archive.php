<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Abraham Lincoln
 * @since 		Abraham Lincoln 0.1.0
 */
?>
<?php get_header(); ?>
      <div class="row">
          <div class="row content article">
            <div class="col-md-9">
              <div class="relative">
              
                <div class="article-text article-header">
<?php if ( have_posts() ): ?>
                <?php previous_posts_link('<span class="btn btn-argus pull-right">Newer posts &raquo;</span>'); ?>
                <?php next_posts_link('<span class="btn btn-argus pull-right">&laquo; Older posts</span>'); ?>

                <?php if ( is_day() ) : ?>
				<h2>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
				<?php elseif ( is_month() ) : ?>
				<h2>Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>	
				<?php elseif ( is_year() ) : ?>
				<h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>								
				<?php else : ?>
				<h2>Archive</h2>	
				<?php endif; ?>
                <div class="clearfix"></div>
                </div>
              </div>
             
              <div class="article-text">

<?php while ( have_posts() ) : the_post(); ?>
	<section>
        <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <h4><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_meta('nickname'); ?>. <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></h4>
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
					<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
				</div>
			</div>
<?php endif; ?>
            </div>
            <div class="col-md-3">
            <?php get_sidebar(); ?>
            </div>
          </div>
      </div>

<?php get_footer(); ?>
