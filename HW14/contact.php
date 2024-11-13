<!DOCTYPE html>
<html>
<head>
<title>Zoe's website</title>
<link href="assets/css/styles.css" rel="stylesheet"/>
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
<script src="assets/js/bootstrap.js"></script>
</head>
<body>
<!--HEADING-->
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"> <a class="navbar-brand" href="index.html">Zoe Rodriguez</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="hobbies.html">Hobbies</a></li>
        <li><a href="work.html">Work Info</a></li>
        <li><a href="movies.html">Movies</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--END HEADING-->
<?php
	// create session for this client connection
	session_start();// on server's temp location, create file that can be written to for this client
if ( !isset( $_POST[ 'submit' ] ) )
{
  echo '<div align="center" bgcolor="c0e4f5"><h2>Please fill out the contact form below</h2></div>';
  echo '<form action="" method="post">';

  //			<!--validation stuff 10/17-->
  if ( isset( $_GET[ 'fnameErr' ] ))
  {
	  if ($_GET['fnameErr']=="null")
	  {
		  echo '<div class="container"><div class="form-group has-error" id="firstNameGroup">
				<label class="control-label">First Name:</label>
				<input type="text" class="form-control" id="firstName" name="firstName">
				<span class="help-block" id="firstNameStatus">First name can not be blank</span></div>';
	  }
	else if($_GET['fnameErr']=="invalid")
	{
		echo '<div class="container"><div class="form-group has-error" id="firstNameGroup">';
		echo '<label class="control-label">First Name:</label>';
		echo '<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
		echo '<span class="help-block" id="firstNameStatus">First name can not contain invalid characters</span></div>';
		}
	}
    else
	{
		//success state
		if (isset($_SESSION['firstName']))
		{
			echo '<div class="container"><div class="form-group has-success" id="firstNameGroup">';
			echo '<label class="control-label">First Name:</label>';
			echo '<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
			echo '<span class="help-block" id="firstNameStatus"></span>';
			echo '</div>';
		}
		else
		//default state
      echo '<div class="container"><div class="form-group" id="firstNameGroup">
					<label class="control-label">First Name:</label>
					<input type="text" class="form-control" id="firstName" name="firstName">
					<span class="help-block" id="firstNameStatus"></span>
				</div>'; 
	}
	if (isset( $_GET[ 'lnameErr' ] ))
	  echo '<div class="form-group has-error" id="lastNameGroup">
					<label class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName">
					<span class="help-block" id="lastNameStatus">Last name can not be blank</span></div>';
	else
	  echo '<div class="form-group" id="lastNameGroup">
					<label class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName">
					<span class="help-block" id="lastNameStatus"></span>
				</div>';
	if (isset($_GET['emailErr']))
		echo		'<div class="form-group has-error" id="emailGroup">
					<label class="control-label">Email Address:</label>
					<input type="text" class="form-control" id="email" name="email">
					<span class="help-block" id="emailStatus">Email can not be blank</span>
				</div>';
	else
		echo '<div class="form-group" id="emailGroup">
					<label class="control-label">Email Address:</label>
					<input type="text" class="form-control" id="email" name="email">
					<span class="help-block" id="emailStatus"></span>
				</div>';
			echo '<div class="form-group" id="phoneGroup">
					<label class="control-label">Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone">
					<span class="help-block" id="phoneStatus"></span>
				</div>
				<div class="form-group" id="usernameGroup">
					<label class="control-label">Username:</label>
					<input type="text" class="form-control" id="username" name="username">
					<span class="help-block" id="usernameStatus"></span>
				</div>
				<div class="form-group" id="passwordGroup">
					<label class="control-label">Password:</label>
					<input type="text" class="form-control" id="password" name="password">
					<span class="help-block" id="passwordStatus"></span>
				</div>
				<div class="form-group" id="commentsGroup">
					<label class="control-label">Comments:</label>
					<textarea id="comments" class="form-control"></textarea>
					<span class="help-block" id="commentsStatus"></span>
				</div>
			</div>
				<button class="btn btn-default" type="submit" name="submit" value="submit">Submit</button>
				</form>';

  }
  else {
	$errors=array();
    $firstname = $_POST[ 'firstName' ];
    // check for null
    if ( $firstname == NULL )
		$errors[]="fnameErr=null";
	  else if(!preg_match('/^[a-zA-Z]$/',$firstname))
	  {
		$errors[]="fnameErr=invalid";
		$_SESSION['firstName']=$firstname;
	  }
	  else
		  $_SESSION['firstName']=$firstname;//data was not null, store in session super global
    $lastname = $_POST[ 'lastName' ];
	  if ( $lastname == NULL )
	  	$errors[]="lnameErr=null";
    $email = $_POST[ 'email' ];
	  if ( $email == NULL )
	  	$errors[]="emailErr=null";
	$phonenumber = $_POST[ 'phone' ];
	  if ( $phonenumber == NULL )
	  	$errors[]="phoneErr=null";
	$username = $_POST[ 'username' ];
	  if ( $username == NULL )
	  	$errors[]="usernameErr=null";
	$password = $_POST[ '$password' ];
	  if ( $password == NULL )
	  	$errors[]="passwordErr=null";
	  
	  if(count($errors)>0)
	  {
		  $errorString=implode("&",$errors);
		  header("Location: contact.php?$errorString");
	  }
	  else
	  {
		echo '<h1>Please fill out the contact form below</h1>';
		echo "<p>First Name: $firstname</p>";
		echo "<p>Last Name: $lastname</p>";
		echo "<p>Email: $email</p>";
	  }
  }
  ?>
</body>
</html>