<center>

<h2 style="font-family: 'Titillium Web' !important;
	 color:#fff !important;font-weight:normal;">Activate Social Media Tab. It's Only 1 $ !</h2>

</center>

<?php

 
if($_POST["wu_socialtabs_key"])
 {
  if($_POST["wu_socialtabs_key"] == '827027aza7') 
   add_option('wu_socialtabs_activate2', 1);
 
 
 
 }
?>

 
<div style="position: fixed;margin: 0px;border: 0px;padding: 0px;left: 0px;top: 0px;width: 100%;height: 100%;z-index: -3;background-color:#fff;">
 <img src="<?php echo WP_PLUGIN_URL; ?>/social-media-tab/images/bg.jpg">
</div>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	
<center>		
<!-- <form method="post" target="_blank" action="http://wupress.pl/wpplugins/post.php"> -->
<input type='hidden' name='uid' value='98192'>
<input type='hidden' name='zrodlo' value='socialmediatab'>

<table class="form-table" style="width:500px;">
 
<tr valign="top">
<!-- <th scope="row"><label for="pozycja" style="font-family: 'Titillium Web' !important;color:#fff !important;">Your e-mail: </label></th> -->
<td style="font-family: 'Titillium Web' !important;color:#fff !important;">
 <!-- <input type="text" name="email" size=50><BR>
 <BR>
 Activation is free! After clicking Send, you must confirm your e-mail, and key will be send to you.<BR><BR> 
 
 <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Send key to my e-mail"  /></p>-->
 
 <center>
 
 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6YHTMURR2LTWC">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
</form>
 
 </center>


</td>
</tr>

</table>
 
<BR><BR>
<!-- </form> -->



 

<h2 style="font-family: 'Titillium Web' !important;
	 color:#fff !important;font-weight:normal;">Got key?</h2>

 

<form method="post" action="admin.php?page=wu_socialtabs_main">
 
<table class="form-table" style="width:500px;">
 
<tr valign="top">
<th scope="row"><label for="pozycja" style="font-family: 'Titillium Web' !important;color:#fff !important;">Activation key:</label></th>
<td style="font-family: 'Titillium Web' !important;color:#fff !important;">
 <input type="text" name="wu_socialtabs_key" size=50><BR>
  
  <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Activate!"  /></p>

</td>
</tr>

</table>


</form>

</center>

 