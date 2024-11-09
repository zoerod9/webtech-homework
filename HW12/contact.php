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
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Zoe Rodriguez</a>
    </div>

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
    <div align="center" bgcolor="c0e4f5"><h2>Please fill out the contact form below</h2></div>

	<form action="results.php" method="get">
	<!--validation stuff 10/17-->
	<div class="container">
		<div class="form-group" id="firstNameGroup">
			<label class="control-label">First Name:</label>
			<input type="text" class="form-control" id="firstName" name="firstName">
			<span class="help-block" id="firstNameStatus"></span>
		</div>
		<div class="form-group" id="lastNameGroup">
			<label class="control-label">Last Name:</label>
			<input type="text" class="form-control" id="lastName" name="lastName">
			<span class="help-block" id="lastNameStatus"></span>
		</div>
		<div class="form-group" id="emailGroup">
			<label class="control-label">Email Address:</label>
			<input type="text" class="form-control" id="email" name="email">
			<span class="help-block" id="emailStatus"></span>
		</div>
		<div class="form-group" id="phoneGroup">
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
		</form>
<!--
    <div colspan="5" class="box">
		<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">School email</h3>
  </div>
  <div class="panel-body">
    zoe.rodriguez2@my.utsa.edu
  </div>
			
	</div>
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">GitHub</h3>
  </div>
  <div class="panel-body">
    zoerod9
  </div>
	</div>
		<div><p>I personally prefer to not be spoken to but professionally, please feel free to contact me anytime.</p></div>
		<img class="image" src="images/hide-the-pain-harold-phone-meme-2.jpg"/>
	</div>
-->
</body>
</html>
<script src="assets/js/formValidation.js"></script>