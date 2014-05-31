<?php
	/**
	 * Template functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
	 * @package 	WordPress
	 * @subpackage 	Abraham Lincoln
	 * @since 		Abraham Lincoln 0.1.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	function abraham_display_author($uppercase = true) {
		echo abraham_get_author($uppercase);
	}

	function abraham_get_author($uppercase = true) {
		if ($uppercase) {
			$b = 'B';
		} else {
			$b = 'b';
		}
		global $post;
		if (arg_has_authors()) {
	        $byline = arg_authors();
	        $byline = $b.'y ' . $byline;

	        if (arg_has_byline_sub()) $byline .= ', ' . arg_byline_sub(true);
	        return $byline;
	    } else {
	    	return $b.'y '.get_the_author().', '.get_user_meta($post->post_author,"wpum_position", true);
	    }
		
	}

    function abraham_excerpt($id=false) {
        global $post;

        $old_post = $post;
        if ($id != $post->ID) {
            $post = get_page($id);
        }

        if (!$excerpt = trim($post->post_excerpt)) {
            $excerpt = $post->post_content;
            $excerpt = strip_shortcodes( $excerpt );
            $excerpt = apply_filters('the_content', $excerpt);
            $excerpt = str_replace(']]>', ']]>', $excerpt);
            $excerpt = strip_tags($excerpt);
            $excerpt_length = apply_filters('excerpt_length', 55);
            $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');

            $words = preg_split("/[\n\r\t ]+/", $excerpt, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
            if ( count($words) > $excerpt_length ) {
                array_pop($words);
                $excerpt = implode(' ', $words);
                $excerpt = $excerpt . $excerpt_more;
            } else {
                $excerpt = implode(' ', $words);
            }
        }

        $post = $old_post;

        return $excerpt;
    }
	

    function panoptes_display_author_archive_post() {
        global $post;
        ?>
            <div class="categorypost">
                <h2 class="postlist"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php
                    abraham_display_author();
                    abraham_display_time();
                    ?>
                    <!-- user page abraham -->
                        <p><?php the_excerpt(); ?></p>
                    <?php
                 wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) );
                 ?>
            </div>
        <?php
    }
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	?>