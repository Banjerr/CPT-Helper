<?php
/**
* Plugin Name: GUW-CPT Helper
* Plugin URI: http://getuwired.us
* Description: Creates Custom Post Types/Taxonomies
* Version: 1.0
* Author: Ben Redden - GetUWired Web Services
* Author URI: http://getuwired.us
* License: GPL12
*/

// register settings
function guw_cpt_settings_init(){
    register_setting( 'guw-cpt_settings', 'guw-cpt_settings' );
}

// add settings page to menu
function add_settings_page() {
    add_menu_page( __( 'GUW-CPT Settings' ), __( 'GUW-CPT Hlpr Settings' ), 'manage_options', 'settings', 'guw_cpt_settings_page');
}

// add actions
add_action( 'admin_init', 'guw_cpt_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

// start settings page
function guw_cpt_settings_page() {
    wp_enqueue_style( 'theme-styles',plugins_url('/style/guw-cpt_settingsStyles.css',__FILE__ ));
if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false;

?>

<h2 id="title"><?php _e( 'GUW Custom Post Type Helper Settings' ) ?></h2>

<?php
// show saved options message
if ( false !== $_REQUEST['updated'] ) : ?>
    <div><p><strong><?php _e( 'Options saved. Good job!' ); ?></strong></p></div>
<?php endif; ?>

<form method="post" action="options.php">

    <?php settings_fields( 'guw-cpt_settings' ); ?>
    <?php $options = get_option( 'guw-cpt_settings' ); ?>

    <div class="general">
        <div class="column1">
            <label for="functionName">Function Name</label>
            <input type="text" placeholder="custom_post_type">
            <p>Function used in the code</p>
        </div><!--.column1-->
        <div class="column2">
            <label for="childThemeSupport">Child Theme Support</label>
            <select name="childThemeSupport" id="childThemeSupport">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <p>Add child themes support</p>
        </div><!--.column2-->
        <div class="column3">
            <label for="textDomain">Text Domain</label>
            <input type="text" placeholder="text_domain">
            <p>translation file text domain. optional</p>
        </div><!--.column3-->
    </div><!--.general-->

    <div class="postType">

    </div><!--.postType-->

<p><input name="submit" id="submit" value="Save Changes" type="submit" class="button"></p>
</form>
<?php
}


function register_custom_post_type() {
    settings_fields( 'guw-cpt_settings' );
    $options = get_option( 'guw-cpt_settings' );




}



?>
