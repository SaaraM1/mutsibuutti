<?php
/**
 * Deli engine room
 *
 * @package deli
 */

/**
 * Set the theme version number as a global variable
 */
$theme				= wp_get_theme( 'deli' );
$deli_version		= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-deli.php' );
require_once( 'inc/class-deli-customizer.php' );
require_once( 'inc/class-deli-template.php' );
require_once( 'inc/class-deli-integrations.php' );
require_once( 'inc/plugged.php' );

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */
 function deli_add_topbar() {
    ?>
    <div id="topbar">
        <div class="col-full">
			<div class="somevalikko">
				<ul class="omavalikko">
					<li><a href="https://www.facebook.com/mutsibuutti" target="_blank"><img src="/wp/wp-content/uploads/2021/04/face.png"></a></li>
					<li><a href="https://www.instagram.com/mutsibuutti/" target="_blank">Instagram</a></li>
					<li><a href="https://www.twitter.com/mutsibuutti" target="_blank">Twitter</a></li>
				</ul>
			</div>
        </div>
    </div>
    <?php
}
add_action( 'deli_before_header', 'deli_add_topbar' );