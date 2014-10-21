<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php');

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Standing Desk Geek Theme' );
define( 'CHILD_THEME_URL', 'http://standingdeskgeek.com' );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

/* Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Add support for custom header */
remove_action('genesis_header','genesis_do_header');

/*function injectHeader(){ ?>
<div id="title-area">
<a href="http://standingdeskgeek.com/"><img src="http://standingdeskgeek.com/sdglogo.png"/></a>
</div>
<?php }
add_action('genesis_header','injectHeader');
*/

remove_action( 'genesis_footer', 'genesis_do_footer' );
