<html>

<head> 
	<title> Form Feedback </title>
	<style type="text/css" title="text/css" media="all">
	.error {
		font-weight:  bold;
		color:  #C00;
	}
	</style>
</head>

<body>

<?php #handle_form.php

//Validate entries and create the shorthand for form data:

if (!empty($_REQUEST['name_first'])) {  //provision for not including "First," "Last"
	$name_first = $_REQUEST['name_first'];
} else {
	$name_first = NULL;
	echo '<p class="error"> You forgot to enter your first name.</p>';
}

if (!empty($_REQUEST['name_last'])) {
	$name_last = $_REQUEST['name_last'];
} else {
	$name_last = NULL;
	echo '<p class="error"> You forgot to enter your last name.</p>';
}

if (!empty($_REQUEST['email'])) {    //set so checks whether a radio button is selected at all first: "isset()" p 49
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="error"> You forgot to enter your email address.</p>';
}
	
$sponsor = $_REQUEST['sponsor'];
$sponsor_name = $_REQUEST['sponsor_name'];
$sponsor_email = $_REQUEST['sponsor_email'];

//probably use arrays to store this info eventually

if (!empty($_REQUEST['equipment'])) {     //set so won't accept default values or "---"
	$equipment = $_REQUEST['equipment'];
} else {
	$equipment = NULL;
	echo '<p class="error"> Please list the equipment you\'d like to borrow.</p>';
}

if (!empty($_REQUEST['inventory_id'])) {
	$inventory_id = $_REQUEST['inventory_id'];
} else {
	$inventory_id = NULL;
	echo '<p class="error"> Please enter the ID number of the equipment you\'d like to borrow.</p>';
}

$date_out; //timestamp of form submission

if (!empty($_REQUEST['return_month'])) {
	$date_due_month = $_REQUEST['return_month'];
} else {
	$date_due_month = NULL;
	echo "<p class=\"error\"> Please enter the month you will return the $equipment.</p>";
}

if (!empty($_REQUEST['return_month'])) {
	$date_due_day = $_REQUEST['return_day'];
} else {
	$date_due_day = NULL;
	echo "<p class=\"error\"> Please enter the day you will return the $equipment.</p>";
}

//Print thank-you message

if ($name_first && $name_last && $email && $equipment && $inventory_id && $date_due_month && $date_due_day) {
	echo "<p> <b> Please confirm the following check-outs: </b><br />
	Equipment: $equipment <br />
	ID: $inventory_id <br />
	Due: $date_due_month $date_due_day <br />
	<br />
	<input type="submit" name="finish_checkout" value= "Confirm"> <br /> <br />
	<a href="http://www.rebeccafish.com/IMS/borrow_item.php">Make changes</a>  </p> 

	<p> A reminder email will be sent to <i> $email </i> 1 day before the equipment is due. </p>
	<p>  Thanks, and please remember to sign a paper contract before you go. </p>"; 
	//last part on new page now
	//submit button won't work because not part of a form at the moment
	//make sure to change link to accomodate new site
	
} else { //missing form value
	//echo '<p class="error">Please go back and fill out the form again.</p>';
	include ('borrow_item.php');
}

?>

</body>
</html>
