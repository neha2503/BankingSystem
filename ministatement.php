<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mi7ni Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="index_button.css">
	
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			
			background-color:	#F0F8FF;
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px black;
			border-collapse:collapse;
			 background: #20B2AA;
			}
		th{
			color:black;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:black;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		
		.buttons{
			
			right:42%;
			text-align:center;
		}
		
	</style>
	</head>
	<body>
	<br><br><br>
		<h2><?php echo "Transaction Statement By ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>SENDER</th>
				<th>CREDITS</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div class="buttons">
	<a href="index.php">
	<button class="primary_btn" id="button" type="button">BACK </button>
	</a>
	</div>
	<br>
	<br>
		
	</body>
</html>