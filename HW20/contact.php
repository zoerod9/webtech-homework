<!DOCTYPE html>
<html>
<body>

<!--END HEADING-->
<?php
// create session for this client connection
session_start(); // on server's temp location, create file that can be written to for this client
	// turn on php to expose all errors/warnings
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$errors[] = array();
	$firstname = NULL;
	$lastname = NULL;
	$email = NULL;
	$phonenumber = NULL;
	$username = NULL;
	$password = NULL;
	$comments = NULL;
	
if ( !isset( $_POST[ 'submit' ] ) ) {
  echo '<div align="center" bgcolor="c0e4f5"><h2>Please fill out the contact form below</h2></div>';
  echo '<div class="container">';
  echo '<form action="" method="post">';

  //*************************************FIRST NAME**********************************
  if ( isset( $_GET[ 'fnameErr' ] ) ) {
    if ( $_GET[ 'fnameErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="firstNameGroup">
				<label class="control-label">First Name:</label>
				<input type="text" class="form-control" id="firstName" name="firstName">
				<span class="help-block" id="firstNameStatus">First name can not be blank</span></div>';
    } else if ( $_GET[ 'fnameErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="firstNameGroup">';
      echo '<label class="control-label">First Name:</label>';
      echo '<input type="text" class="form-control" id="firstName" name="firstName" value="' . $_SESSION[ 'firstName' ] . '">';
      echo '<span class="help-block" id="firstNameStatus">First name can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'firstName' ] ) ) {
      echo '<div class="form-group has-success" id="firstNameGroup">';
      echo '<label class="control-label">First Name:</label>';
      echo '<input type="text" class="form-control" id="firstName" name="firstName" value="' . $_SESSION[ 'firstName' ] . '">';
      echo '<span class="help-block" id="firstNameStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '<div class="form-group" id="firstNameGroup">
					<label class="control-label">First Name:</label>
					<input type="text" class="form-control" id="firstName" name="firstName">
					<span class="help-block" id="firstNameStatus"></span>
				</div>';
  }

  //*************************************LAST NAME*************************************
  if ( isset( $_GET[ 'lnameErr' ] ) ) {
    if ( $_GET[ 'lnameErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="lastNameGroup">
					<label class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName">
					<span class="help-block" id="lastNameStatus">Last name can not be blank</span></div>';
    } else if ( $_GET[ 'lnameErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="lastNameGroup">
					<label class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName" value="' . $_SESSION[ 'lastName' ] . '">
					<span class="help-block" id="lastNameStatus">Last name can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'lastName' ] ) ) {
      echo '<div class="form-group has-success" id="lastNameGroup">';
      echo '<label class="control-label">Last Name:</label>';
      echo '<input type="text" class="form-control" id="lastName" name="lastName" value="' . $_SESSION[ 'lastName' ] . '">';
      echo '<span class="help-block" id="lastNameStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '<div class="form-group" id="lastNameGroup">
					<label class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName">
					<span class="help-block" id="lastNameStatus"></span>
				</div>';
  }
  //********************EMAIL*************************************
  if ( isset( $_GET[ 'emailErr' ] ) ) {
    if ( $_GET[ 'emailErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="emailGroup">
					<label class="control-label">Email Address:</label>
					<input type="text" class="form-control" id="email" name="email">
					<span class="help-block" id="emailStatus">Email can not be blank</span>
				</div>';
    } else if ( $_GET[ 'emailErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="emailGroup">
					<label class="control-label">Email Address:</label>
					<input type="text" class="form-control" id="email" name="email" value="' . $_SESSION[ 'email' ] . '">
					<span class="help-block" id="emailStatus">Email Address can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'email' ] ) ) {
      echo '<div class="form-group has-success" id="emailGroup">';
      echo '<label class="control-label">Email Address:</label>';
      echo '<input type="text" class="form-control" id="lastName" name="email" value="' . $_SESSION[ 'email' ] . '">';
      echo '<span class="help-block" id="emailStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '<div class="form-group" id="emailGroup">
					<label class="control-label">Email Address:</label>
					<input type="text" class="form-control" id="email" name="email">
					<span class="help-block" id="emailStatus"></span>
				</div>';
  }
  //********************PHONE*************************************
  if ( isset( $_GET[ 'phoneErr' ] ) ) {
    if ( $_GET[ 'phoneErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="phoneGroup">
					<label class="control-label">Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone">
					<span class="help-block" id="phoneStatus">Phone Number can not be blank</span>
				</div>';
    } else if ( $_GET[ 'phoneErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="phoneGroup">
					<label class="control-label">Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone" value="' . $_SESSION[ 'phone' ] . '">
					<span class="help-block" id="phoneStatus">Phone Number can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'phone' ] ) ) {
      echo '<div class="form-group has-success" id="phoneGroup">';
      echo '<label class="control-label">Phone Number:</label>';
      echo '<input type="text" class="form-control" id="phone" name="phone" value="' . $_SESSION[ 'phone' ] . '">';
      echo '<span class="help-block" id="phoneStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '<div class="form-group" id="phoneGroup">
					<label class="control-label">Phone Number:</label>
					<input type="text" class="form-control" id="phone" name="phone">
					<span class="help-block" id="phoneStatus"></span>
				</div>';
  }
  //********************USERNAME*************************************
  if ( isset( $_GET[ 'usernameErr' ] ) ) {
    if ( $_GET[ 'usernameErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="usernameGroup">
				<label class="control-label">First Name:</label>
				<input type="text" class="form-control" id="username" name="username">
				<span class="help-block" id="usernameStatus">Username can not be blank</span></div>';
    } else if ( $_GET[ 'usernameErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="usernameGroup">';
      echo '<label class="control-label">Username:</label>';
      echo '<input type="text" class="form-control" id="username" name="username" value="' . $_SESSION[ 'username' ] . '">';
      echo '<span class="help-block" id="usernameStatus">Username can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'username' ] ) ) {
      echo '<div class="form-group has-success" id="usernameGroup">';
      echo '<label class="control-label">Username:</label>';
      echo '<input type="text" class="form-control" id="username" name="username" value="' . $_SESSION[ 'username' ] . '">';
      echo '<span class="help-block" id="usernameStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '	<div class="form-group" id="usernameGroup">
					<label class="control-label">Username:</label>
					<input type="text" class="form-control" id="username" name="username">
					<span class="help-block" id="usernameStatus"></span>
				</div>';
  }
  //********************PASSWORD*************************************
  if ( isset( $_GET[ 'passwordErr' ] ) ) {
    if ( $_GET[ 'passwordErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="passwordGroup">
				<label class="control-label">Password:</label>
				<input type="text" class="form-control" id="password" name="password">
				<span class="help-block" id="passwordStatus">Password can not be blank</span></div>';
    } else if ( $_GET[ 'passwordErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="passwordGroup">';
      echo '<label class="control-label">Password:</label>';
      echo '<input type="text" class="form-control" id="password" name="password" value="' . $_SESSION[ 'password' ] . '">';
      echo '<span class="help-block" id="passwordStatus">Password can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'password' ] ) ) {
      echo '<div class="form-group has-success" id="passwordGroup">';
      echo '<label class="control-label">Password:</label>';
      echo '<input type="text" class="form-control" id="password" name="password" value="' . $_SESSION[ 'password' ] . '">';
      echo '<span class="help-block" id="passwordStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '	<div class="form-group" id="passwordGroup">
					<label class="control-label">Password:</label>
					<input type="text" class="form-control" id="password" name="password">
					<span class="help-block" id="passwordStatus"></span>
				</div>';
  }
  //********************COMMENTS*************************************
  if ( isset( $_GET[ 'commentsErr' ] ) ) {
    if ( $_GET[ 'commentsErr' ] == "null" ) {
      echo '<div class="form-group has-error" id="commentsGroup">
				<label class="control-label">Comments:</label>
				<input type="text" class="form-control" id="comments" name="comments">
				<span class="help-block" id="commentsStatus">Comments can not be blank</span></div>';
    } else if ( $_GET[ 'commentsErr' ] == "invalid" ) {
      echo '<div class="form-group has-error" id="commentsGroup">';
      echo '<label class="control-label">Comments:</label>';
      echo '<input type="text" class="form-control" id="comments" name="comments" value="' . $_SESSION[ 'comments' ] . '">';
      echo '<span class="help-block" id="commentsStatus">Comments can not contain invalid characters</span></div>';
    }
  } else {
    //success state
    if ( isset( $_SESSION[ 'comments' ] ) ) {
      echo '<div class="form-group has-success" id="commentsGroup">';
      echo '<label class="control-label">Comments:</label>';
      echo '<input type="text" class="form-control" id="comments" name="comments" value="' . $_SESSION[ 'comments' ] . '">';
      echo '<span class="help-block" id="commentsStatus"></span>';
      echo '</div>';
    } else
    //default state
      echo '	<div class="form-group" id="commentsGroup">
					<label class="control-label">Comments:</label>
					<textarea name="comments" id="comments" class="form-control"></textarea>
					<span class="help-block" id="commentsStatus"></span>
				</div>';
  }

  echo '</div>
				<button class="btn btn-default" type="submit" name="submit" value="submit">Submit</button>
				</form>';
  echo '</div>';

} else {
  // ****FIRST NAME****
  $firstname = addslashes($_POST[ 'firstName' ]);
  // check for null
  if ( $firstname == NULL )
    $errors[] = "fnameErr=null";
  else if ( !preg_match( '/^(?=.{2,})([a-zA-Z\'-]+)$/', $firstname ) ) {
    $errors[] = "fnameErr=invalid";
    $_SESSION[ 'firstName' ] = $firstname;
  } else
    $_SESSION[ 'firstName' ] = $firstname; //data was not null, store in session super global

  // ****LAST NAME****
  $lastname = addslashes($_POST[ 'lastName' ]);
  if ( $lastname == NULL )
    $errors[] = "lnameErr=null";
  else if ( !preg_match( '/^(?=.{2,})([a-zA-Z\'-]+)$/', $lastname ) ) {
    $errors[] = "lnameErr=invalid";
    $_SESSION[ 'lastName' ] = $lastname;
  } else
    $_SESSION[ 'lastName' ] = $lastname; //data was not null, store in session super global

  // ****EMAIL****
  $email = $_POST[ 'email' ];
  if ( $email == NULL )
    $errors[] = "emailErr=null";
  else if ( !preg_match( '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email ) ) {
    $errors[] = "emailErr=invalid";
    $_SESSION[ 'email' ] = $email;
  } else
    $_SESSION[ 'email' ] = $email; //data was not null, store in session super global

  // ****PHONE NUMBER****
  $phonenumber = $_POST[ 'phone' ];
  if ( $phonenumber == NULL )
    $errors[] = "phoneErr=null";
  else if ( !preg_match( '/^\d{10}$/', $phonenumber ) ) {
    $errors[] = "phoneErr=invalid";
    $_SESSION[ 'phone' ] = $phonenumber;
  } else
    $_SESSION[ 'phone' ] = $phonenumber; //data was not null, store in session super global

  // ****USERNAME****
  $username = $_POST[ 'username' ];
  if ( $username == NULL )
    $errors[] = "usernameErr=null";
  else if ( !preg_match( '/^(?=.{2,})([a-zA-Z\'-]+)$/', $username ) ) // constraints not specified, so I'm using the same for 1st and last name
  {
    $errors[] = "usernameErr=invalid";
    $_SESSION[ 'username' ] = $username;
  } else
    $_SESSION[ 'username' ] = $username; //data was not null, store in session super global

  // ****PASSWORD****
  $password = $_POST[ 'password' ];
  if ( $password == NULL )
    $errors[] = "passwordErr=null";
  else
    $_SESSION[ 'password' ] = $password; //data was not null, store in session super global

  // ****COMMENTS****
  $comments = addslashes($_POST[ 'comments' ]);
  if ( $comments == NULL )
    $errors[] = "commentsErr=null";
  else
    $_SESSION[ 'comments' ] = $comments; //data was not null, store in session super global
}
// Errors always has at least 1 member -- string "Array"
// so checking for length greater than 1
if ( count( $errors ) > 1 ) {
  $errorString = implode( "&", $errors );
  header( "Location: contact.php?$errorString" );
} else {

  //in order to connect to DB, we need host, db_user, db_password, db name
  include("functions.php");
	$dblink = db_connect("contact_data");
	
  //set up sql to insert data
  $sql = "Insert into `contact_info` (`first_name`, `last_name`, `email`, `phone`, `username`, `password`, `comments`) values ('$firstname', '$lastname', '$email', '$phonenumber', '$username', '$password', '$comments')";
  //call the query method for mysqli object in $dblink, or generate an error if the query is not successfull
  $dblink->query( $sql )or
  die( "<div class=\"section-title\"><h2>Something went wrong with $sql<br>" . $dblink->error . "</h2></div>" );
  echo '<div class="section-title"><h2>Data sent ot database!</h2></div>';
  //  echo '<h1>Please fill out the contact form below</h1>';
  //  echo "<p>First Name: $firstname</p>";
  //  echo "<p>Last Name: $lastname</p>";
  //  echo "<p>Email Address: $email</p>";
  //	echo "<p>Phone Number: $phonenumber</p>";
  //	echo "<p>Username: $username</p>";
  //	echo "<p>Password: $password</p>";
  //	echo "<p>Comment: $comments</p>";
}

?>
</body>
</html>