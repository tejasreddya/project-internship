<?php
   include "connection.php";
   $query="select Name,Email,Current_balance from customer_details";
   $result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<ul id="left">
			<li>SPARKS  BANK</li>
		</ul>

		<ul id="right">
			<li><a href="login.php">Home</a></li>
			<li><a href="transfer.php">Transfer Amount</a></li>
			<li><a href="view_transact.php">View transactions</a></li>
		</ul>
	</header>
  	<?php
    $sql1="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Akhil','akhil123@gmail.com','8000')";
    mysqli_query($db,$sql1);
    $sql2="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Bhuvan','bhuvan@gmail.com','9000')";
    mysqli_query($db,$sql2);
    $sql3="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Navya','navya123@gmail.com','10000')";
    mysqli_query($db,$sql3);
    $sql4="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Nikhil','nikhil234@gmail.com','9000')";
    mysqli_query($db,$sql4);
    $sql5="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Rani','rani234@gmail.com','11000')";
    mysqli_query($db,$sql5);
    $sql6="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Shilpi','shilpikumari@gmail.com','10000')";
    mysqli_query($db,$sql6);
    $sql7="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('teja reddy','tejareddy@gmail.com','11000')";
    mysqli_query($db,$sql7);
    $sql8="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Tejashree','tejashreevs@gmail.com','11000')";
    mysqli_query($db,$sql8);
    $sql9="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Usha','usharani@gmail.com','9000')";
    mysqli_query($db,$sql9);
    $sql10="INSERT INTO `customer_details`(`Name`, `Email`, `Current_balance`) VALUES ('Vidhwaan','vidhwaan.aa@gmail.com','8000')";
    mysqli_query($db,$sql10);

 
	?>
    <section>
	    <div class="s_img">
	    <div class="box2">
        <br>

    	<table align="center" border="2px" style="width: 700px; border-collapse: collapse; line-height: 40px; text-align: center;">
            <tr style="font-size: 20px">
    			<th colspan="3"><h2>CUSTOMER DETAILS</h2></th>
    		</tr>
    		<tr style="font-size: 20px">
    			<th style="width: 200px"> NAME </th>
    			<th style="width: 200px"> EMAIL </th>
    			<th> CURRENT BALANCE </th>
    		</tr>
    		<?php
    		    while($rows=mysqli_fetch_assoc($result))
    		    {
    		?>  
    		     <tr>
    		     	<td><?php echo $rows['Name']; ?></td>
    		     	<td><?php echo $rows['Email']; ?></td>
    		     	<td><?php echo $rows['Current_balance']; ?></td>
    		     </tr>  
    		<?php	
    		    }
    		 ?>
    		
    	</table>

    

</body>
</html>