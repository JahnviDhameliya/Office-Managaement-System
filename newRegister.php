<!DOCTYPE html>

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
input[type=submit] {
    width: 10%;
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.btn{
	background-color: #0b4afd;
	float: center;
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
    border: 0px solid #dddddd;
    text-align: center;
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
<?php include 'header5.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Registers
						</h1>
   
                    </div>
                </div>
				
                
                <!-- /. ROW  -->
  
    
    

    
	<table class="table">
    <tr><td>
    <button class="btn" align="center" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;"> 
                        <a href="purchaseRegister.php" class="btn" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;">Purchase Register</a>
                        </button>
</td><td>
<button class="btn" align="center" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;"> 
                        <a href="saleRegister.php" class="btn" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;">Sale Register</a>
                        </button>
</td></tr>
  
	
</body>