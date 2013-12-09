<h2>Activate Social Media Tab</h2>


<?php

 
if($_POST["wu_socialtabs_key"])
 {
  if($_POST["wu_socialtabs_key"] == '827027az7') 
   add_option('wu_socialtabs_activate', 1);
 
 
 
 }
?>

 
		
		
<form method="post" target="_blank" action="http://wupress.pl/wpplugins/post.php">
<input type='hidden' name='uid' value='98192'>
<input type='hidden' name='zrodlo' value='socialmediatab'>

<table class="form-table">
 
<tr valign="top">
<th scope="row"><label for="pozycja">Your e-mail: </label></th>
<td>
 <input type="text" name="email" size=50><BR>
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