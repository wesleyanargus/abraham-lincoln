<?php
/**
 * The template for displaying user pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package   WordPress
 * @subpackage  Abraham Lincoln
 * @since     Abraham Lincoln 0.1.0
 */

//this file is supposed to be located in /wp-content/themes/argus/pages/user.php

require_once('../../../../wp-load.php');
require_once('../../../../wp-includes/registration.php');
require_once('../../../../wp-includes/user.php');

$ARG_VER = get_option('arg_version');

$username = strtolower($_GET['username']);
$uid = username_exists($username);

if ($uid) {
    $userinfo = get_userdata($uid);
    $arg_title = array('User', $userinfo->nickname);
}

if ($uid) {
    $photo = (file_exists(ABSPATH . "wp-content/plugins/argus-leadphoto-box/lib/static/$username.jpg")) ?
        get_bloginfo('wpurl') . "/media/photo/{$username}__300__.jpg&$ARG_VER" : '';

    $bio = get_usermeta($uid, 'description');
    $position = get_usermeta($uid, '_arg_position');
    $active = get_usermeta($uid, '_arg_active');

    $query = <<<END
SELECT DISTINCT ID FROM wp_posts
    JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id
    WHERE wp_postmeta.meta_key = "_arg_author"
        AND LOWER(wp_postmeta.meta_value) LIKE LOWER('%\"username\":\"{$username}\"%')
        AND post_status = 'publish'
    ORDER BY post_date DESC
END;
    $posts = $wpdb->get_col($query);
}

?>
<?php get_header(); ?>
      <div class="row">
          <div class="row content article">
            <div class="col-md-9">
              <div class="relative">

                <div class="article-text article-header">


                <h1><span><a href="#"><?php echo $userinfo->nickname; ?></a><span></h1>
                <h4><?php echo count($posts); ?> Articles</h4>
                <div class="clearfix"></div>
                </div>
              </div>

              <div class="article-text">

        <?php
        for ($i = 0; $i < count($posts); ++$i) {
          $post = get_post($posts[$i]);
        ?>
        <section>
          <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <h4><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php echo abraham_get_author(false); ?>. <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></h4>
          <p><?php the_excerpt(); ?></p>
        </section>

        <?php } ?>
              </div>

            </div>
            <div class="col-md-3">
            <?php get_sidebar(); ?>
            </div>
          </div>
      </div>



<?php get_footer(); ?>
