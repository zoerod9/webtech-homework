<?php
include("functions.php");
$dblink=db_connect("contact_data");
$sql="Select * from `contact_info`";
$results=$dblink->query($sql) or
	die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
echo '<section id="home">';
echo '<div class="container">';
echo '<h2>Database Entries</h2>';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Auto ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th><th>Password</th><th>Comments</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($info=$results->fetch_array(MYSQLI_ASSOC))
{
	echo "<tr>";
	echo '<td>'.$info['auto_id'].'</td>';
	echo "<td>$info[first_name]</td>";
	echo "<td>$info[last_name]</td>";
	echo "<td>$info[email]</td>";
	echo "<td>$info[phone]</td>";
	echo "<td>$info[username]</td>";
	echo "<td>$info[password]</td>";
	echo "<td>$info[comments]</td>";
	echo "</tr>";
	
}
echo '</tbody>';
echo '</table>';
echo '</div>';
?>