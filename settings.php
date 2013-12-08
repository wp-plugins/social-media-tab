 
<?php



 
$wu_socialtabs_settings = unserialize(get_option('wu_socialtabs_settings'));
 
if($_POST["position"])
 {

    foreach ($wu_socialtabs_settings as $key => $value) {     
 
	 $wu_socialtabs_settings_new[$key] = $_POST[$key];
	
    }
	 
	update_option('wu_socialtabs_settings',serialize($wu_socialtabs_settings_new));

	
	$wu_socialtabs_settings = unserialize(get_option('wu_socialtabs_settings'));
	
 }



?>



<h2>Social Media Tab</h2>

<form method="post" action="admin.php?page=wu_socialtabs_main">
 
<table class="form-table">
 
<tr valign="top">
<th scope="row"><label for="pozycja">Position</label></th>
<td>
<select name="position" id="pozycja">
	<option value='left' <?php if($wu_socialtabs_settings["position"]=='left') echo ' selected '; ?> >Left</option>
	<option value='right' <?php if($wu_socialtabs_settings["position"]=='right') echo ' selected '; ?>>Right</option>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="rozmiar">Icons Size</label></th>
<td>
<select name="size" id="rozmiar">
	<option value='32' <?php if($wu_socialtabs_settings["size"]=='32') echo ' selected '; ?>>32px</option>
	<option value='48' <?php if($wu_socialtabs_settings["size"]=='48') echo ' selected '; ?>>48px</option>
	<option value='64' <?php if($wu_socialtabs_settings["size"]=='64') echo ' selected '; ?>>64px</option>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="top">Top</label></th>
<td>
 <input type="text" name="top" id="top" value="<?php echo $wu_socialtabs_settings["top"]; ?>"> %
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="top">Social media links:</label></th>
<td>
 
</td>
</tr>

<?php
 

foreach ($wu_socialtabs_settings as $key => $value) {

	if(($key<>'position')AND($key<>'size')AND($key<>'top'))
	 {
	  echo '
	   <tr valign="top">
	    <td colspan=2>
		<img src="'.WP_PLUGIN_URL.'/social-media-tab/png/classic/'.$key.'.png" style="width:32px;height:32px;vertical-align:middle;"><input type="text" name="'.$key.'" id="'.$key.'" value="'.$value.'" size=40> 
		</td>
	   </tr>
		
		';
 
	 }
    
}


?>





</table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Update"  /></p></form>


 