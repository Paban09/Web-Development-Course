<?php
	session_start();
	session_destroy();
	setcookie("s_name","",time()-60);
	setcookie("s_password","",time()-60);
?>
<html>
	<head>
		<title>Home </title>
	</head>
	<body>
	
	<?php include 'main_header.php'; ?>	
	<form action="" method="post">
		<table>
			<tr>
				<td>
				<img src="Home.png"alt= "This is Product logo" width="150" height="130">
				</td>
				<td>
				<h2><span style="background-color:orange;color:black">Home</h2></span>
				</td>
			</tr>
			
			<tr>
				<td><span style="background-color:orange;color:black">Organic</td>
			</tr>
			
			<tr>
				<td colspan ="2">
				<img src="Organic.jpg"alt= "This is Product logo" width="300" height="130">
				</td>
				
			</tr>
			
			<tr>
				<td><span style="background-color:orange;color:black">Soft drinks</td>
			</tr>
			
			<tr>
				<td colspan ="2">
				<img src="Drink.png"alt= "This is Product logo" width="300" height="130">
				</td>
				
			</tr>
			
			
			
		</table>
	</form>
	
	</body>
</html>