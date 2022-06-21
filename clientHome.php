<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
    background-color: black;
}
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
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

.sidebar-collapse, .sidebar-collapse {
background-color: black;
}

.sidebar-collapse .nav-2 {
        padding: 0;
        background-color: black;
    }
   

.sidebar-collapse .nav-2 > li > a {
            color: #fff;
            background: black;
            text-shadow: white;
            padding: 15px 40px;
            border-bottom: 1px solid white;
        }

    .sidebar-collapse > .nav-2 > li > a {
        padding: 15px 10px;
        display:flex;
    }
    .sidebar-collapse .nav-2 > li > a:hover,
    .sidebar-collapse .nav-2 > li > a:focus {
        background:linear-gradient(120deg,#581845, #900C3F ,#191970);
        outline: 0;
    }

    

    .menu .m .nav-3>td>a{
        padding: 15px 10px;
        display:flex;
        color: white;

}

.menu .m .nav-3>td>a:hover,
.menu .m .nav-3>td>a:focus{
        background:linear-gradient(120deg,#581845, #900C3F ,#191970);
        outline: 0;
}


.nav-2{
        display: none;
    }
.menu {
    display:inline;
    height: 100px;
    color: white;
    }
  
   
   @media screen and (min-width:768px) {
  .footerbtn {
    display:none;
  }
}

   

@media (min-width:768px) {
    #page-wrapper {
        margin: 0 0 0 260px;
        padding: 15px 30px;
        min-height: 1200px;
    }


    .navbar-side {
        z-index: 1;
        position: absolute;
        width: 260px;
    }

    .navbar {
        border-radius: 0px;
    }
    .menu {
    display:none;
    }
    .nav-2{
        display: inline;
    }
    
}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRM Software</title>
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
<body>
<?php
include "header2.php";
?>

		 
   
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                       
                
                <!-- /. ROW  -->
<?php

	
		
		$client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	   
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
			
<?php
		
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$agent_id  = $row["agent_id"];
		
    }
		               //prints payments 
	//$sql = "SELECT * FROM payment where client_id='$c_id' order by action";
	$sql = "SELECT * FROM payment where client_id='$c_id' and warranty!='0' and warranty!='1' order by action";
    $result = $conn->query($sql);
	
echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Date</th>\n";
    //echo "    <th>ENGINEER</th>\n";
    echo "    <th>NAME</th>\n";
    //echo "    <th>ADDRESS</th>\n";
	echo "    <th>MOBILE</th>\n";
	echo "    <th>STATUS</th>\n";
    echo "    <th>REQ</th>\n";
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
	echo "<tr>\n";
	
	if($row["agent_id"]== $username || "ITHub" == $username){
			echo "<td><b>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>".$row["action"]."</a>"."</b></td>\n";
		}else{
			echo "<td><b>"."<a class=\"dis\" href='editPaymentclient.php?recipt_no=".$row["recipt_no"]. "'>".$row["action"]."</a>"."</b></td>\n";
		}
		
	
		//echo "    <td><b>".$row["action"]."</b></td>\n";
		//echo "    <td>".$row["client_id"]."</td>\n";
			if($row["agent_id"]== $username || "ITHub" == $username){
			echo "<td><b>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>".$row["month"]."</a>"."</b></td>\n";
		}else{
			echo "<td><b>"."<a class=\"dis\" href='editPaymentclient.php?recipt_no=".$row["recipt_no"]. "'>".$row["month"]."</a>"."</b></td>\n";
		}
		
		
		
		
		
		//echo "    <td>".$row["amount"]."</td>\n";
		
		echo "<td><b>"."<a href='tel:".$row["due"]. "'>".$row["due"]. "</a>"."</b></td>\n";
		
		
	if($row["agent_id"]== $username || "ITHub" == $username){
			echo "<td><b>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>".$row["status"]."</a>"."</b></td>\n";
		}else{
			echo "<td><b>"."<a class=\"dis\" href='editPaymentclient.php?recipt_no=".$row["recipt_no"]. "'>".$row["status"]."</a>"."</b></td>\n";
		}
		
	
		if($row["agent_id"]== $username || "ITHub" == $username){
			echo "<td><b>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>".$row["requirements"]."</a>"."</b></td>\n";
		}else{
			echo "<td><b>"."<a class=\"dis\" href='editPaymentclient.php?recipt_no=".$row["recipt_no"]. "'>".$row["requirements"]."</a>"."</b></td>\n";
		}
		
		
	
	}
	}
	echo "</table>\n";
	echo "\n";
	
	echo "<br>\n";
	echo "<br>\n";
	echo "</table>\n";

	
	
	

echo "\n";

$conn->close();	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  <style>
.footerbtn {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-decoration: none;
   min-height: 50px;
}
</style>
    <table width="100%" class="footerbtn">		
        
    <tr>
        <td> <a href="<?php echo "logout.php" ?>"><center>Logout<center></center></a></td>
        <td><a href="clientHome.php"> <center>Home</center></a></td>
        <td><a href="addComplaint.php"> <center>Add New Record</center></a></td>
		
    </tr>
	              
    </table>
   

   
    


</body>
</html>