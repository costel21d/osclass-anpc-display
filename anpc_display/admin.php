<?php
if(Params::getParam('option') == 'stepone') {
    osc_set_preference('sal_link_url', osc_sanitize_string(Params::getParam('sal_link_url')), 'anpc_display', 'STRING');
    osc_set_preference('sol_link_url', osc_sanitize_string(Params::getParam('sol_link_url')), 'anpc_display', 'STRING');
    osc_set_preference('enable_plugin', (Params::getParam('enable_plugin') ? '1' : '0'), 'anpc_display', 'BOOLEAN');
    osc_set_preference('display_position', osc_sanitize_string(Params::getParam('display_position')), 'anpc_display', 'STRING');
    osc_set_preference('icon_size', osc_sanitize_string(Params::getParam('icon_size')), 'anpc_display', 'STRING');
    osc_set_preference('custom_css', Params::getParam('custom_css'), 'anpc_display', 'STRING');
    osc_set_preference('open_new_tab', (Params::getParam('open_new_tab') ? '1' : '0'), 'anpc_display', 'BOOLEAN');
    
    osc_add_flash_ok_message('Settings saved successfully', 'admin');
    // Reload page to show fresh data
    osc_redirect_to(osc_admin_render_plugin_url('anpc_display/admin.php'));
}

$sal_url = osc_get_preference('sal_link_url', 'anpc_display');
$sol_url = osc_get_preference('sol_link_url', 'anpc_display');
$enabled = osc_get_preference('enable_plugin', 'anpc_display');
$display_position = osc_get_preference('display_position', 'anpc_display');
$icon_size = osc_get_preference('icon_size', 'anpc_display');
$custom_css = osc_get_preference('custom_css', 'anpc_display');
$open_new_tab = osc_get_preference('open_new_tab', 'anpc_display');

if(empty($display_position)) $display_position = 'footer';
if(empty($icon_size)) $icon_size = 'medium';
?>

