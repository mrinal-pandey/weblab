<!-- Write a PHP program to keep track of the number of visitors visiting the web page and to display this
count of visitors, with proper headings. -->

<html>
	<head>
		<title>Counter</title>
	</head>
	<body style="text-align: center;">
		<h1>Refresh page</h1>
		<?php
			$name = "counter.txt";
			$file = fopen($name, "r");
			$hits = fscanf($file, "%d");
			$hits[0]++;
			fclose($file);
			$file = fopen($name, "w");
			fprintf($file, "%d", $hits[0]);
			fclose($file);
			echo "<p>Total number of visitors ".$hits[0]."</p>";
		?>
	</body>
</html>
