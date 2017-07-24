<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP PRACTISE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<?php 
			$a = isset($_POST["number"]) ? $_POST["number"] : 1;
			$name = isset($_POST["username"]) ? $_POST["username"] : '';
			$password = isset($_POST["password"]) ? $_POST["password"] : '';
		?>
		<div class="container">
			<?php  if ($name == 'sandeep' && $password == 'password') { ?>
				<?php $user = true; ?>
				<div class="jumbotron">
					<div class="container">
						<h1>You are logged in!!!</h1>
						<p>Type in input to get multiplication table</p>
					</div>
				</div>
				<form action="php-practise.php" method="POST" role="form">
					<legend>Multiply form</legend>
					<div class="form-group">
						<label for="">Enter the number</label>
						<input type="number" name="number" class="form-control" id="" placeholder="Input field">
						<input type="hidden" name="username" class="form-control" id="username" value="sandeep">
						<input type="hidden" name="password" class="form-control" id="password" value="password">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<h1 class="text-center">Multiplication</h1>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Number</th>
							<th>multiply with <?php echo $a; ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
							for ($i=1; $i <= 10; $i++) {
							$c = $a * $i;
							echo "<tr>
									<td>$i</td>
									<td>$c</td>
								</tr>";
							}
						?>
					</tbody>
				</table>
			<?php } else { ?>
				<br><br><br>
				<div class="jumbotron">
					<div class="container">
						<h1>You are not sandeep</h1>
						<p>Enter username as 'sandeep' and password as 'password'</p>
					</div>
				</div>
				<form action="php-practise.php" method="POST" role="form">
					<legend>Login form</legend>
					<div class="form-group">
						<label for="username">Enter Name</label>
						<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
						<label for="password">Enter Password</label>
						<input type="text" name="password" class="form-control" id="password" placeholder="Enter Password">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			<?php } ?>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>