﻿<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #0b4afd;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
}
.btn{
	background-color: #0b4afd;
	float: right;
	color:white;
	text-decoration:none;	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	display:none;
	
}
.searchBox{
    
    cursor: pointer;
	font-size: 85%;
	
}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clients</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Information
                      
						
		  

						   
						<button class="btn" align="center" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;"> 
						<a href="addClient.php" class="btn" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;">Add User</a>
						</button>
						</h1>
                    </div>
                </div>
				
                
                <!-- /. ROW  -->
<?php

	$sql = "SELECT client_id,name,birth_date,nid,phone,address,agent_id FROM client order by name";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>USER ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>PHONE</th>\n";
	echo "    <th>ADDRESS</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "    <td>".$row["client_id"]."</td>\n";
		}else {}
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "    <td>".$row["name"]."</td>\n";
		}else {}
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "    <td>".$row["phone"]."</td>\n";
		}else {}
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "    <td>".$row["address"]."</td>\n";
		}else {}
		
		
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "<td>"."<a href='editClient.php?client_id=".$row["client_id"]. "'>Edit</a>"."</td>\n";
		}else {
			
		}

	}
	}
?>

            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>
