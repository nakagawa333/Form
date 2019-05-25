<?php
$conn = mysqli_connect("localhost","root","nakagawa3","form");

?>

<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<link rel="stylesheet" type="text/css" href="form.css">

<body>
	<div class="container " id="container">
		<div class="row">
			<div class="card mx-auto">
				<div class="card-body">
					<form action="welcome.php" method="post">
		Name:<input type="text"  class="form-control " name="name"></br>
		E-mail:<input type="text" class="form-control" name="email"></br>
		Website:<input type="Web" class="form-control" name="web"></br>
		Content:<input type="" class="form-control" name="comment" rows="3"></br>
		Gender:
		<input type="radio" name="gender" value="famale">Famale
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<div  class="input-group-append">
			<button class="btn btn-success"type="submit" name="submit">Submit</button>
		</div>
	</form>
</div>
</div>
</div>
</div>

<?php

?>

</body>
</html>