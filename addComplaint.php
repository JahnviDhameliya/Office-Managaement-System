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
    background-color: #717171;
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
    <title>Add</title>
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
<?php include 'header2.php'; 
$uniqueId = time().'_'.mt_rand();
if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
?>

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
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
	//echo "<table class=\"table\">\n";
    //echo "  <tr>\n";
    //echo "    <th>ACTION</th>\n";
    //echo "    <th>ENGINEER</th>\n";
    //echo "    <th>NAME</th>\n";
    //echo "    <th>ADDRESS</th>\n";
	//echo "    <th>MOBILE</th>\n";
	//echo "    <th>STATUS</th>\n";
	//echo "    <th>UPDATE</th>\n";
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
	//echo "<tr>\n";
		//echo "    <td><b>".$row["agent_id"]."</b></td>\n";
		//echo "    <td>".$row["client_id"]."</td>\n";
		//echo "    <td>".$row["month"]."</td>\n";
		//echo "    <td>".$row["amount"]."</td>\n";
		//echo "    <td>".$row["due"]."</td>\n";
		//echo "    <td><b>".$row["status"]."</b></td>\n";
		//echo "<td><b>"."<a href='#?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</b></td>\n";
		
		
	}
	}
	//echo "</table>\n";
	//echo "\n";
	//echo "</table>\n";

	
	
	

echo "\n";

$conn->close();	
?>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		
		
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Record</h1>
						
                    
                

<form action="insertComplaint.php" method="post">

<input style="display:none" type="text" name="recipt_no" value="<?php echo"$uniqueId"; ?>" required>
<input style="display:none" type="text" name="agent_id" value="<?php echo"$agent_id"; ?>"required>
<input style="display:none" type="text" name="client_id"  value="<?php echo"$username"; ?>"required>

Date:			<input type="date" name="action" ><br/>
Client Name:         <input type="text" name="month"><br>
Address:        <input type="text" name="amount"><br>
Mobile:           <input type="text" name="due" pattern="^[0-9]{10}$"><br>
         <input style="display:none" type="text" name="fine" ><br> 

Email:          <input type="text" name="email" ><br>
Work:          <input type="text" name="work" ><br>
Remark:          <input type="text" name="remark" ><br>
Requiements:          <input type="text" name="requiements" ><br>
          <input style="display:none" type="text" name="materialdetails" >
		  <input style="display:none" type="text" name="warranty" >
		  <input style="display:none" type="text" name="materialamt" >
Amount:		  <input type="text" name="servicecharge" >
		  <input style="display:none" type="text" name="customerremark" >
		  <input style="display:none" type="text" name="photo" >
Status:		 <input type="text" name="status" >

				
<input type="submit">
</form>
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
    <footer class="menu" id="m3">
    <table class="m" >		
        
    <tr class="nav-3" id="menu3">
        <td> <a href="<?php echo "logout.php" ?>"><i class="fa fa-power-off"></i>Logout</a></td>
        <td><a href="clientHome.php"><i class="fa fa-credit-card "></i>All Record</a></td>
        <td><a href="addComplaint.php"><i class="fa fa-pencil-square-o "></i>Add New Record</a></td>

    </tr>
					
                  
    </table>
    </footer>



</body>
</html>