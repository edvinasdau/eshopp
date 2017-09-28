<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="view/style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="head">
			<h1>eSHOP</h1>
		</div>
		<div>
			<form>
				<input type="text" method="GET" name="search" placeholder="ieskoti"><br>
				<input type="submit" value="GO">
			</form>
			<form>
				<input type="text" method="GET" name="id" placeholder="id"><br>
				<input type="submit" value="GO">
			</form>
		</div>
	</div>
	<div class="container">
			<div class="row">
				<?php
				foreach ($products as $product) { 
					echo "<div class='rem'><a href='?id=".$product['id']. "'>" .$product['name']. "</a>
							<div class='kaina'>" . $product['price'] . " Euru". "</div>
							<div class='apr'>" ."kiekis - ". $product['amount'] . "</div>
							<div class='foto'><img height='80px' src='images/" . $product['image'] . "'></div>
					 	</div>";
				}
				?>
			</div>
		</div>
</body>
</html>
