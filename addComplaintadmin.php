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

input[type=submit]{
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
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
<div id="wrapper">

		



<?php include 'header.php'; 
$uniqueId = time().'_'.mt_rand();
if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
?>




        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		
		
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Record</h1>
						
                    
                

<form action="insertComplaintadmin.php" method="post">

<input style="display:none" type="text" name="recipt_no" value="<?php echo"$uniqueId"; ?>" required>
Date:	<input type="date" name="action" ><br>
Employ Id : <input type="text" name="client_id"  value="<?php echo"$client_id"; ?>"required>
Name:         <input type="text" name="month" required><br>
Address:        <input type="text" name="amount"><br>
Mobile:           <input type="text" name="due" pattern="^[0-9]{10}$" required><br>
Pin:          <input type="text" name="fine"><br>
<input style="display:none" type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>">
Email:          <input type="text" name="email" ><br>
Work:          <input type="text" name="work" ><br>
Remark:          <input type="text" name="remark" ><br>
Requiements:          <input type="text" name="requiements" ><br>
          <input style="display:none" type="text" name="materialdetails" >
		  <input style="display:none" type="text" name="warranty" >
		  <input style="display:none" type="text" name="materialamt" >
		  <input style="display:none" type="text" name="servicecharge" >
		  <input style="display:none" type="text" name="customerremark" >
		  <input style="display:none" type="text" name="photo" >
			<input style="display:none" type="text" name="status" >
			
<input type="submit" value="Save">
</form>
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
