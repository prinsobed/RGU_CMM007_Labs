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
    <title>ProdPredict | Edit Imported Production</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" href="../../assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dropzone.css">
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
	<script src="../../assets/js/npm.js"></script>
    <script src="../../assets/js/dropzone.js"></script>
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
                <li><button type="button" class="btn navbar-btn btn-circle"><a href="../../includes/logout.php">Log Out</a></button></li>
            </ul>
        </div>
      </div>
    </nav>
	</div>	
    </header> 
    <!-- End of Navigation or Header Bar -->
    
   	<!-- Start of Breadcrum or Address Bar -->
    <ol class="breadcrumb">
  		<li><a href="../home.php">Home</a> / Imported Production Data / Edit</a></li>
	</ol>
	<!-- End of Breadcrum or Address Bar -->
    
    <!-- Main Page starts here -->
  	  	<main>
    	<div class="row2">
  			<div class="col-sm-3">
            <!-- Side Navigation for Fields, Wells and Production -->
            	<nav>
                	<div class="panel panel-default">
    				<div class="panel-heading">Production</div>
    				<div class="panel-body">
                    	<div class="row2">
                       	  <ul>
                            <a class="btn btn-default" href="import_production.php" role="button">Import File</a>
                            </ul>
  							<ul>
                        	<a class="btn btn-default" href="add_production.php" role="button">Add New</a>
                            </ul>
                            <ul>
              				<a class="btn btn-default" href="view_production.php" role="button">View Existing</a>
            				</ul>	
						</div>
                    </div>
                    </div>
                    
                    <div class="panel panel-default">
    				<div class="panel-heading">Fields</div>
    				<div class="panel-body">
                    	<div class="row2">
  							<ul>
                            <a class="btn btn-default" href="../field/add_field.php" role="button">Add New</a>
                            </ul>
                            <ul>
              				<a class="btn btn-default" href="../field/view_fields.php" role="button">View Existing</a>
            				</ul>	
						</div>
                    </div>
                    </div>
                    
                    <div class="panel panel-default">
    				<div class="panel-heading">Well</div>
    				<div class="panel-body">
                    	<div class="row2">
  							<ul>
                        	<a class="btn btn-default" href="../well/add_well.php" role="button">Add New</a>
                            </ul>
                            <ul>
              				<a class="btn btn-default" href="../well/view_wells.php" role="button">Add Existing</a>
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
    				<div class="panel-heading">Edit Imported Production</div>
    				<div class="panel-body">
                    	<div class="row2">
                        <!-- History -->
  							<article>
        <div id="main_feature">


            <!-- Code Here -->


            <?php
            ini_set("display_errors",1);
            require_once 'excel_reader2.php';
            require_once 'config.php';

            $data = new Spreadsheet_Excel_Reader("uploads/example.xls");

            echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";

            $html="<table border='1'>";
            for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
            {
                if(count($data->sheets[$i][cells])>0) // checking sheet not empty
                {
                    echo "Sheet $i:<br /><br />Total rows in sheet $i  ".count($data->sheets[$i][cells])."<br />";
                    for($j=1;$j<=count($data->sheets[$i][cells]);$j++) // loop used to get each row of the sheet
                    {
                        $html.="<tr>";
                        for($k=1;$k<=count($data->sheets[$i][cells][$j]);$k++) // This loop is created to get data in a table format.
                        {
                            $html.="<td>";
                            $html.=$data->sheets[$i][cells][$j][$k];
                            $html.="</td>";
                        }
                        $data->sheets[$i][cells][$j][1];
                        $eid = $eid = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][1]);
                        $name = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][2]);
                        $email = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][3]);
                        $dob = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
                        $query = "insert into excel(eid,name,email,dob) values('".$eid."','".$name."','".$email."','".$dob."')";

                        mysqli_query($connection,$query);
                        $html.="</tr>";
                    }
                }

            }

            $html.="</table>";
            echo $html;
            echo "<br />Data Inserted in dababase";
            ?>
   
            
        </div>
    </article>
                            
                            
                  
            </div>
			</div>
            </div></div>
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


