<?php
/*
Plugin Name: ANPC Display
Plugin URI: https://www.onu.ro
Description: Automatically displays the mandatory SAL and SOL links and icons for online stores in Romania (Osclass Version).
Version: 1.0.0
Author: Constantin Onu
Author URI: https://www.onu.ro
Short Name: anpc_display
*/

/*
 * ==========================================================================
 *  INSTALL / UNINSTALL
 * ==========================================================================
 */

function anpc_display_install() {
    // Set default values
    osc_set_preference('sal_link_url', 'https://anpc.ro/ce-este-sal/', 'anpc_display', 'STRING');
    osc_set_preference('sol_link_url', 'https://ec.europa.eu/consumers/odr', 'anpc_display', 'STRING');
    osc_set_preference('enable_plugin', '1', 'anpc_display', 'BOOLEAN');
    osc_set_preference('display_position', 'footer', 'anpc_display', 'STRING');
    osc_set_preference('icon_size', 'medium', 'anpc_display', 'STRING');
    osc_set_preference('custom_css', '', 'anpc_display', 'STRING');
    osc_set_preference('open_new_tab', '1', 'anpc_display', 'BOOLEAN');
}

function anpc_display_uninstall() {
    // Delete preferences
    osc_delete_preference('sal_link_url', 'anpc_display');
    osc_delete_preference('sol_link_url', 'anpc_display');
    osc_delete_preference('enable_plugin', 'anpc_display');
    osc_delete_preference('display_position', 'anpc_display');
    osc_delete_preference('icon_size', 'anpc_display');
    osc_delete_preference('custom_css', 'anpc_display');
    osc_delete_preference('open_new_tab', 'anpc_display');
}

/*
 * ==========================================================================
 *  ADMIN MENU & SETTINGS
 * ==========================================================================
 */

function anpc_display_admin_menu() {
    osc_add_admin_menu_page(
        'ANPC Display', 
        osc_admin_render_plugin_url('anpc_display/admin.php'), 
        'anpc_display_admin', 
        'administrator'
    );
}

function anpc_display_admin_config() {
    osc_admin_render_plugin(osc_plugin_path(dirname(__FILE__)) . '/admin.php');
}

/*
 * ==========================================================================
 *  FRONTEND DISPLAY
 * ==========================================================================
 */

function anpc_display_footer() {
    if( osc_get_preference('enable_plugin', 'anpc_display') != '1' ) {
        return;
    }

    $sal_url = osc_get_preference('sal_link_url', 'anpc_display');
    $sol_url = osc_get_preference('sol_link_url', 'anpc_display');
    $icon_size = osc_get_preference('icon_size', 'anpc_display');
    $custom_css = osc_get_preference('custom_css', 'anpc_display');
    $open_new_tab = osc_get_preference('open_new_tab', 'anpc_display');
    
    // Check if empty, fallback to defaults just in case
    if(empty($sal_url)) $sal_url = 'https://anpc.ro/ce-este-sal/';
    if(empty($sol_url)) $sol_url = 'https://ec.europa.eu/consumers/odr';
    if(empty($icon_size)) $icon_size = 'medium';

    $sal_img = osc_plugin_url(__FILE__) . 'assets/sal.png';
    $sol_img = osc_plugin_url(__FILE__) . 'assets/sol.png';
    
    // Define size presets
    $sizes = array(
        'small' => array('max-width' => '150px', 'max-height' => '35px'),
        'medium' => array('max-width' => '250px', 'max-height' => '50px'),
        'large' => array('max-width' => '350px', 'max-height' => '70px')
    );
    
    $current_size = isset($sizes[$icon_size]) ? $sizes[$icon_size] : $sizes['medium'];
    $target_attr = ($open_new_tab == '1') ? 'target="_blank"' : '';
    ?>
    <style>
        .anpc-display-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px 0;
            margin-top: 20px;
            clear: both;
        }
        .anpc-item {
            display: block;
            transition: transform 0.2s ease;
        }
        .anpc-item:hover {
            transform: scale(1.05);
        }
        .anpc-item img {
            max-width: <?php echo $current_size['max-width']; ?>;
            height: auto;
            max-height: <?php echo $current_size['max-height']; ?>;
            display: block;
            border: none;
            box-shadow: none;
        }
        @media (max-width: 600px) {
            .anpc-display-container {
                flex-direction: column;
            }
        }
        <?php if(!empty($custom_css)) { echo $custom_css; } ?>
    </style>
    <div class="anpc-display-container">
        <a href="<?php echo $sal_url; ?>" <?php echo $target_attr; ?> rel="nofollow noopener noreferrer" class="anpc-item" title="ANPC - SAL">
            <img src="<?php echo $sal_img; ?>" alt="ANPC SAL">
        </a>
        <a href="<?php echo $sol_url; ?>" <?php echo $target_attr; ?> rel="nofollow noopener noreferrer" class="anpc-item" title="ANPC - SOL">
            <img src="<?php echo $sol_img; ?>" alt="ANPC SOL">
        </a>
    </div>
    <?php
}

// Header display function (same as footer but for header hook)
function anpc_display_header() {
    anpc_display_footer(); // Reuse the same display logic
}

/*
 * ==========================================================================
 *  HOOKS
 * ==========================================================================
 */

// Install & Uninstall
osc_register_plugin(osc_plugin_path(__FILE__), 'anpc_display_install');
osc_add_hook(osc_plugin_path(__FILE__) . '_uninstall', 'anpc_display_uninstall');

// Admin Menu
osc_add_hook('admin_menu_init', 'anpc_display_admin_menu');

// Configuration Link in Plugins List
osc_add_hook(osc_plugin_path(__FILE__) . '_configure', 'anpc_display_admin_config');

// Display hook based on position preference
$display_position = osc_get_preference('display_position', 'anpc_display');
if($display_position == 'header') {
    osc_add_hook('header', 'anpc_display_header');
} else {
    osc_add_hook('footer', 'anpc_display_footer');
}

?>
