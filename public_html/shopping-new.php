<!DOCTYPE html>
<?php include 'php/head.php'; ?>
<body>
	<!-- Navigation Slider -->
	<nav id="menu">
		<header>
			<div class="list-group text-light">
				<a href="user.php" class="list-group-item list-group-item-action rounded-0 "><span class="slide-header"><h3>My Foodmate</h3></span></a>
				<a href="recipe-manage.php" class="list-group-item rounded-0 pl-5 ">My Recipes</a>
				<a href="recipe-new.php" class="list-group-item rounded-0 pl-5 ">Add New Recipe</a>
				<a href="shopping-manage.php" class="list-group-item rounded-0 pl-5 ">Shopping Lists</a>
				<a href="shopping-new.php" class="list-group-item rounded-0 pl-5 ">New Shopping List</a>
				<a href="inventory-manage.php" class="list-group-item rounded-0 pl-5 ">Fridge & Pantry</a>
				<a href="recipe-g.php" class="list-group-item rounded-0 pl-5">Import Recipe</a>
			</div>
		</header>
	</nav>

	<!-- Main Page body -->
	<main id="panel">
		<div class="fm-panel">
			<!-- toggle button for slideout nav -->
			<i class="fas fa-bars toggle-button"></i>


			<div class="row">
				<div class="container mt-5">
					<form action="#">
						<div class="form-group">
							<label for="title">Name:</label>
							<input type="title" class="form-control" id="title">
						</div>
						<div class="form-group">
							<label for="password">Items:</label>
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
							<input type="password" class="form-control mt-1" id="password">
						</div>
						<!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
						<div class="container mx-auto">
							<a href="user.php" class ="btn btn-secondary" role="button">Submit</a>
							<a href="user.php" class ="btn btn-secondary" role="button">Return</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<!-- Main Slideout JS -->
	<script src="js/slideout.js"></script>
	<!-- Activate our slideout -->
	<script src="js/fm-slideout.js"></script>

</body>
</html>
