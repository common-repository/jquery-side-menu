<?php

/*
Plugin Name: jquery Side Menu 
Plugin URI: http://masterblogster.com/plugins/jquery-side-menu/
Description: With jQuery Side Menu plugin you can display the list of websites along with favicon in a cool flyout sidebar. The plugin is useful to display your network sites or blogroll.
Author: <a href="http://www.masterblogster.com">Shrinivas Naik </a>, <a href="http://www.techgyo.com"> Sreejesh Suresh, <a href="http://www.creative11.com">Creative11
Version: 1.1
Author URI: http://www.masterblogster.com
*/


//Retrieve plugin settings from the options table
$smj_options=get_option('mbsidemenujquery_settings');


// Add plugin options page
include(plugin_dir_path( __FILE__ ) . 'mb-side-menu-jquery-options.php');


function load_side_menu_jquery()
{
global $smj_options;

//Retrieve Favicon of website
function getfavico($url){ 
			$imgurl = "http://www.google.com/s2/favicons?domain=" . $url; 
			return '<img src="' . $imgurl . '" width="16" height="16" style="vertical-align:middle; padding-right:8px" />';	
}


?>
<!--Network Sites Sidebar-->
<div id="sidebar_wrapper">

    <div id="network_sidebar_holder">
        <div style="float:left; width:80%; background-color:#0CF; text-align:center;"><span class="network_sites_sidebar_caption"> Our network</span></div>
            <div style="float:right; width:20%;"><img id="switcher" src="<?php echo plugins_url('images/icon.png', __FILE__ ) ?>" width="35" style=" padding-left:4px; float:right" /></div>
        
    </div>
	
    <div id="site_holder">
        <ul id="mysites">
		<?php
			if(!empty($smj_options['website_name_1']) && !empty($smj_options['website_url_1'])) { echo '<li> '. getfavico($smj_options['website_url_1']) . ' <a href="http://'.$smj_options['website_url_1'].'" target="_blank">'.$smj_options['website_name_1'].'</a></li>';}
			if(!empty($smj_options['website_name_2']) && !empty($smj_options['website_url_2'])) { echo '<li> '. getfavico($smj_options['website_url_2']) . ' <a href="http://'.$smj_options['website_url_2'].'" target="_blank">'.$smj_options['website_name_2'].'</a></li>';}
			if(!empty($smj_options['website_name_3']) && !empty($smj_options['website_url_3'])) { echo '<li> '. getfavico($smj_options['website_url_3']) . ' <a href="http://'.$smj_options['website_url_3'].'" target="_blank">'.$smj_options['website_name_3'].'</a></li>';}
			if(!empty($smj_options['website_name_4']) && !empty($smj_options['website_url_4'])) { echo '<li> '. getfavico($smj_options['website_url_4']) . ' <a href="http://'.$smj_options['website_url_4'].'" target="_blank">'.$smj_options['website_name_4'].'</a></li>';}
			if(!empty($smj_options['website_name_5']) && !empty($smj_options['website_url_5'])) { echo '<li> '. getfavico($smj_options['website_url_5']) . ' <a href="http://'.$smj_options['website_url_5'].'" target="_blank">'.$smj_options['website_name_5'].'</a></li>';}
			if(!empty($smj_options['website_name_6']) && !empty($smj_options['website_url_6'])) { echo '<li> '. getfavico($smj_options['website_url_6']) . ' <a href="http://'.$smj_options['website_url_6'].'" target="_blank">'.$smj_options['website_name_6'].'</a></li>';}
			if(!empty($smj_options['website_name_7']) && !empty($smj_options['website_url_7'])) { echo '<li> '. getfavico($smj_options['website_url_7']) . ' <a href="http://'.$smj_options['website_url_7'].'" target="_blank">'.$smj_options['website_name_7'].'</a></li>';}
			if(!empty($smj_options['website_name_8']) && !empty($smj_options['website_url_8'])) { echo '<li> '. getfavico($smj_options['website_url_8']) . ' <a href="http://'.$smj_options['website_url_8'].'" target="_blank">'.$smj_options['website_name_8'].'</a></li>';}
			if(!empty($smj_options['website_name_9']) && !empty($smj_options['website_url_9'])) { echo '<li> '. getfavico($smj_options['website_url_9']) . ' <a href="http://'.$smj_options['website_url_9'].'" target="_blank">'.$smj_options['website_name_9'].'</a></li>';}
			if(!empty($smj_options['website_name_10']) && !empty($smj_options['website_url_10'])) { echo '<li> '. getfavico($smj_options['website_url_10']) . ' <a href="http://'.$smj_options['website_url_10'].'" target="_blank">'.$smj_options['website_name_10'].'</a></li>';}
		
			//Show text if no text and sites are added
			if( empty($smj_options['website_name_1']) && 
				empty($smj_options['website_url_1']) &&
				empty($smj_options['website_name_2']) && 
				empty($smj_options['website_url_2']) &&
				empty($smj_options['website_name_3']) && 
				empty($smj_options['website_url_3']) &&
				empty($smj_options['website_name_4']) && 
				empty($smj_options['website_url_4']) &&
				empty($smj_options['website_name_5']) && 
				empty($smj_options['website_url_5']) &&
				empty($smj_options['website_name_6']) && 
				empty($smj_options['website_url_6']) &&
				empty($smj_options['website_name_7']) && 
				empty($smj_options['website_url_7']) &&
				empty($smj_options['website_name_8']) && 
				empty($smj_options['website_url_8']) &&
				empty($smj_options['website_name_9']) && 
				empty($smj_options['website_url_9']) &&
				empty($smj_options['website_name_10']) && 
				empty($smj_options['website_url_10'])
			) { 
			echo "<li> Hi.. You have not added the sites yet, go to plugin's option page to add your sites.</li>";
			}
		?>
		
        </ul>
        <div id="mb_credit"><a href="http://www.masterblogster.com" target="_blank">MB Plugins</a></div>
    </div>
</div>
	
<?php
}

function mb_side_menu_jquery_css_jquery() {
    wp_register_style( 'mb_side_menu_jquery_css', plugins_url('mb-side-menu-jquery-css.css', __FILE__) );
	wp_enqueue_style( 'mb_side_menu_jquery_css' );
	
	wp_register_script('mb_side_menu_jquery_js',plugins_url( 'mb-side-menu-jquery-js.js' , __FILE__ ),array( 'jquery' ));
    wp_enqueue_script('mb_side_menu_jquery_js');
	
	wp_register_script('mb_jQueryRotate',plugins_url( 'jQueryRotateCompressed.js' , __FILE__ ),array( 'jquery' ));
    wp_enqueue_script('mb_jQueryRotate');
	
	wp_register_style( 'animate_css', plugins_url('animate.css', __FILE__) );
	wp_enqueue_style( 'animate_css' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'scriptaculous' );
	
}


add_action('wp_head','load_side_menu_jquery');
add_action('wp_enqueue_scripts','mb_side_menu_jquery_css_jquery');

?>