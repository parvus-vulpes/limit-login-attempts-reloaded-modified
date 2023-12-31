<?php

use LLARS\Core\Config;
use LLARS\Core\Helpers;
use LLARS\Core\LimitLoginAttempts;

if( !defined( 'ABSPATH' ) ) exit();

// $active_tab = "dashboard";
$active_tab = "settings";
$active_app = Config::get( 'active_app' );

if( !empty($_GET["tab"]) && in_array( $_GET["tab"], array( 'logs-local', 'settings', 'debug' ) ) ) {

    $active_tab = sanitize_text_field( $_GET["tab"] );
	
}

?>



<div class="wrap limit-login-page-settings">
    <h2><?php echo __( 'Limit Login Attempts Reloaded', 'limit-login-attempts-reloaded' ); ?></h2>

    <h2 class="nav-tab-wrapper">
        <a href="<?php echo $this->get_options_page_uri('settings'); ?>" class="nav-tab <?php if($active_tab == 'settings'){echo 'nav-tab-active';} ?> "><?php _e('Settings', 'limit-login-attempts-reloaded'); ?></a>
        <a href="<?php echo $this->get_options_page_uri('logs-local'); ?>" class="nav-tab <?php if($active_tab == 'logs-local'){echo 'nav-tab-active';} ?> "><?php _e('Logs', 'limit-login-attempts-reloaded'); ?></a>
        <a href="<?php echo $this->get_options_page_uri('debug'); ?>" class="nav-tab <?php if($active_tab == 'debug'){echo 'nav-tab-active';} ?>"><?php _e('Debug', 'limit-login-attempts-reloaded'); ?></a>       
    </h2>

    <?php include_once(LLAS_PLUGIN_DIR.'views/tab-'.$active_tab.'.php'); ?>
</div>
