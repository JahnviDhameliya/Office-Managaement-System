<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Record</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<div id="wrapper">

		<!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                       

                    </li>    
                      <li>
                      <a href="addComplaint.php"><i class="fa fa-pencil-square-o "></i>Add New Record</a>
                      </li>  
					  <li>
                      <a href="clientHome.php"><i class="fa fa-credit-card "></i>All Record</a>
                      </li> 
<li>
                      <a href="<?php echo "logout.php" ?>"><i class="fa fa-credit-card "></i>Logout</a>
                      </li> 					  
                </ul>

            </div>
		

        </nav>
		 
		
		
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Record SuccessFully
						</h1>
                    
<?php

include'conith.php';




	    $recipt_no      = $_POST["recipt_no"];
		$client_id      = $_POST["client_id"];
		$month          = $_POST["month"];
		$amount         = $_POST["amount"];
		$due            = $_POST["due"];
		$fine           = $_POST["fine"];
		$agent_id       = $_POST["agent_id"];
		$email       	= $_POST["email"];
		$work       	= $_POST["work"];
		$remark       	= $_POST["remark"];
		$requiements    = $_POST["requiements"];
		$materialdetails= $_POST["materialdetails"];
		$warranty 		= $_POST["warranty"];
		$materialamt 	= $_POST["materialamt"];
		$servicecharge 	= $_POST["servicecharge"];
		$customerremark = $_POST["customerremark"];
		$photo 			= $_POST["photo"]; 
		$status			= $_POST["status"];
		$action			= $_POST["action"];
		
		

$check_due = mysqli_query($conn, "SELECT due FROM payment where due = '$due' ");
if(mysqli_num_rows($check_due) > 0){
    echo('Mobile Number Already Save');
}
			
else{		
		
	$sql = "INSERT INTO payment "."VALUES('$recipt_no', '$client_id', '$month', '$amount', '$due', '$fine', '$agent_id', '$email', '$work', '$remark', '$requiements', '$materialdetails', '$warranty', '$materialamt', '$servicecharge', '$customerremark', '$photo', '$status', '$action')";
	
	if ($conn->query($sql) === true) {
			echo "Success";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
}
	
?>

             </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</body>
</html>
