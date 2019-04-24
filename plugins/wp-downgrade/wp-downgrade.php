<?php
/*
Plugin Name: WP Downgrade | Specific Core Version
Plugin URI: https://www.reisetiger.net
Description: WP Downgrade allows you to either downgrade or update WordPress Core to an arbitrary version of your choice. The version you choose is downloaded directly from wordpress.org and installed just like any regular release update. The target version WordPress allows you to update to remains constant until you enter a different one or deactivate the plugin either completely or by leaving the target version field empty.
Version: 1.2.0
Author: Reisetiger
Author URI: https://www.reisetiger.net
License: GPL2
Text Domain: wp-downgrade
Domain Path: /languages
*/

// Abbruch, wenn direkt aufgerufen
if ( ! defined( 'ABSPATH' ) )
	exit;

function wp_downgrade_load_plugin_textdomain() {
$loaded = load_plugin_textdomain( 'wp-downgrade', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
//if ($loaded){ echo 'Success: Textdomain wp-downgrade loaded!'; }else{ echo 'Failed to load textdomain wp-downgrade!'; }
}
add_action('plugins_loaded', 'wp_downgrade_load_plugin_textdomain');

// create custom plugin settings menu
add_action('admin_menu', 'wp_downgrade_create_menu');

function wp_downgrade_create_menu() {

	//create new sub-menu
	add_submenu_page('options-general.php', 'WP Downgrade', 'WP Downgrade', 'administrator', 'wp_downgrade', 'wp_downgrade_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_wp_downgrade_settings' );
}

function register_wp_downgrade_settings() {
	//register our settings
	register_setting( 'wpdg-settings-group', 'wpdg_specific_version_name' );
	register_setting( 'wpdg-settings-group', 'wpdg_download_url' );
	register_setting( 'wpdg-settings-group', 'wpdg_edit_download_url' );
	// register_setting( 'wpdg-settings-group', 'some_other_option' );
}

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wp_downgrade_action_links' );
function wp_downgrade_action_links( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=wp_downgrade') ) .'">Settings</a>';
   return $links;
}

function wp_downgrade_settings_page() {
?>
<div class="wrap">
<h2>WP Downgrade Options</h2>

<h3><?php _e('WP Downgrade', 'wp-downgrade'); ?>: <?php if (get_option('wpdg_specific_version_name')) { ?><span style="color: green;"><?php _e('Active', 'wp-downgrade'); ?> (<?php _e('WP', 'wp-downgrade'); ?> <?php echo get_option('wpdg_specific_version_name'); ?> <?php _e('is set as target version', 'wp-downgrade'); ?>)</span><?php } else {; ?><span style="color: red;"><?php _e('Inactive', 'wp-downgrade'); ?></span><?php }; ?></h3>

   <p><?php _e('WARNING! You are using this plugin entirely at your own risk! DO MAKE SURE you have a current backup of both your files and database, since a manual version change is deeply affecting your WP installation!', 'wp-downgrade'); ?></p>

<h3><?php _e('Which WordPress version would you like to up-/downgrade to?', 'wp-downgrade'); ?></h3>

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("download-url-text");
  var field = document.getElementById("download-url");
  if (checkBox.checked == true){
    text.style.display = "inline";
    field.style.display = "inline";
  } else {
    text.style.display = "none";
    field.style.display = "none";
  }
}
</script>


<?php global $wp_version;

// ein paar wichtige Sprachversionen, ansonsten international
if(get_locale() == 'de_DE')
  $release_link = 'https://de.wordpress.org/releases/';
else if(get_locale() == 'es_ES')
  $release_link = 'https://de.wordpress.org/releases/';
else
  $release_link = 'https://wordpress.org/download/releases/';
?>

<form method="post" action="options.php">
    <?php settings_fields( 'wpdg-settings-group' ); ?>
    <?php do_settings_sections( __FILE__ ); ?>
    <table class="form-table">
      <col width="180px">
      <col width="180px">
        <tr valign="top">
        <th scope="row"><?php _e('WordPress Target Version', 'wp-downgrade'); ?>:</th>
        <td><input type="text" maxlength="6"  pattern="[-+]?[0-9]*[.]?[0-9]?[.]?[0-9]+" placeholder="<?php echo $wp_version; ?>" name="wpdg_specific_version_name" value="<?php echo esc_attr( get_option('wpdg_specific_version_name') ); ?>" /> </td>
        <td><?php _e('Exact version number from', 'wp-downgrade'); ?> <a href="<?php echo $release_link; ?>" target="_blank"><?php _e('WP Releases', 'wp-downgrade'); ?></a>, <?php _e('for example "4.9.8". Leave empty to disable.', 'wp-downgrade'); ?></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Current WP Version', 'wp-downgrade'); ?>:</th>
        <td><?php echo $wp_version; ?></td>
        <td></td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><?php _e('Language Detected', 'wp-downgrade'); ?>:</th>
        <td><?php echo get_locale() ?></td>
        <td></td>
        </tr>

    <?php if (get_option('wpdg_specific_version_name') AND version_compare($wp_version, get_option('wpdg_specific_version_name') ) <> 0 ){
    if(filter_var(get_option('wpdg_download_url'), FILTER_VALIDATE_URL) AND get_option('wpdg_edit_download_url')) 
      $wpdg_download_url = get_option('wpdg_download_url');
    else 
      $wpdg_download_url = wpdg_get_url(get_option('wpdg_specific_version_name'));
    ?>
        <tr valign="top">
        <td><input type="checkbox" id="myCheck" onclick="myFunction()" name="wpdg_edit_download_url"  <?php if (get_option('wpdg_edit_download_url')){ echo 'checked';} ?>> <?php _e('edit download URL', 'wp-downgrade'); ?> </td>
        <td> <span id="download-url" style="display:<?php if (get_option('wpdg_edit_download_url')){ echo 'inline';} else {echo 'none';} ?>"><input type="url" pattern="https?://.+" name="wpdg_download_url" id="download-url" value="<?php echo esc_attr( $wpdg_download_url ); ?>" /> </span></td>
        <td> <span id="download-url-text" style="display:<?php if (get_option('wpdg_edit_download_url')){ echo 'inline';} else {echo 'none';} ?>"><?php _e('Usually you <strong>do not</strong> need to change this. But you can, if necessary. Must be a valid URL to a WordPress ZIP. <strong>Be careful!</strong> The content will not be verified! Wordpress will use what ever you give here, even if it does not contain release ', 'wp-downgrade'); echo get_option('wpdg_specific_version_name').' or for example a wrong language. After your special update is done, you need to check for success yourself. And after that, you should turn off this option.'; ?></span></td>
        </tr>
    <?php } ?>

    </table>


    
    <?php submit_button(); ?>
    
    </form>
    
<?php if (get_option('wpdg_specific_version_name')) { 
if (version_compare($wp_version, get_option('wpdg_specific_version_name') ) == 0 ) { ?>
  <div style="border: 2px solid green; padding: 5px;">
  <?php _e('<strong>All fine!</strong> You are currently on your desired release. And it will stay like that. <br>If you ever want to <strong>reinstall</strong> ', 'wp-downgrade'); ?> <?php echo get_option('wpdg_specific_version_name').', you have to switch to another version and come back. If you want to return to the regular update channel, you need to empty the version number above and go to '; ?> <a href="<?php echo get_admin_url( null, '/update-core.php' ) ;?>"><?php _e('Update Core', 'wp-downgrade'); ?></a>.
  </div>
<?php } else { ?>
<div style="border: 2px solid orange; padding: 5px;">
  <p><strong><?php _e('In order to perform the upgrade/downgrade to WP', 'wp-downgrade'); ?> <?php echo get_option('wpdg_specific_version_name'); ?> <?php _e('please go to', 'wp-downgrade'); ?> <a href="<?php echo get_admin_url( null, '/update-core.php' ) ;?>"><?php _e('Update Core', 'wp-downgrade'); ?></a>. </strong></p>
  <p><a href="<?php echo get_admin_url( null, '/update-core.php' ) ;?>" class="button"><?php _e('Up-/Downgrade Core', 'wp-downgrade'); ?></a></p>
</div>
<?php } ?>

<?php if (wpdg_urlcheck(wpdg_get_url(get_option('wpdg_specific_version_name'))) == false){ ?>
<div style="border: 2px solid red; padding: 5px;">
<span style="color: red;"> <?php _e('Attention! The target version does not seem to exist!', 'wp-downgrade'); ?> </span><br>
<span style="color: red;"> URL: <?php echo wpdg_get_url(get_option('wpdg_specific_version_name'));  ?></span><br>
<span style="color: red;"> <?php _e('The update could fail. Are you sure that the version number is correct? You can also manually edit the download URL if needed.', 'wp-downgrade'); echo " <strong>". get_option('wpdg_specific_version_name'); ?> </strong></span><br>
</div>
<?php }

  //echo wpdg_get_url(get_option('wpdg_specific_version_name'));
  //echo wpdg_urlcheck(wpdg_get_url(get_option('wpdg_specific_version_name')));

?>

<?php }; ?>

</div>
<?php } 

