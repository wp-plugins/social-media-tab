<?php
/* 
Plugin Name: Social Media Tab Pro
Version: 1.0
Description: The Social Media Tab plugin display on your blog boxes that has links to your profiles on social sites 
Author: wuSEO
Author URI: http://wusoftware.pl/
Plugin URI: http://wusoftware.pl/
*/  

 
include('config.php');

if($_POST["wu_pro_socialtabs_key"])
 {
  if($_POST["wu_pro_socialtabs_key"] == '827027az7') 
   add_option('wu_pro_socialtabs_activate', 1);
   update_option('wu_pro_socialtabs_activate', 1);
 }
 
 
if (is_admin()) 
 {  

   function wu_pro_socialtabs_create_menu() 
    {     
     global $current_user;

	 if($current_user -> roles[0] == 'administrator')
	  { 
	   add_menu_page("Social Media Tab PRO",   "Social Media", 0, "wu_pro_socialtabs_main", "wu_pro_socialtabs_main", plugins_url('social-media-tab/icon.png'));    
	   add_submenu_page( 'prosocialmediatabs', 'Settings', 'Settings', 0, 'settings', 'wu_pro_socialtabs_main' ); 
	  }
    }    
 }
 
 
  function wu_pro_socialtabs_admin_register_head() {
 
    $url = WP_PLUGIN_URL.'/social-media-tab-pro/style.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
 
  }
  
  function wu_pro_socialtabs_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
  }    

  add_action('init', 'wu_pro_socialtabs_jquery'); 
  add_action('wp_head', 'wu_pro_socialtabs_admin_register_head');
  add_action("admin_menu", "wu_pro_socialtabs_create_menu");    

 
 
  
 
function wu_pro_socialtabs_main(){

 ob_start();
 if(get_option('wu_pro_socialtabs_activate')) 
  include('settings.php');
 else
  include('activate.php');
 $body = ob_get_contents();
 ob_end_clean();
 
 echo $body;
 
}




function wu_pro_socialtabs_print() {
    
	$wu_pro_socialtabs_settings = unserialize(get_option('wu_pro_socialtabs_settings'));
	
	echo '<div class="wu-slider wu-'.$wu_pro_socialtabs_settings["position"].'" style="top:'.$wu_pro_socialtabs_settings["top"].'%;">';
	
	
	if($wu_pro_socialtabs_settings["size"])
	
	foreach ($wu_pro_socialtabs_settings as $key => $value)
	 if(($key<>'position')AND($key<>'size')AND($key<>'top')AND($value<>''))
	  {
	 
	  ?>
	  
		
			
		 <div class="wu-icon">
		  <A href="<?php echo $value; ?>" target="_blank"> <img src="<?php echo WP_PLUGIN_URL; ?>/social-media-tab-pro/png/classic/<?php echo $key; ?>.png" class="wu-<?php echo $wu_pro_socialtabs_settings["size"]; ?>"> </A>	
		 </div>	
		 
	 
		 
		
	  
	 <?php
	  }
	echo '</div>';
}

add_action('wp_footer', 'wu_pro_socialtabs_print');




 
?>