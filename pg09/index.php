<!-- Write a PHP program named states.py that declares a variable state with value "Mississippi Alabama
Texas Massachusetts Kansas". write a PHP program that does the following:
a. Search for a word in variable states that ends in xas. Store this word in element 0 of a list named
statesList.
b. Search for a word in states that begins with k and ends in s. Perform a case-insensitive comparison. [Note:
Passing re.Ias a second parameter to method compile performs a case-insensitive comparison.] Store this
word in element1 of statesList.
c. Search for a word in states that begins with M and ends in s. Store this word in element 2 of the
list.
d. Search for a word in states that ends in a. Store this word in element 3 of the list. -->

<html>
	<head>
		<title>RegEx</title>
	</head>
	<body>
		<?php
			$allStates = "Mississippi Albama Texas Massachusets Kansas";
			$states = explode(' ', $allStates);
			$result = [];
			$i = 0;
			foreach($states as $state) {
				if(preg_match('/xas$/', $state)) {
					$result[$i] = $state;
					echo "<p> State that ends is xas: ".$state;
					$i = $i + 1;
				}
			}
			foreach($states as $state) {
				if(preg_match('/^k.*s$/i', $state)) {
					$result[$i] = $state;
					echo "<p> State that begins with k and ends is s(case-insensitive): ".$state;
					$i = $i + 1;
				}
			}
			foreach($states as $state) {
				if(preg_match('/^M.*s$/', $state)) {
					$result[$i] = $state;
					echo "<p> State that begins with M and ends is s: ".$state;
					$i = $i + 1;
				}
			}
			foreach($states as $state) {
				if(preg_match('/a$/', $state)) {
					$result[$i] = $state;
					echo "<p> State that ends is a: ".$state;
					$i = $i + 1;
				}
			}
			foreach($result as $element => $value) {
				echo "<p>".$value." is ".$element."</p>";
			}
		?>
	</body>
</html>
