<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<section id="home">';
echo '<div class="container">';
echo '<h2>Database Entries</h2>';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Auto ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th><th>Password</th><th>Comments</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
echo '</div>';
?>
<script>
	function refresh_data(){
		$.ajax({
			type:'post',
			url: 'https://ec2-3-14-245-222.us-east-2.compute.amazonaws.com/HW20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){refresh_data();},1000); //call newly created refresh_data funciton every 500 ms
</script>