<h2>Activate Social Media Tab</h2>


<?php

if($_POST["wu_socialtabs_email"])
 {
 
	$sekretny_zrodlowej = '50677a48a09883c49bf2438700d393a0';
	$uid = '98192';
	$email = $_POST["wu_socialtabs_email"];
	$kod = md5($email.$sekretny_zrodlowej);
	$url = 'http://www.implebot.pl/get.php?uid='.$uid.'&email='.$email.'&kod='.$kod.'&zrodlo=socialtabs&ip='.$_SERVER["REMOTE_ADDR"].'&imie=SocialMediaTab';
	 
	 
	 
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	$file = curl_exec($ch);
	curl_close($ch);

	$alert1='E-mail was send. Click the activation link, key will be send in next message.';
}
	
	
	
	
if($_POST["wu_socialtabs_key"])
 {
  if($_POST["wu_socialtabs_key"] == '827027az7') 
   add_option('wu_socialtabs_activate', 1);
 
 
 
 }
?>



<form method="post" action="admin.php?page=wu_socialtabs_main">
 
<table class="form-table">
 
<tr valign="top">
<th scope="row"><label for="pozycja">Your e-mail: </label></th>
<td>
 <input type="text" name="wu_socialtabs_email" size=50><BR>
 <B><?php echo $alert1; ?></B><BR>
 Activation is free! After clicking Send, you must confirm your e-mail, and key will be send to you.
</td>
</tr>

</table>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Send"  /></p>
<BR><BR>
</form>



<form method="post" action="admin.php?page=wu_socialtabs_main">
 
<table class="form-table">
 
<tr valign="top">
<th scope="row"><label for="pozycja">Activation key:</label></th>
<td>
 <input type="text" name="wu_socialtabs_key" size=50><BR>
  
</td>
</tr>

</table>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Activate"  /></p>

</form>



<?php





?>