add_filter('pre_site_option_update_core','wpdg_specific_version' );
add_filter('site_transient_update_core','wpdg_specific_version' );
function wpdg_specific_version($updates){

$sprache = get_locale().'/';
if ($sprache == 'en_US/' OR $sprache == 'en'){
  $sprache = '';
  };
$dg_version = get_option('wpdg_specific_version_name');
if ($dg_version < 1)
  return $updates;
    
    global $wp_version;
    // If current version is target version then stop
    
    if ( version_compare( $wp_version, $dg_version ) == 0 ) {
        return;
    } //https://downloads.wordpress.org/release/de_DE/wordpress-4.5.zip
    
    $updates->updates[0]->download = wpdg_get_url($dg_version);
    $updates->updates[0]->packages->full = wpdg_get_url($dg_version);
    $updates->updates[0]->packages->no_content = '';
    $updates->updates[0]->packages->new_bundled = '';
    $updates->updates[0]->current = $dg_version;

    return $updates;
}

function wpdg_urlcheck($url) {
    if (($url == '') || ($url == null)) { return false; }
    $response = wp_remote_head( $url, array( 'timeout' => 5 ) );
    $accepted_status_codes = array( 200, 301, 302 );
    if ( ! is_wp_error( $response ) && in_array( wp_remote_retrieve_response_code( $response ), $accepted_status_codes ) ) {
        return true;
    }
    return false;
}

function wpdg_get_url($version) {
    if(get_option('wpdg_edit_download_url') AND filter_var(get_option('wpdg_download_url'), FILTER_VALIDATE_URL)){
      $url = get_option('wpdg_download_url');
    } else {      
      $sprache = get_locale().'/';
      if ($sprache == 'en_US/' OR $sprache == 'en'){
        $sprache = '';
        };
      $url = "https://downloads.wordpress.org/release/".$sprache."wordpress-".$version.".zip";
    }
  return $url;
}

?>