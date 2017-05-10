<!DOCTYPE html>
	<head>
		<title>Test</title>
	    <link href="css/bootstrap.css" rel="stylesheet"> 
	</head>
	<body>
		<div class="form-group row">
  			<div class="col-md-10 col-md-offset-1">
				<form name="form-cadastro" method="post" action="register.php">
					<div class="jumbotron">
					    <center><h1>Registration system</h1></center>
					</div>
					<label>Name:</label>
					<input type="text" class="form-control" name="nome"><br>
					<label>Last name:</label>
					<input type="text" class="form-control" name="sobrenome"><br>
					<label>Country:</label>
					<input type="text" class="form-control" name="pais"><br>
					<label>State:</label>
					<input type="text" class="form-control" name="estado"><br>
					<label>City:</label>
					<input type="text" class="form-control" name="cidade"><br>
					<label>Email address:</label>
					<input type="text" class="form-control" name="email"><br>
					<label>Password:</label>
					<input type="password" class="form-control" name="senha"><br>
					<center><input type="submit" class="btn btn-default" value="Register"></center>
				</form>
			</div>
		</div>
	</body>
</html>