<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
                </div>
              </div>
              <div class="article-text">
                <!--<div class="photo">
                <img src="http://wesleyanargus.com/wp-content/uploads/2014/02/Arora_SenatorTalk2.jpg">
                <small>Trisha Arora/Photo Editor</small>
                </div>-->
                <?php the_content(); ?>
				
              </div>
              <div class="article-text">
              	<?php comments_template( '', true ); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h2><a href="section.html">Recommended</a></h2>
                <ul>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Lily, EIC</a></li>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Christina, EIC</a></li>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Miranda, EIC</a></li>
                </ul>
              </div>
              <div class="box">
                <h2><a href="section.html">Popular</a></h2>
                <ul>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Lily, EIC</a></li>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Christina, EIC</a></li>
                  <li><a href="#"><strong>REALLY COOL TITLE</strong>By Miranda, EIC</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>