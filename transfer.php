<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	
	<link rel="stylesheet" href="index_button.css">
	<style>

	body{
		text-align:center;
	}
	body{
		background-color: 	#F0F8FF;
		
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	
	.center{
		display:inline-block;
		background-color:	#20B2AA;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#D2B48C;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: 	#D2B48C;
		font-size:17px;
		font-weight:bold;
		background:#D2B48C;
	}
	
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Muskaan"){
				 var arr=["Ishika","Divyangi","Jasneet","Vanya","Aman","Yasir","gauri","Aadvik","Aarav"];
				 }
				 else if(a==="Ishika"){
					var arr=["Muskaan","Divyangi","Jasneet","Vanya","Aman","Yasir","gauri","Aadvik","Aarav"];
				}
				else if(a==="Divyangi"){
					var arr=["Muskaan","Ishika","Jasneet","Vanya","Aman","Yasir","gauri","Aadvik","Aarav"];
				}
				else if(a==="Jasneet"){
					var arr=["Muskaan","Ishika","Divyangi","Vanya","Aman","Yasir","gauri","Aadvik","Aarav"];
				 }
				 else if(a==="Vanya"){
					var arr=["Muskaan","Ishika","Divyangi","Jasneet","Aman","Yasir","gauri","Aadvik","Aarav"];
				 }
				 else if(a==="Aman"){
					var arr=["Muskaan","Ishika","Divyangi","Jasneet","Vanya","Yasir","gauri","Aadvik","Aarav"];
				 }
				 else if(a==="Yasir"){
					var arr=["Muskaan","Ishika","Divyangi","Jasneet","Vanya","Aman","gauri","Aadvik","Aarav"];
				 }
				 else if(a==="gauri"){
					var arr=["Muskaan","Ishika","Divyangi","Jasneet","Vanya","Aman","Yasir","Aadvik","Aarav"];
				 }
				 else if(a==="Aadvik"){
					var arr=["Muskaan","Ishika","Divyangi","Jasneet","Vanya","Aman","Yasir","gauri","Aarav"];
				 }
				 else if(a==="Aarav"){
				 var arr=["Muskaan","Ishika","Divyangi","Jasneet","Vanya","Aman","Yasir","gauri","Aadvik"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1  style=" font-size:45px;color:#000000;text-shadow: 1.5px 1.5px black;">TRANSFER AMOUNT</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left"><b>Senders Name: &nbsp;</b></label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Muskaan">Muskaan</option>
			<option value="Ishika">Ishika</option>
			<option value="Divyangi">Divyangi</option>
			<option value="Jasneet">Jasneet</option>
			<option value="Vanya">Vanya</option>
			<option value="Aman">Aman</option>
			<option value="Yasir">Yasir</option>
			<option value="gauri">gauri</option>
			<option value="Aadvik">Aadvik</option>
			<option value="Aarav">Aarav</option>
		</select><br><br>
		<label for="receiver" align="left"><b>Receiver Name:&nbsp;</b></label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left"><b>Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="primary_btn" id="button" type="submit" name="submit" value="Transfer" >transfer</button>
	</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="primary_btn" id="button" type="button">BACK</button>
	</a>
</div>
</body>
</html>