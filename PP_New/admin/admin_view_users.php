﻿<?php
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

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Type</th>
                </tr>
                </thead>
            <?php
            include "../includes/ajax.php";

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


            $sql = "SELECT id, firstname, lastname, company, email, password, user_type FROM users";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '

                <tbody>
                <tr class="odd">
                    <td id="id" contenteditable="false">' .$row["id"].'</td>
                    <td id="f_name" contenteditable="true">' .$row["firstname"].'</td>
                    <td id="l_name" contenteditable="true">' .$row["lastname"].'</td>
                    <td id="company" contenteditable="true">' .$row["company"].'</td>
                    <td id="email" contenteditable="true">' .$row["email"].'</td>
                    <td id="password" contenteditable="true">' .$row["password"].'</td>
                    <td id="u_type" contenteditable="true">' .$row["user_type"].'</td>
                </tr>

                </tbody>
            ';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
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


