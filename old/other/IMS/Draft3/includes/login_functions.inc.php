<?php #login_functions.inc.php

$errors = array();

//Determines and returns an absolute URL
//takes one argument: the page that concludes the URL
//defaults to index.php
function absolute_url ($page = 'index.php') {  //URL is http:// plus the host name plus the directory
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/\\');
	$url .= '/' . $page;
	return $url;
}

//Validates a whitman username
//Returns false if whitman_username was not entered, contains numerals, or is greater than seven characters
function validate_username ($whitman_username = '') {
	if (empty($whitman_username)) {
		return false;
	} /*else if ($whitman_username has numbers) {
		$errors[] = 'The username you entered is not valid.'
		return false;
	} else if ($whitman_username is > 7 characters) {
		$errors[] = 'The maximum length of a Whitman username is 7 characters.'
	*/ else {
		return true;
	}
}

//Queries database to see if whitman_username exists
//Returns true if exists, false if doesn't
//Require database connection
function check_for_user ($database, $whitman_username) {
	$q = "SELECT username FROM Users WHERE username = '$whitman_username'";
	$result = mysql_query($q);  //$database 1st argument in book, not accepted b/c not mysqli? 
	if (mysql_num_rows($result) >= 1) return true;
	else return false;
}

/* Uses check_for_user function to see if user exists.
Returns false if they don't exist.
If they exist, queries database to see if they have borrowed items.
If they do, returns true.
If they don't, returns false.
*/
function check_for_borrowed_items ($database, $whitman_username) {
	if (check_for_user($database, $whitman_username)==true) {
		$q = "SELECT checkout_id FROM Checkouts WHERE username = '$whitman_username' AND date_returned = NULL";  //need to be changed to user_id?
		$result = mysql_query($q);   //$database, 
		if (mysql_num_rows($result) >= 1) return true;
		else return false;
	} else {
		return false;
	}
}

//adds user to database 
function add_user ($database, $whitman_username) {
	$q = "INSERT INTO Users (username) VALUES ('$whitman_username')";
	$result = mysql_query($q);  //$database, 
	if (!$result) {
		return false;
	} else return true;
}

?>
