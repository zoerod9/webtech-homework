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
       <li><a href="index.php">Home</a></li>
		<li><a href="index.php?page=hobbies">Hobbies</a></li>
		<li><a href="index.php?page=work">Work Info</a></li>
		<li><a href="index.php?page=movies">Movies</a></li>
		<li><a href="index.php?page=contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

	<?php
//<!--	Content body of index.php-->
if(isset($_GET['page']))
{
	$page=$_GET['page'];
	switch($page){
		case "work";
			include("work.php");
			break;
		case"hobbies";
			include("hobbies.php");
			break;
		case "movies";
			include("movies.php");
			break;
		case "contact";
			include("contact.php");
			break;
	default:
		include("home.php");
		break;
}
}
	else
		include("home.php");
?>
</body>
</html>