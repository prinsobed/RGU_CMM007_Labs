<?php
/**
 * Created by PhpStorm.
 * User: Obed Kraine, RGU-1314863 , o.k.boachie@rgu.ac.uk
 * Project: ProdPredict V1
 * Date: 8/1/2016
 * Time: 8:02 AM
 */

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Start of Head -->
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | User Data</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" href="../assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/w3.css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/npm.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="jquery.tabledit.js"></script>

</head>
<!-- End of Head -->

<!-- Start of Body of Page -->
<body>
<!-- Start of Navigation or Header Bar -->
<div class="container">
    <header>
    <div class="navbar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase" href="#">ProdPredict <span class="label label-success text-capitalize">V1</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome<?php echo ", "."{$_SESSION['firstname']}"; ?></a></li>
                <li><a href="#">Settings</a></li>
                <li><button type="button" class="btn navbar-btn btn-circle"><a href="../includes/logout.php">Log Out</a></button></li>
            </ul>
        </div>
      </div>
    </nav>
	</div>	
    </header> 
    <!-- End of Navigation or Header Bar -->
    
   	<!-- Start of Breadcrum or Address Bar -->
    <ol class="breadcrumb">
  		<li><a href="admin_home.php">Admin Home </a>/ User Data / View</li>
	</ol>
	<!-- End of Breadcrum or Address Bar -->
    
    <!-- Main Page starts here -->
  	<main>
    	<div class="row2">
  			<div class="col-sm-3">
            <!-- Side Navigation for Fields, Wells and Production -->
           	  <nav>
                	<div class="panel panel-default">
    				<div class="panel-heading">Users</div>
    				<div class="panel-body">
                    	<div class="row2">
  							<ul>
                        	<a class="btn btn-default" href="admin_add_user.php" role="button">Add New</a>
                            </ul>
                            <ul>
              				<a class="btn btn-default" href="admin_view_users.php" role="button">View Existing</a>
            				</ul>	
						</div>
                    </div>
                    </div>
            </nav>

            </div>
            </div>



            <!-- Main Section of Page for Analysis Option Selection, Showing or Editing Data/Graph -->
            <section>
            <div class="col-sm-9">
            	
  					<div class="panel panel-default">
    				<div class="panel-heading">User Data</div>
    				<div class="panel-body">
                    	<div class="row2">
                        <!-- History -->
  							<article>
        <div id="add_user">




<?php

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


// number of results to show per page
$per_page = 3;

// figure out the total pages in the database
if ($result = $mysqli->query("SELECT * FROM users ORDER BY id"))
{
    if ($result->num_rows != 0)
    {
        $total_results = $result->num_rows;
// ceil() returns the next highest integer value by rounding up value if necessary
        $total_pages = ceil($total_results / $per_page);

// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page']))
        {
            $show_page = $_GET['page'];

// make sure the $show_page value is valid
            if ($show_page > 0 && $show_page <= $total_pages)
            {
                $start = ($show_page -1) * $per_page;
                $end = $start + $per_page;
            }
            else
            {
// error - show first set of results
                $start = 0;
                $end = $per_page;
            }
        }
        else
        {
// if page isn't set, show first set of results
            $start = 0;
            $end = $per_page;
        }

// display pagination
        echo "<p><a href='admin_view_users.php'>View All</a> | <b>View Page:</b> ";
        for ($i = 1; $i <= $total_pages; $i++)
        {
            if (isset($_GET['page']) && $_GET['page'] == $i)
            {
                echo $i . " ";
            }
            else
            {
                echo "<a href='admin_view_users_pag.php?page=$i'>$i</a> ";
            }
        }
        echo "</p>";

// display data in table
        echo "<table class='table'><thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Company</th><th>Email</th><th>Password</th><th>Type</th></tr></thead>";


// loop through results of database query, displaying them in the table
        for ($i = $start; $i < $end; $i++)
        {
// make sure that PHP doesn't try to show results that don't exist
            if ($i == $total_results) { break; }

// find specific row
            $result->data_seek($i);
            $row = $result->fetch_row();

// echo out the contents of each row into a table
            echo "<tr>";
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo '<td>' . $row[6] . '</td>';
            echo '<td><a href="admin_edit_user.php?id=' . $row[0] . '">Edit</a></td>';
            echo '<td><a href="delete.php?id=' . $row[0] . '">Delete</a></td>';
            echo "</tr>";
        }

// close table>
        echo "</table>";
    }
    else
    {
        echo "No results to display!";
    }
}
// error with the query
else
{
    echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>
            </table>
            <!-- Code Here -->
        </div>
    </article>
                            
                            
                  
            </div>
			</div>
    		</section>
            
    </main>
    <!-- End of Main of Page -->
    
    <!-- Footer starts here -->
    <footer>
        <div class="row">
  			<div class="col-sm-12">Designed by Obed Kraine Boachie, ©2016.</div>
		</div>
    </footer>
    <!-- End of Footer -->
</div>
</body>
<!-- End of Page Body -->
</html>