<style>
    .anpc-admin-wrapper {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .anpc-admin-header {
        border-bottom: 3px solid #0073aa;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }
    .anpc-admin-header h2 {
        margin: 0;
        color: #23282d;
        font-size: 24px;
    }
    .anpc-admin-header p {
        margin: 10px 0 0 0;
        color: #666;
    }
    .anpc-section {
        margin-bottom: 30px;
        padding: 20px;
        background: #f9f9f9;
        border-left: 4px solid #0073aa;
        border-radius: 4px;
    }
    .anpc-section h3 {
        margin-top: 0;
        color: #23282d;
        font-size: 18px;
    }
    .anpc-form-row {
        margin-bottom: 20px;
    }
    .anpc-form-row label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #23282d;
    }
    .anpc-form-row input[type="text"],
    .anpc-form-row textarea,
    .anpc-form-row select {
        width: 100%;
        max-width: 600px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }
    .anpc-form-row textarea {
        min-height: 120px;
        font-family: monospace;
    }
    .anpc-help-text {
        display: block;
        margin-top: 5px;
        font-size: 13px;
        color: #666;
        font-style: italic;
    }
    .anpc-checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .anpc-checkbox-wrapper input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    .anpc-preview-box {
        background: #fff;
        padding: 30px;
        border: 2px dashed #ddd;
        border-radius: 8px;
        text-align: center;
    }
    .anpc-preview-box img {
        margin: 10px;
        transition: transform 0.2s ease;
    }
    .anpc-preview-box img:hover {
        transform: scale(1.05);
    }
    .anpc-btn-primary {
        background: #0073aa;
        color: #fff;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    .anpc-btn-primary:hover {
        background: #005a87;
    }
    .anpc-info-box {
        background: #e7f3ff;
        border-left: 4px solid #2196F3;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
    }
    .anpc-info-box strong {
        color: #1976D2;
    }
</style>

<div class="anpc-admin-wrapper">
    <div class="anpc-admin-header">
        <h2>🛡️ ANPC Display Settings</h2>
        <p>Configure the mandatory SAL and SOL compliance links for your Romanian classifieds site.</p>
    </div>
    
    <div class="anpc-info-box">
        <strong>ℹ️ Legal Requirement:</strong> According to ANPC Order no. 449/2022, all online stores in Romania must display SAL (Alternative Dispute Resolution) and SOL (Online Dispute Resolution) links.
    </div>

    <form action="<?php echo osc_admin_render_plugin_url('anpc_display/admin.php'); ?>" method="post">
        <input type="hidden" name="option" value="stepone" />
        
        <!-- General Settings -->
        <div class="anpc-section">
            <h3>⚙️ General Settings</h3>
            
            <div class="anpc-form-row">
                <div class="anpc-checkbox-wrapper">
                    <input type="checkbox" name="enable_plugin" id="enable_plugin" value="1" <?php echo ($enabled == '1' ? 'checked' : ''); ?> />
                    <label for="enable_plugin" style="margin: 0;">Enable Plugin</label>
                </div>
                <span class="anpc-help-text">Turn the plugin on or off without uninstalling it.</span>
            </div>
            
            <div class="anpc-form-row">
                <label for="display_position">Display Position</label>
                <select name="display_position" id="display_position">
                    <option value="footer" <?php echo ($display_position == 'footer' ? 'selected' : ''); ?>>Footer</option>
                    <option value="header" <?php echo ($display_position == 'header' ? 'selected' : ''); ?>>Header</option>
                </select>
                <span class="anpc-help-text">Choose where to display the ANPC icons on your site.</span>
            </div>
            
            <div class="anpc-form-row">
                <label for="icon_size">Icon Size</label>
                <select name="icon_size" id="icon_size">
                    <option value="small" <?php echo ($icon_size == 'small' ? 'selected' : ''); ?>>Small (150px)</option>
                    <option value="medium" <?php echo ($icon_size == 'medium' ? 'selected' : ''); ?>>Medium (250px)</option>
                    <option value="large" <?php echo ($icon_size == 'large' ? 'selected' : ''); ?>>Large (350px)</option>
                </select>
                <span class="anpc-help-text">Select the maximum width for the icons.</span>
            </div>
            
            <div class="anpc-form-row">
                <div class="anpc-checkbox-wrapper">
                    <input type="checkbox" name="open_new_tab" id="open_new_tab" value="1" <?php echo ($open_new_tab == '1' ? 'checked' : ''); ?> />
                    <label for="open_new_tab" style="margin: 0;">Open links in new tab</label>
                </div>
                <span class="anpc-help-text">If checked, ANPC links will open in a new browser tab.</span>
            </div>
        </div>
        
        <!-- URL Configuration -->
        <div class="anpc-section">
            <h3>🔗 URL Configuration</h3>
            
            <div class="anpc-form-row">
                <label for="sal_link_url">SAL Link URL</label>
                <input type="text" name="sal_link_url" id="sal_link_url" value="<?php echo htmlspecialchars($sal_url); ?>" placeholder="https://anpc.ro/ce-este-sal/" />
                <span class="anpc-help-text">Default: https://anpc.ro/ce-este-sal/</span>
            </div>

            <div class="anpc-form-row">
                <label for="sol_link_url">SOL Link URL</label>
                <input type="text" name="sol_link_url" id="sol_link_url" value="<?php echo htmlspecialchars($sol_url); ?>" placeholder="https://ec.europa.eu/consumers/odr" />
                <span class="anpc-help-text">Default: https://ec.europa.eu/consumers/odr</span>
            </div>
        </div>
        
        <!-- Advanced Styling -->
        <div class="anpc-section">
            <h3>🎨 Advanced Styling (Optional)</h3>
            
            <div class="anpc-form-row">
                <label for="custom_css">Custom CSS</label>
                <textarea name="custom_css" id="custom_css" placeholder="/* Add your custom CSS here */&#10;.anpc-display-container {&#10;    background: #f0f0f0;&#10;}"><?php echo htmlspecialchars($custom_css); ?></textarea>
                <span class="anpc-help-text">Add custom CSS to override default styles. Use class <code>.anpc-display-container</code> and <code>.anpc-item</code>.</span>
            </div>
        </div>
        
        <div style="margin-top: 30px;">
            <button type="submit" class="anpc-btn-primary">💾 Save Settings</button>
        </div>
    </form>
    
    <!-- Live Preview -->
    <div class="anpc-section" style="margin-top: 40px;">
        <h3>👁️ Live Preview</h3>
        <p>This is how the icons will appear on your site:</p>
        <div class="anpc-preview-box">
            <?php
            $sizes = array(
                'small' => array('max-width' => '150px'),
                'medium' => array('max-width' => '250px'),
                'large' => array('max-width' => '350px')
            );
            $preview_size = isset($sizes[$icon_size]) ? $sizes[$icon_size]['max-width'] : '250px';
            ?>
            <img src="<?php echo osc_plugin_url('anpc_display/index.php') . 'assets/sal.png'; ?>" style="max-width:<?php echo $preview_size; ?>; margin-right: 10px;" alt="SAL Preview">
            <img src="<?php echo osc_plugin_url('anpc_display/index.php') . 'assets/sol.png'; ?>" style="max-width:<?php echo $preview_size; ?>;" alt="SOL Preview">
        </div>
    </div>
    
    <!-- Documentation -->
    <div class="anpc-section" style="margin-top: 40px; background: #fff9e6; border-left-color: #ffc107;">
        <h3>📚 Quick Documentation</h3>
        <ul style="line-height: 1.8;">
            <li><strong>SAL (Soluționarea Alternativă a Litigiilor):</strong> Alternative dispute resolution for consumer complaints.</li>
            <li><strong>SOL (Soluționarea Online a Litigiilor):</strong> Online dispute resolution platform provided by the European Commission.</li>
            <li><strong>Legal Compliance:</strong> These links are mandatory for all Romanian e-commerce sites as per ANPC regulations.</li>
            <li><strong>Privacy:</strong> All assets (images) are stored locally to comply with GDPR and privacy best practices.</li>
        </ul>
    </div>
</div>
