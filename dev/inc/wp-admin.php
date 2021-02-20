<?php
/**
 * Custom functions that affect the /wp-admin/ area
 *
 * @package understrap
 */


/* Hide Sidebar Menu for non-Admins */

function understrap_hide_menu() {
	if (!current_user_can('manage_options')) {
		remove_menu_page( 'edit.php?post_type=acf-field-group' );					//acf
		remove_menu_page( 'options-general.php' );												//settings
		remove_menu_page( 'tools.php' );																	//tools
		remove_menu_page( 'plugins.php');																	//plugins
		remove_menu_page( 'themes.php' );																	//appearance
		remove_menu_page( 'smush' );												              //smush
    remove_menu_page( 'wpseo_dashboard' );						               	//yoast
	}
}
// add_action('admin_menu', 'understrap_hide_menu', 999);

/* Remove Admin Notices */

function understrap_remove_admin_notices() {
    global $wp_filter;
    if (current_user_can('manage_options')) {
        return;
    } elseif (isset($wp_filter['admin_notices'])) {
        unset($wp_filter['admin_notices']);
    }
    if (isset($wp_filter['all_admin_notices'])) {
        unset($wp_filter['all_admin_notices']);
    }
}
// add_action('admin_print_scripts', 'understrap_remove_admin_notices');

/* Remove all dashboard metaboxes */

function understrap_remove_all_dashboard_metaboxes() {
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal');
}
// add_action( 'wp_dashboard_setup', 'understrap_remove_all_dashboard_metaboxes' );

/* UnderStrap support dashboard widget */

add_action( 'wp_dashboard_setup', 'understrap_dashboard_news_meta_box' );

function understrap_dashboard_news_meta_box(){
  wp_add_dashboard_widget('understrap-support', 'UnderStrap Theme Support', 'understrap_support_widget_render', 'dashboard', 'normal', 'high' );
}

function understrap_support_widget_render(){ ?>
  <div>
    <p>Welcome to Understrap Theme! Need help? Contact the developer <a href="mailto:THEME_DEVELOPER_EMAIL">here</a>.</p>
    <p>For help on your custom theme, try one of the links below:
      <ul>
        THEME_SUPPORT_LINKS
      </ul>
    </p>
    <p>THEME_SUPPORT_NOTES</p>
  </div>
  <style>
    .understrap_news_feed li {
      border-top: 1px solid #eee;
      padding-top: 14px;
    }
    .understrap_news_feed li:last-child {
      border-bottom: 1px solid #eee;
    }
    .understrap_news_feed li .wordpress-feed__post-link {
      font-size: 16px;
    }
    .understrap_news_feed li p {
      margin-top: 0.65rem;
    }
    .understrap_news_feed .feed_item_0 a {
      color: #2c9600;
      font-weight: 600;
    }
  </style>

	<?php
}
