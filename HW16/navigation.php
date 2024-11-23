<?php
echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
echo '<ul class="nav navbar-nav">';

if(isset($_GET['page']))
{
$page=$_GET['page'];
switch($page){
		case "work";
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li class="active"><a href="index.php?page=work">Work Info</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=movies">Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case "hobbies";
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li><a href="index.php?page=work">Work Info</a></li>';
			echo '<li class="active"><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=movies">Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case "movies";
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li><a href="index.php?page=work">Work Info</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li class="active"><a href="index.php?page=movies">Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case "contact";
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li><a href="index.php?page=work">Work Info</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=movies">Movies</a></li>';
			echo '<li class="active"><a href="index.php?page=contact">Contact</a></li>';
			break;
		default;
			echo '<li class="active"><a href="index.php">Home</a></li>';
			echo '<li><a href="index.php?page=work">Work Info</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=movies">Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
}
}
else
	
		echo '<li class="active"><a href="index.php">Home</a></li>';
		echo '<li><a href="index.php?page=work">Work Info</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=movies">Movies</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';

 echo ' </ul>';
echo '</div>';
?>