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
                        <h1 class="page-head-line">Final Register
                      
		
					
				     
						   
						
						</h1>
                    </div>
                </div>
				
     <form method="POST">
    	From:<input type="date" name="s_date" value="from"/>
        To:<input type="date" name="e_date" value="to"/>
    
         <input type="submit" name="short" value="submit">
    </form>
    <br>
    <br>
                <!-- /. ROW  -->

                <?php
            $agent_id = $_SESSION["username"];
            $sql = "SELECT * from agent where agent_id='$agent_id'";

            if(isset($_POST["short"])){
                $s_date=$_POST["s_date"];
                $e_date=$_POST["e_date"];
            }
            else{
                $s_date="";
                $e_date="";
            }
            if($s_date=="" or $e_date==""){
                $sql = "SELECT * FROM payment where warranty='0' and agent_id='$agent_id' order by action and month";

            }
            
    else if($s_date!="" or $e_date!=""){
        $sql = "SELECT * FROM payment where warranty='0' and agent_id='$agent_id' AND action between '$s_date' and '$e_date' order by action and month";

    }

	         //   PRINTS CLIENT's info
	        $result = $conn->query($sql);
	        $policy_id = "";
	   
	        while($row = $result->fetch_assoc()) {
		        //$images = $row["image"];
        ?>				
						
            <?php
		
		        //$policy_id = $row["policy_id"];
		        //$c_id      = $row["client_id"];
		        $agent_id  = $row["agent_id"];
	        }  
			


	//$sql = "SELECT client_id,nominee_id,name,birth_date,nid FROM nominee WHERE phone=0 and nid!=0";
	//$sql = "SELECT * FROM payment where warranty='0' and agent_id='$agent_id' order by action";
    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>DATE</th>";
    echo "    <th>NAME</th>";
    echo "    <th>MOBILE</th>";
	echo "    <th>STATUS</th>";
	echo "    <th>REQUIREMENT</th>";
    echo "    <th>UPDATE</th>";


    echo "  </tr>";

    while($row = mysqli_fetch_array($result)){
		
		?>
        <tr>
          <td><?php echo $row['action']?></td>
          <td><?php echo $row['month']?></td>
          <td><?php echo $row['due']?></td>
          <td><?php echo $row['status']?></td>
          <td><?php echo $row['requirements']?></td>  
          <?php
          echo "<td><b>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</b></td>\n";
                      ?>

        </tr>

        <?php

    }

        $conn->close();
        ?>

		
        


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>