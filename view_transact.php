<?php
   include "connection.php";
   $query="select Sender,Receiver,Amount from transfer_details";
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
			<li>SPARKS BANK</li>
		</ul>

		<ul id="right">
			<li><a href="login.php">Home</a></li>
			<li><a href="customer.php">View Customers</a></li>
			<li><a href="transfer.php">Transfer Amount</a></li>
		</ul>
	</header>
    <section>
	    <div class="s_img">
	    <div class="box2">
        <br>

    	<table align="center" border="2px" style="width: 700px; border-collapse: collapse; line-height: 40px; text-align: center;">
            <tr style="font-size: 20px">
    			<th colspan="3"><h2>TRANSCATION HISTORY</h2></th>
    		</tr>
    		<tr style="font-size: 20px">
    			<th style="width: 200px"> SENDER </th>
    			<th style="width: 200px"> RECEIVER </th>
    			<th> AMOUNT </th>
    		</tr>
    		<?php
    		    while($rows=mysqli_fetch_assoc($result))
    		    {
    		?>  
    		     <tr>
    		     	<td><?php echo $rows['Sender']; ?></td>
    		     	<td><?php echo $rows['Receiver']; ?></td>
    		     	<td><?php echo $rows['Amount']; ?></td>
    		     </tr>  
    		<?php	
    		    }
    		 ?>
    		
    	</table>

    

</body>
</html>