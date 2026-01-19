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
}

function anpc_display_uninstall() {
    // Delete preferences
    osc_delete_preference('sal_link_url', 'anpc_display');
    osc_delete_preference('sol_link_url', 'anpc_display');
    osc_delete_preference('enable_plugin', 'anpc_display');
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
    
    // Check if empty, fallback to defaults just in case
    if(empty($sal_url)) $sal_url = 'https://anpc.ro/ce-este-sal/';
    if(empty($sol_url)) $sol_url = 'https://ec.europa.eu/consumers/odr';

    $sal_img = osc_plugin_url(__FILE__) . 'assets/sal.png';
    $sol_img = osc_plugin_url(__FILE__) . 'assets/sol.png';
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
            max-width: 250px;
            height: auto;
            max-height: 50px;
            display: block;
            border: none;
            box-shadow: none;
        }
        @media (max-width: 600px) {
            .anpc-display-container {
                flex-direction: column;
            }
        }
    </style>
    <div class="anpc-display-container">
        <a href="<?php echo $sal_url; ?>" target="_blank" rel="nofollow noopener noreferrer" class="anpc-item" title="ANPC - SAL">
            <img src="<?php echo $sal_img; ?>" alt="ANPC SAL">
        </a>
        <a href="<?php echo $sol_url; ?>" target="_blank" rel="nofollow noopener noreferrer" class="anpc-item" title="ANPC - SOL">
            <img src="<?php echo $sol_img; ?>" alt="ANPC SOL">
        </a>
    </div>
    <?php
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

// Footer hook to display content
osc_add_hook('footer', 'anpc_display_footer');

?>
