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
			<li>SPARKS BANK</li>
		</ul>

		<ul id="right">
            <li><a href="login.php">Home</a></li>
            <li><a href="transfer.php">Transfer Amount</a></li>
			<li><a href="view_transact.php">View transactions</a></li>
		</ul>
	</header>
    <section>
	    <div class="sect_img">
        <div class="box3"><br><br><br>
         <h1 style="text-align: center; font-size: 30px">TRANSFER MONEY</h1><br><br>
         
         <form action="" method="post">
                <div class="login">
                    <input class="form-control" type="text" name="Sender" placeholder="Sender Name" required=""><br><br>
                    <input class="form-control" type="text" name="Reciever" placeholder="Reciever Name" required=""><br><br>
                    <input class="form-control" type="text" name="Amount" placeholder="Amount" required=""> <br><br>
                    <button class="btn btn-default" type="submit" name="submit"> Transfer </button>
                </div>
        </form>
        </div>


        <?php

       if(isset($_POST['submit']))
       {
           $query3="UPDATE `customer_details` SET `Current_balance`= Current_balance-'$_POST[Amount]' WHERE Name='$_POST[Sender]'";
           mysqli_query($db,$query3);
           $query3="UPDATE `customer_details` SET `Current_balance`= Current_balance+'$_POST[Amount]' WHERE Name='$_POST[Reciever]'";
           mysqli_query($db,$query3);
           $query2="INSERT INTO transfer_details VALUES('$_POST[Sender]', '$_POST[Reciever]', '$_POST[Amount]')";
           mysqli_query($db,$query2);

       ?>
       <script type="text/javascript">
        alert("Transfer Successful");
       </script>

       <?php
       }
       ?>


	   <div class="box1">
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
    </div>
</body>
</html>