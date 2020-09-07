<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-4 p-4" >
			<div class="col-md-6">
				<h3>Login</h3>
				<form class="form-horizontal" method="post" action="src/controllers/AuthController.php">
					<div class="form-group">
						<label class="control-label ">
							Email
						</label>
						<input type="email" name="email"  class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">
							Password
						</label>
						<input type="password" name="password"  class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-lg">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>