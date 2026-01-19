<?php
if(Params::getParam('option') == 'stepone') {
    osc_set_preference('sal_link_url', osc_sanitize_string(Params::getParam('sal_link_url')), 'anpc_display', 'STRING');
    osc_set_preference('sol_link_url', osc_sanitize_string(Params::getParam('sol_link_url')), 'anpc_display', 'STRING');
    osc_set_preference('enable_plugin', (Params::getParam('enable_plugin') ? '1' : '0'), 'anpc_display', 'BOOLEAN');
    
    osc_add_flash_ok_message('Settings saved successfully', 'admin');
    // Reload page to show fresh data
    osc_redirect_to(osc_admin_render_plugin_url('anpc_display/admin.php'));
}

$sal_url = osc_get_preference('sal_link_url', 'anpc_display');
$sol_url = osc_get_preference('sol_link_url', 'anpc_display');
$enabled = osc_get_preference('enable_plugin', 'anpc_display');
?>

<div style="padding: 20px;">
    <h2>ANPC Display Settings</h2>
    <p>Configure the mandatory SAL and SOL links for your Romanian classifieds site.</p>
    
    <form action="<?php echo osc_admin_render_plugin_url('anpc_display/admin.php'); ?>" method="post">
        <input type="hidden" name="option" value="stepone" />
        
        <fieldset>
            <div class="form-row">
                <div class="form-label-checkbox">
                    <label>
                        <input type="checkbox" name="enable_plugin" value="1" <?php echo ($enabled == '1' ? 'checked' : ''); ?> />
                        <strong>Enable Plugin</strong>
                    </label>
                </div>
            </div>
            
            <div style="margin-top: 15px;">
                <label for="sal_link_url" style="display:block; font-weight:bold; margin-bottom:5px;">SAL Link URL</label>
                <input type="text" name="sal_link_url" id="sal_link_url" value="<?php echo $sal_url; ?>" style="width: 400px;" />
                <p class="help-box">Default: https://anpc.ro/ce-este-sal/</p>
            </div>

            <div style="margin-top: 15px;">
                <label for="sol_link_url" style="display:block; font-weight:bold; margin-bottom:5px;">SOL Link URL</label>
                <input type="text" name="sol_link_url" id="sol_link_url" value="<?php echo $sol_url; ?>" style="width: 400px;" />
                <p class="help-box">Default: https://ec.europa.eu/consumers/odr</p>
            </div>
            
            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-submit">Save Settings</button>
            </div>
        </fieldset>
    </form>
    
    <div style="margin-top: 30px; border-top: 1px solid #ccc; padding-top: 10px;">
        <h3>Preview</h3>
        <p>This is how the icons look (using local assets):</p>
        <div style="background: #f5f5f5; padding: 20px; text-align: center;">
             <img src="<?php echo osc_plugin_url('anpc_display/index.php') . 'assets/sal.png'; ?>" style="max-width:200px; margin-right: 10px;">
             <img src="<?php echo osc_plugin_url('anpc_display/index.php') . 'assets/sol.png'; ?>" style="max-width:200px;">
        </div>
    </div>
</div>
