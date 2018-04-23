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
					<span class="h1"><p>A Grand Feast</span>
						<span class="float-right">31/02/2018</p></span>
						<ul class="list-group mt-3 mb-3">
							<li class="list-group-item">1 cup jasmine rice</li>
							<li class="list-group-item">2 carrots</li>
							<li class="list-group-item">3 long red chillies</li>
							<li class="list-group-item">Vegetable Oil</li>
							<li class="list-group-item">500g pork mince</li>
							<li class="list-group-item">1 bunch choy sum</li>
							<li class="list-group-item">fish sauce</li>
							<li class="list-group-item">honey</li>
							<li class="list-group-item">1 lime</li>
							<li class="list-group-item">3 eschalots</li>
							<li class="list-group-item">mint leaves</li>
							<li class="list-group-item">basil leaves</li>
						</ul>
						<div class="container mb-4">
							<a href="#" class ="btn btn-secondary " role="button">Export</a>
							<a href="javascript:history.back()" class="btn btn-secondary" role="button">Return</a>
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
