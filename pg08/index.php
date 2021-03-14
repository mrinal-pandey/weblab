<!-- Write the PHP programs to do the following:
a. Implement simple calculator operations.
b. Find the transpose of a matrix.
c. Multiplication of two matrices.
d. Addition of two matrices. -->

<html>
	<head>
		<title>Calculator</title>
	</head>
	<body>
		<h1>Calculator</h1>
		<form method="post">
			<label>Number 1:</label><input type="text" name="num1"></input>
			<label>Number 2:</label><input type="text" name="num2"></input>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php
			if(isset($_POST['submit'])) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				if(is_numeric($num1) && is_numeric($num2)) {
					echo "<p>Sum = ".($num1 + $num2)."</p>";
					echo "<p>Difference = ".($num1 - $num2)."</p>";
					echo "<p>Product = ".($num1 * $num2)."</p>";
					echo "<p>Division = ".($num1 / $num2)."</p>";
				}
			}
			echo "<br><br><h1>Matrix computations:</h1><br>";
			$matrix1 = array(array(1, 2), array(3, 4));
			$matrix2 = array(array(1, 2), array(3, 4));
			$row1 = count($matrix1);
			$row2 = count($matrix2);
			$col1 = count($matrix1[0]);
			$col2 = count($matrix2[0]);
			echo "<p>Order of matrix 1 is ".$row1." x ".$col1."</p>";
			echo "<p>Order of matrix 2 is ".$row2." x ".$col2."</p>";
			echo "<p>Matrix 1:</p>";
			for($i = 0; $i < $row1; $i++) {
				for($j = 0; $j < $col1; $j++) {
					echo $matrix1[$i][$j]." ";
				}
				echo "<br>";
			}
			echo "<p>Matrix 2:</p>";
			for($i = 0; $i < $row2; $i++) {
				for($j = 0; $j < $col2; $j++) {
					echo $matrix2[$i][$j]." ";
				}
				echo "<br>";
			}
			echo "<p>Transpose of matrix 1:</p>";
			for($i = 0; $i < $col1; $i++) {
				for($j = 0; $j < $row1; $j++) {
					echo $matrix1[$j][$i]." ";
				}
				echo "<br>";
			}
			echo "<p>Sum of matrix 1 and matrix 2:</p>";
			for($i = 0; $i < $row1; $i++) {
				for($j = 0; $j < $col1; $j++) {
					echo $matrix1[$i][$j] + $matrix2[$i][$j]." ";
				}
				echo "<br>";
			}
			echo "<p>Product of matrix 1 and matrix 2:</p>";
			for($i = 0; $i < $row1; $i++) {
				for($j = 0; $j < $col2; $j++) {
					$val = 0;
					for($k = 0; $k < $row2; $k++) {
						$val = $val + ($matrix1[$i][$k] * $matrix2[$k][$j]);
					}
					echo $val." ";
				}
				echo "<br>";
			}
		?>
	</body>
</html>
