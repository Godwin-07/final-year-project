
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	

	?>
<!DOCTYPE HTML>
<html>
<head>
  <title>marathon portal</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#fffff" scope="col"><h1>Marathon Information Portal</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewr.php">View Registration</a></th>
	 <th scope="col"><a href="viewu.php">ViewUsers</a></th>
	  <th scope="col"><a href="issue.php">Issue Cerificate</a></th>
	  <th scope="col"><a href="feedv.php">View feedback</a></th>
     <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  


<img src="images\1.jpg"  width="100%" height="400">






<table width="102%" align="center">
	
	
		<tr>
		<td colspan="11" align="center"><strong> Registration Details</strong></td>
		</tr>
	
	
	<tr>
		<td colspan="11">&nbsp;</td>
		</tr>
	
		    <tr>
			 <td width="13%"><div align="center" class="style6"><strong>Registration Id</strong> </div></td>
              <td width="13%"><div align="center" class="style6"><strong>Marathon Name</strong> </div></td>
			  <td width="13%"><div align="center" class="style6"><strong>Starting Point</strong> </div></td>
			  <td width="13%"><div align="center" class="style6"><strong>Ending Point</strong> </div></td>
		     <td width="8%"><div align="center" class="style6"><strong>Date</strong> </div></td>
			  <td width="10%"><div align="center" class="style6"><strong>Fees</strong> </div></td>
			  <td width="10%"><div align="center" class="style6"><strong>Name</strong> </div></td>
			  <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Status</strong> </div></td>
  </tr>
		<tr>
		<td colspan="11">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from  book");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$mid=$row['mid'];
		$uid=$row['uid'];
		
		$qry1=mysqli_query($conn,"select * from  marathon where id='$mid'");
		$row1=mysqli_fetch_array($qry1);
		
		$qry2=mysqli_query($conn,"select * from  register where id='$uid'");
		$row2=mysqli_fetch_array($qry2);
		
		?> 
        <tr>
		
			 <td><div align="center"><?php echo $row['id'];?></div></td>
		     <td><div align="center"><?php echo $row1['name'];?></div></td>
			  <td><div align="center"><?php echo $row1['start'];?></div></td>
			   <td><div align="center"><?php echo $row1['end'];?></div></td>
			 	  <td><div align="center"><?php echo $row1['date'];?></div></td>
				    <td><div align="center"><?php echo $row1['fees'];?></div></td>
					<td><div align="center"><?php echo $row2['name'];?></div></td>
				    <td><div align="center"><?php echo $row2['phone'];?></div></td>
					 <td><div align="center">Paid</div></td>
		 
        </tr>

		<tr>
		<td colspan="11" align="center">&nbsp;</td>
		</tr>
		
        <?php
		$i++;
		}

		?>
				<tr>
		<td colspan="11" align="center">&nbsp;</td>
		</tr>
		
</table>






 <table width="100%" border="0">
    <tr>
       <th height="73" bgcolor="#ffffb3" scope="col"><p></p>
      </th>
    </tr>
</table>