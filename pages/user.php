<?php
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

get_header();

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
}?>
        <div class="container">
        <div class="span-18 article last">
<?php
    $section = $posts ? 'section' : '';

    /*echo "            <div class=\"$section clearfix\">\n";*/

   /*
 if ($photo)
        echo "            <p class=\"photo\"><img src=\"$photo\" /></p>\n";
*/

    /*if ($position)
        $byline = ($active ? '' : 'Former ') . $position;*/

    echo "            <h1 class=\"categoryheading\">{$userinfo->nickname}</h1>\n";
    echo "            <p class=\"byline\">$byline</p>\n";

   /*
 if ($bio)
        echo arg_nl2p($bio) . "\n";
*/

    /*echo "            </div>\n";*/

    if ($posts) {
        echo "            <strong>".count($posts)." Articles</strong>\n";

        for ($i = 0; $i < count($posts); ++$i) {
            $post = get_post($posts[$i]);
            abraham_display_author_archive_post();
        }
    }

    echo "        </div>\n";
?>
        </div>
        </div>

<?php
    get_footer();
    
/** stolen from somewhere */
function arg_nl2p ($text) { 
    // strip out html (I think you wanted that?) 
    $text = strip_tags($text); 
    // convert line endings 
    $text = preg_replace('/\r\n?/', "\n", $text); 
    // add <p>s, remove trailing and leading spaces 
    $text = preg_replace('/\s*\S.*?(\n\s*\n|$)/es', '"<p>" . trim("$0") . "</p>"', $text); 
    // add <br/>s where appropriate 
    $text = preg_replace('/\s*\n\s*/', "<br/>", $text); 

    return $text; 
} 
?>
