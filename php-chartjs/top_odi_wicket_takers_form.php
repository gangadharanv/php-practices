<!DOCTYPE html>
<html>
<head>
	<title>Top_odi_wicket_takers</title>
	<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/register.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="materialize/js/materialize.min.js"></script>

</head>
<body>
	<div class="container">
		<div style="width: 50%; margin: auto;">
			<!-- card -->
			<div class="card" style="padding: 5%;">
				<div class="card-content">
					<h4 style="text-align:center;">Top-odi-wicket-takers</h4>
					<form action="top_odi_wicket_takers_process.php" method="post">

						<!-- user firstname -->
						<div class="input-field">
							<label for="playername">Player Name</label>
							<input type="text" id="playername" required name="playername">
						</div>

						<!-- user lastname -->
						<div class="input-field">
							<label for="wickets">Wickets</label>
							<input type="text" id="wickets" required name="wickets">
						</div>

						<!--Buttons  -->
						<div class="input-field">
							<button type="submit" class="waves-effect waves-light btn" name="sb">Submit</button>
						</div>
					</form>       
				</div>
			</div>

		</div>
	</div>

	<script>

		$(document).ready(function() {
			//This Will Initialize Select Element In Materilaize
			$('select').material_select();
		});

	</script>
</body>

</html>