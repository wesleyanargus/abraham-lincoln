<?php
/**
 * The template for displaying 404 pages (Not Found)
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
                  <div class="article-text">
					<h2>Page not found</h2>
				  </div>
				</div>
            </div>
            <div class="col-md-3">
              <?php get_sidebar(); ?>
            </div>
          </div>
      </div>

<?php get_footer(); ?>