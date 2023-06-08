<?php
// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
//kyknya ini gaperlu deh
// if (!isset($_SESSION['firstName'])) {
// 	$_SESSION['msg'] = "You have to log in first";
// 	//header('location: login.php');
// }

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php' bukan login index.php
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['firstName']);
	header("location: index.php");
}

function display_header() {
  if (isset($_SESSION['firstName'])) {
      require 'headerFooter/header-login.php';
  } else {
      require 'headerFooter/header.php';
  }
}

function display_footer() {
  require 'headerFooter/footer.php';
}
?>