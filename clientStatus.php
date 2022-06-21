<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	
}


input[type=submit]:hover {
    background-color: #45a049;
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
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Status</title>
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
<?php include 'header.php'; 
$username = $_SESSION["username"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User's Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$client_id = $_GET["client_id"];
	}
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
			<img style="display:none" class="profile-user-img img-responsive"  width="200px" height="200px" src="<?php echo "../service/uploads/".$images ?>" alt="Client has no profile picture">
<?php
		
		echo "<label for=\"fname\">PASSWORD</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_password\" placeholder=\"client password..\" value=\"$row[client_password]\">";
		
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"clients Name..\" value=\"$row[name]\">";
		
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Phone..\" value=\"$row[phone]\">";
		
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Address..\" value=\"$row[address]\">";
		
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$a_id  = $row["agent_id"];
		$agent_id = $row["agent_id"];
		echo "<a href='editClient.php?client_id=".$c_id."'>Edit User</a>\n";
    }
		echo "<br>\n";
		
	    echo "<br>\n";
	
	
	
	

echo '</div>';
	
	
	echo "<br>\n";
	echo "<br>\n";
		         
	
                       //prints payments 
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    
	
	echo "    <th>DATE</th>\n";
    echo "    <th>NAME</th>\n";
    //echo "    <th>ADDRESS</th>\n";
	echo "    <th>MOBILE</th>\n";
	echo "    <th>STATUS</th>\n";
    echo "    <th>UPDATE</th>\n";
	
    
    echo "  </tr>";
	echo "<br>\n";
	
	echo '<b>RECORD</b>';  echo '&nbsp';echo '&nbsp';echo '&nbsp'; echo "";
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		
		
	
		echo "    <td>".$row["action"]."</td>\n";
		echo "    <td>".$row["month"]."</td>\n";
		echo "    <td>".$row["due"]."</td>\n";
		echo "    <td>".$row["status"]."</td>\n";
		
		if($row["agent_id"]== $username){
			echo "<td>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}
		
		echo "  </tr>";
	}
	}
	
	echo "</table>\n";

	if($agent_id== $username || "ahmed" == $username){
			echo "<td>"."<a href='deleteClient.php?client_id=".$client_id. "'>DELETE USER</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='deleteClient.php?client_id=".$row["client_id"]. "'>DELETE USER</a>"."</td>\n";
		}
	

echo "\n";


	
	
	   //   PRINTS AGEENTS INFO
	$sql = "SELECT * FROM agent where agent_id='$a_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>COMPANY ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BRANCH</th>\n";
    echo "    <th>PHONE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "  </tr>";
	}
	}
	
	echo "</br>\n";
	echo "</br>\n";
	echo '<b>COMPANY INFORMATION</b>';
	             
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
