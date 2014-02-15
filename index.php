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
 * @package   WordPress
 * @subpackage  Abraham Lincoln
 * @since     Abraham Lincoln 0.1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

      <div class="row">
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/news">News</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 3, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/features">Features</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 4, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
       </div>
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/sports">Sports</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 5, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/arts">Arts</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 6, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/wespeaks">Wespeaks</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 13, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
       </div>
        <div class="col-md-3">
          <div class="box">
            <h2><a href="/section/opinion">Opinion</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 16, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box">
            <h2><a href="section/food">Food</a></h2>
            <ul>
				<?php
					$args = array( 'numberposts' => '3', 'category' => 75, );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><strong>' .   $recent["post_title"].'</strong>By ' .   $recent["post_author"].'</a> </li> ';
					}
				?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box pdf-box">
            <h2>PDF Viewer</h2>
          </div>
        </div>
      </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>