<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="TestIndex.php">Foodmate</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#">Login</a>
		</li>
		<li class="nav-item active">
			<span class="navbar-text"> | </span>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="#"><b>Sign Up</b></a>
		</li>
	</ul>
  </nav>
  <div class="container text-center ">
	<div class="jumbotron mt-5">
		<form action="#">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="username" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password">
			</div>
			<!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
				<div class="col-sm mx-auto">
		<a href="user.php" class ="btn btn-secondary" role="button">Submit</a>
	</div>
		</form>
	</div>
  </div>
  
  </body>
</html>





