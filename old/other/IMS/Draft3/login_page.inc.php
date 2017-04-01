<?php #login_page.inc.php

//Prints errors associated with logging in and creates the login page

$page_title = 'Login';

//Include header and title graphic
require ('header.html');
require ('title_login.html');

//Print any errors
if (!empty($errors)) {
	echo '<span class="error"> <br/>';
	foreach ($errors as $msg) {
		echo "$msg<br/>\n</span>";
	}
}


//Print form
?>

<div id="box">
<form name="Whitman_username" action="login.php" method="post">
<fieldset>
<label> <span class="question"> Whitman username: </span></label> 
<input type="text" name="Whitman_username" size= "10" maxlength="8" class="username_field"/>

<div id="button_list">
<button class="borrow_item" type="submit" name="borrow_item" value="borrow_item"> <span class="label"> <strong class="highlight">BORROW</strong><br /> equipment </span></button>
<button class="return_item" type="submit" name="return_item" value="return_item"> <span class="label"> <strong class="highlight">RETURN</strong><br /> equipment </span></button>
<button class="retrieve_records" type="submit" name="retrieve_records" value="retrieve_records"> <span class="label">retrieve<br /> records </span></button>
</div>

</fieldset>
</form>
</div>

<?php 
//Include footer
require ('footer.html');
?>