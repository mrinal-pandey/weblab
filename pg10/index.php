<!-- Write a PHP program to sort the student records which are stored in the database using selection sort. -->

<html>
	<head>
		<title>Sorting</title>
	</head>
	<body>
		<h1>Selection sort</h1>
		<?php
			$server = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "weblab";
			$connection = mysqli_connect($server, $username, $password, $dbname);
			if($connection->connect_error) {
				die("Connection failed".$connection->connect_error);
			}
			$sql = "SELECT * FROM student";
			$result = $connection->query($sql);
			$a = [];
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<p>".$row["usn"]." ".$row["name"]." ".$row["address"]."</p>";
					array_push($a, $row["usn"]);
				}
			}
			$n = count($a);
			for($i = 0; $i < $n - 1; $i++) {
				$pos = $i;
				for($j = $i + 1; $j < $n; $j++) {
					if($a[$j] < $a[$pos]) {
						$pos = $j;
					}
				}
				if($pos != $i) {
					$temp = $a[$i];
					$a[$i] = $a[$pos];
					$a[$pos] = $temp;
				}
			}
			$result = $connection->query($sql);
			$name = [];
			$address = [];
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					for($i = 0; $i < $n; $i++) {
						if($a[$i] == $row["usn"]) {
							$name[$i] = $row["name"];
							$address[$i] = $row["address"];
						}
					}
				}
			}
			for($i = 0; $i < $n; $i++) {
				echo "<p>".$a[$i]." ".$name[$i]." ".$address[$i]."</p><br>";
			}
		?>
	</body>
</html>
