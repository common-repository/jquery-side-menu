<?php

function display_mb_side_menu_jquery_settings(){
	global $smj_options;
	?>
	
    <div class="wrap">
	<!--style for paragraph-->
    <style>
	.nss_para_style{
		width:70%;
		font-size:medium;
		padding-bottom:10px;
		border-bottom: dotted #0CF thin;
	}
	</style>
    <h2> jQuery Side Menu  Settings </h2>
    <form method="post" action="options.php">
    
    <?php settings_fields('mb_side_menu_jquery_group'); ?>
	
    <?php screen_icon();?>
	<h3>Add Your Site Titles and URLs [Example Website Title "MySite", Website URL "www.mysite.com" (without http:// prefix)]</h3>
	<h4>You Can Add Upto Ten Sites in jQuery Side Menu Plugin.</h4>
    
	<hr/>
    
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_1]">1. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_1]" name="mbsidemenujquery_settings[website_name_1]" type="text" size="25"  value="<?php echo $smj_options['website_name_1'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_1]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_1]" name="mbsidemenujquery_settings[website_url_1]" type="text" size="35"  value="<?php echo $smj_options['website_url_1'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_2]">2. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_2]" name="mbsidemenujquery_settings[website_name_2]" type="text" size="25"  value="<?php echo $smj_options['website_name_2'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_2]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_2]" name="mbsidemenujquery_settings[website_url_2]" type="text" size="35"  value="<?php echo $smj_options['website_url_2'] ?>" />
	</p>
    
    <p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_3]">3. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_3]" name="mbsidemenujquery_settings[website_name_3]" type="text" size="25"  value="<?php echo $smj_options['website_name_3'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_3]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_3]" name="mbsidemenujquery_settings[website_url_3]" type="text" size="35"  value="<?php echo $smj_options['website_url_3'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_4]">4. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_4]" name="mbsidemenujquery_settings[website_name_4]" type="text" size="25"  value="<?php echo $smj_options['website_name_4'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_4]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_4]" name="mbsidemenujquery_settings[website_url_4]" type="text" size="35"  value="<?php echo $smj_options['website_url_4'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_5]">5. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_5]" name="mbsidemenujquery_settings[website_name_5]" type="text" size="25"  value="<?php echo $smj_options['website_name_5'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_5]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_5]" name="mbsidemenujquery_settings[website_url_5]" type="text" size="35"  value="<?php echo $smj_options['website_url_5'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_6]">6. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_6]" name="mbsidemenujquery_settings[website_name_6]" type="text" size="25"  value="<?php echo $smj_options['website_name_6'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_6]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_6]" name="mbsidemenujquery_settings[website_url_6]" type="text" size="35"  value="<?php echo $smj_options['website_url_6'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_7]">7. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_7]" name="mbsidemenujquery_settings[website_name_7]" type="text" size="25"  value="<?php echo $smj_options['website_name_7'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_7]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_7]" name="mbsidemenujquery_settings[website_url_7]" type="text" size="35"  value="<?php echo $smj_options['website_url_7'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_8]">8. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_8]" name="mbsidemenujquery_settings[website_name_8]" type="text" size="25"  value="<?php echo $smj_options['website_name_8'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_8]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_8]" name="mbsidemenujquery_settings[website_url_8]" type="text" size="35"  value="<?php echo $smj_options['website_url_8'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_9]">9. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_9]" name="mbsidemenujquery_settings[website_name_9]" type="text" size="25"  value="<?php echo $smj_options['website_name_9'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_9]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_9]" name="mbsidemenujquery_settings[website_url_9]" type="text" size="35"  value="<?php echo $smj_options['website_url_9'] ?>" />
	</p>
	
	<p class="nss_para_style">
	<label class="description" for="mbsidemenujquery_settings[website_name_10]">10. Website Title </label>
	<input id="mbsidemenujquery_settings[website_name_10]" name="mbsidemenujquery_settings[website_name_10]" type="text" size="25"  value="<?php echo $smj_options['website_name_10'] ?>" />
	
	<label class="description" for="mbsidemenujquery_settings[website_url_10]"> Website URL </label>
	<input id="mbsidemenujquery_settings[website_url_10]" name="mbsidemenujquery_settings[website_url_10]" type="text" size="35"  value="<?php echo $smj_options['website_url_10'] ?>" />
	</p>
	
	<p class="submit">
        <input name="submit" type="submit" class="button-primary" value="Save Changes"/>
        
    </p>
		
	</form>
	<?php
	}
	
add_action('admin_menu', 'add_smj_to_wp_setting_menu');
function add_smj_to_wp_setting_menu() {
    add_options_page('jQuery Side Menu Settings', 'jQuery Side Menu Settings', 'administrator', 'mb-side-menu-jquery', 'display_mb_side_menu_jquery_settings');
}

function mb_side_menu_jquery_register_settings(){
	register_setting('mb_side_menu_jquery_group', 'mbsidemenujquery_settings'); //group, option name
}
add_action('admin_init','mb_side_menu_jquery_register_settings');
?>