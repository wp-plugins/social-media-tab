<center>

<h2 style="font-family: 'Titillium Web' !important;
	 color:#fff !important;font-weight:normal;">Activate Social Media Tab. It's free!</h2>

</center>

<?php

 
if($_POST["wu_socialtabs_key"])
 {
  if($_POST["wu_socialtabs_key"] == '827027az7') 
   add_option('wu_socialtabs_activate', 1);
 
 
 
 }
?>

 
<div style="position: fixed;margin: 0px;border: 0px;padding: 0px;left: 0px;top: 0px;width: 100%;height: 100%;z-index: -3;background-color:#fff;">
 <img src="<?php echo WP_PLUGIN_URL; ?>/social-media-tab/images/bg.jpg">
</div>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	
<center>		
<form method="post" target="_blank" action="http://wupress.pl/wpplugins/post.php">
<input type='hidden' name='uid' value='98192'>
<input type='hidden' name='zrodlo' value='socialmediatab'>

<table class="form-table" style="width:500px;">
 
<tr valign="top">
<th scope="row"><label for="pozycja" style="font-family: 'Titillium Web' !important;color:#fff !important;">Your e-mail: </label></th>
<td style="font-family: 'Titillium Web' !important;color:#fff !important;">
 <input type="text" name="email" size=50><BR>
 <BR>
 Activation is free! After clicking Send, you must confirm your e-mail, and key will be send to you.
</td>
</tr>

</table>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Send key to my e-mail"  /></p>
<BR><BR>
</form>



 

<h2 style="font-family: 'Titillium Web' !important;
	 color:#fff !important;font-weight:normal;">Got key?</h2>

 

<form method="post" action="admin.php?page=wu_socialtabs_main">
 
<table class="form-table" style="width:500px;">
 
<tr valign="top">
<th scope="row"><label for="pozycja" style="font-family: 'Titillium Web' !important;color:#fff !important;">Activation key:</label></th>
<td style="font-family: 'Titillium Web' !important;color:#fff !important;">
 <input type="text" name="wu_socialtabs_key" size=50><BR>
  
</td>
</tr>

</table>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Activate!"  /></p>

</form>

</center>

 