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
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--END HEADING-->
<div align="center" bgcolor="c0e4f5">
  <h2>Contact Form Results</h2>
</div>
<?php
$empty = "";
$firstName = $_GET[ 'firstName' ];
$lastName = $_GET[ 'lastName' ];
$email = $_GET[ 'email' ];
$phone = $_GET[ 'phone' ];
$username = $_GET[ 'email' ];
$password = $_GET[ 'password' ];
$submit = $_GET[ 'submit' ];


// if submit value is empty OR any fields are empty
if ( empty( $submit ) || ( empty( $firstName ) || empty( $lastName ) || empty( $email ) || empty( $phone ) || empty( $username ) || empty( $password ) ) ) {
  echo "<h2>Please fill out the form from the contact page first<h2>";
} else {
  echo "<h3>First Name: $firstName</h3>";
  echo "<h3>Last Name: $lastName</h3>";
  echo "<h3>Email: $email</h3>";
  echo "<h3>Username: $username</h3>";
  echo "<h3>Password: $password</h3>";
}
?>
</body>
</html>