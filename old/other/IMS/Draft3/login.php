<?php

require_once ('includes/ims_database_connect.php');
require_once ('includes/login_functions.inc.php');

$whitman_username = $_POST['Whitman_username'];

//Logs out of previous sessions
session_start();
if (isset($_SESSION['username'])) {
	$_SESSION = array();
	session_destroy();
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0);
	session_start();
}

//checks username for errors, redirects to index if they exist
if (validate_username($whitman_username)==false) {
	$whitman_username = NULL;
	$errors[] = 'Please enter a valid Whitman username.';
}


else { //validate_username == true 

/* BORROW ITEM
Checks database for user.
If already added, starts session and redirects to Borrow Item page.
If not already added, adds, starts session, and redirects to Borrow Item page.  If adding fails, redirects to index.
*/
	if ($_POST['borrow_item']) {
		if (check_for_user($database, $whitman_username)==true) {
			$_SESSION['username'] = $whitman_username;
			$url = absolute_url('borrow_equipment_page.inc.php');
			header("Location: $url");
			exit();
		}
		else {  //User doesn't exist yet
			if (add_user($database, $whitman_username)==true) {
				$_SESSION['username'] = $whitman_username;
				$url = absolute_url('borrow_equipment_page.inc.php');
				header("Location: $url");
				exit();
			} else { //Could not add user
				$errors[] = 'Sorry, a system error has prevented you from being added to the database.';
			}
		} 	
	}

/* RETURN ITEM
Checks if user borrowed items.
If they have, starts session and redirects to Return Item page. 
If they haven't, redirects to index.
*/
	else if ($_POST['return_item']) {
		if (check_for_borrowed_items($database, $whitman_username)==true) {
			$_SESSION['username'] = $whitman_username;
			$url = absolute_url('return_item.php');
			header("Location: $url");
			exit();
		}
		else {
			$errors[] = 'You have not checked out anything.';
		}
	}

/* RETRIEVE RECORDS
Starts session and redirects to password page
*/
	else if ($_POST['retrieve records']) {
		$_SESSION['username'] = $whitman_username;
		$url = absolute_url('password.php');  //change?
		header("Location: $url");
		exit();
	}

//Error!
	else {
		$errors[] = 'Sorry, a system error has occured.';
	}
}

include ('login_page.inc.php');

?>