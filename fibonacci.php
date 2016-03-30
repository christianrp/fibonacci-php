<!DOCTYPE html>
<html>
	<head>
		<title>Fibonacci Sequence</title>
	</head>

	<body>
		<h1>The first twenty Fibonacci numbers:</h1>
		<?php
			$a0 = 0;
			$a1 = 1;
			for ($i = 0; $i < 20; $i++) { ?>
				<li><?= $a0 ?></li>
				<?php
				$temp = $a1;
				$a1 += $a0;
				$a0 = $temp;
				}
		?>
	</body>
</html>
