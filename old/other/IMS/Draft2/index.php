<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IMS Checkout</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<php? require_once ('includes/functions.inc.php'); ?>
</head>

<body>

<div id="top_wrapper">
</div>

<div id="wrapper">
<div id="index_header">
<img src="images/ims_checkout.png" alt="IMS Checkout"/>
</div>
<div id="form_box">
<form name="Whitman_username" action="go_to_page.php" method="post">
<label for: "whitman_username" class="label"> Whitman username: </label> <input type="text" name="Whitman_username" size= "10" maxlength="8" class="form_field"/>
<?php
if (!empty($errors)) echo '<span class="error"> <br/> "$errors" </span>';
?>
<div id="button_list">
<button class="button1" type="submit" name="borrow_item" value="borrow_item"> <span class="label"> <strong class="highlight">BORROW</strong><br /> equipment </span></button>
<button class="button2" type="submit" name="return_item" value="return_item"> <span class="label"> <strong class="highlight">RETURN</strong><br /> equipment </span></button>
<button class="button3" type="submit" name="retrieve_records" value="retrieve_records"> <span class="label">retrieve<br /> records </span></button>
</div>


</form>
</div>
</div>

<div id="bottom_wrapper">
</div>
</body>
</html>