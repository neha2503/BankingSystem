<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/bs.png">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#000000;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("images/pic1.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body >

	<div id="header">
       <br>
      
       <h2 style=" font-family:Montserrat-Black FB; font-size: 55px;color:#000000;text-shadow: 2px 2px black;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BANKING SYSTEM </b> </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="btn btn-dark btn-lg primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>