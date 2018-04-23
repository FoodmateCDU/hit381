<!DOCTYPE html>
<?php include 'php/head.php'; ?>
<body>
	<!-- Navigation Slider -->
	<nav id="menu">
		<header>
			<div class="list-group text-light">
				<a href="user.php" class="list-group-item list-group-item-action rounded-0 ">
					<span class="slide-header"><h3>My Foodmate</h3></span>
				</a>
				<a href="recipe-manage.php" class="list-group-item rounded-0 pl-5 ">My Recipes</a>
				<a href="shopping-x.php" class="list-group-item rounded-0 pl-5 ">Shopping Lists</a>
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

			<div class="container mt-5">
				<div class="row">
					<div class="col-sm-8">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Recipe</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Creamy caramelised onion and bacon pasta</td>
									<td><a href="#" class ="btn btn-secondary" role="button">Edit</a></td>
									<td><a href="#" class ="btn btn-secondary" role="button">Delete</a></td>
								</tr>
								<tr>
									<td>15-minute salmon gnocchi</td>
									<td><a href="#" class ="btn btn-secondary" role="button">Edit</a></td>
									<td><a href="#" class ="btn btn-secondary" role="button">Delete</a></td>
								</tr>
								<tr>
									<td>Spicy pork larb with chilli sauce</td>
									<td><a href="#" class ="btn btn-secondary" role="button">Edit</a></td>
									<td><a href="#" class ="btn btn-secondary" role="button">Delete</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm mx-auto">
						<a href="user.php" class ="btn btn-secondary" role="button">Return</a>
					</div>
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
