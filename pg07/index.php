<!-- Write a PHP program to display a digital clock which displays the current time of the server. -->

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="1">
		<title>Time</title>
		<style>
			h1 {
				font-size: 5rem;
				position: absolute;
				top: 250px;
				left: 500px;	
			}
		</style>
	</head>
	<body style="background-color: teal;">
		<h1><?php echo date("h:i:s A") ?></h1>
	</body>
</html>
