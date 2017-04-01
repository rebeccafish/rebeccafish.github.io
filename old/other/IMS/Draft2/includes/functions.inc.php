<?php #functions.inc.php

$errors = array();

function absolute_url ($page = 'index.php') {  //URL is http:// plus the host name plus the directory
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/\\');
	$url .= '/' . $page;
	return $url;
}

//returns false if whitman_username was not entered, contains numerals, or is greater than seven characters
function validate_username ($whitman_username = '') {
	if (empty($whitman_username)) {
		$errors[] = 'You forgot to enter your Whitman username.';
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

//queries database to see if whitman_username exists
function check_for_user ($database, $whitman_username) {
	$q = "SELECT username FROM Users WHERE username = '$whitman_username'";
	$result = mysql_query($q);  //$database, 
	if (mysql_num_rows($result) >= 1) return true;
	else return false;
}

/* Checks to see if user exits.
Returns false if they don't exist.
If they exist, queries database to see if they have borrowed items.
If they do, returns true.
If they don't, returns false.
*/
function check_for_borrowed_items ($database, $whitman_username) {
	if (check_for_user($database, $whitman_username)==true) {
		$q = "SELECT checkout_id FROM Checkouts WHERE username = '$whitman_username' AND date_returned = NULL";
		$result = mysql_query($q);   //$database, 
		if (mysql_num_rows($result) >= 1) return true;
		else return false;
	} else {
		$errors[] = 'You have not checked out anything.';
		return false;
	}
}
		

//adds user to database 
function add_user ($database, $whitman_username) {
	$q = "INSERT INTO Users (username) VALUES ('$whitman_username')";
	$result = mysql_query($q);  //$database, 
	if (!$result) {
		$errors[] = 'User could not be added due to a system error.';
		return false;
	} else return true;
}

//returns array of all error messages
function get_errors () {
	return $errors;
}

?>