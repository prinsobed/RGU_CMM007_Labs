<?php
if(!empty($_POST))
{
	//database settings
	$servername="ap-cdbr-azure-east-c.cloudapp.net"; // Host name
	$username="bed8c15b456030"; // Mysql username
	$password="58380471"; // Mysql password
	$dbname="db_prodpredict"; // Database name

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	foreach($_POST as $field_name => $val)
	{
		//clean post values
		$field_userid = strip_tags(trim($field_name));
		$val = strip_tags(trim(mysql_real_escape_string($val)));
		
		//from the fieldname:user_id we need to get user_id
		$split_data = explode(':', $field_userid);
		$user_id = $split_data[1];
		$field_name = $split_data[0];
		if(!empty($user_id) && !empty($field_name) && !empty($val))
		{
			//update the values
			mysql_query("UPDATE user_details SET $field_name = '$val' WHERE user_id = $user_id") or mysql_error();
			echo "Updated";
		} else {
			echo "Invalid Requests";
		}
	}
} else {
	echo "Invalid Requests";
}
?>