<?php
/**
 * Search results page
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
              
                <div class="article-text">
<?php if ( have_posts() ): ?>

                
                <button type="button" class="btn btn-argus pull-right">Newer posts &raquo;</button>
                <button type="button" class="btn btn-argus pull-right">&laquo; Older posts</button>

                <h1><span>Search Results for '<?php echo get_search_query(); ?>'<span></h1>
                <div class="clearfix"></div>
                </div>
              </div>
             
              <div class="article-text">

<?php while ( have_posts() ) : the_post(); ?>
		<section>
          <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <h4><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></h4>
          <p><?php the_excerpt(); ?></p>
        </section>

<?php endwhile; ?>
              </div>
              <div class="article-text">
              <button type="button" class="btn btn-argus pull-right">Newer posts &raquo;</button>
                <button type="button" class="btn btn-argus pull-right">&laquo; Older posts</button>
                <div class="clearfix"></div>
              </div>
<?php else: ?>

					<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
				</div>
			</div>

<?php endif; ?>

            </div>
            <div class="col-md-3">
              <div class="box">
                <h2><a href="section.html">Media</a></h2>
                <ul>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Lily, EIC</a></li>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Christina, EIC</a></li>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Miranda, EIC</a></li>
                </ul>
              </div>
              <div class="box">
                <h2><a href="section.html">Popular</a></h2>
                <ul>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Lily, EIC</a></li>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Christina, EIC</a></li>
                  <li><a href="article.html"><strong>REALLY COOL TITLE</strong>By Miranda, EIC</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>