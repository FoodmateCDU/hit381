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
			<div class="row">
				<div class="container mt-5">
					<span class="h1"><p>Spicy Pork Larb with Chilli Sauce</p></span>
					<span class="h2">Ingredients:</span>
					<ul class="list-group mt-3 mb-3">
						<li class="list-group-item">1 cup jasmine rice</li>
						<li class="list-group-item">2 carrots</li>
						<li class="list-group-item">3 long red chillies</li>
					</ul>
					<span class="h2">Method</br></span>
					<div class="pl-3">
						<p><b>Step 1:</b></br>
							Cook the rice following packet directions. </p>
							<p><b>Step 2:</b></br>
								Using the julienne attachment on a food processor or a sharp knife, cut carrots into matchsticks. Transfer to a medium bowl. Add coriander and sesame seeds.
								Season with salt and pepper. Toss to combine. </p>
								<p><b>Step 3:</b></br>
									Heat oil in a large frying pan over medium-high heat. Add mince. Cook, breaking up lumps with a wooden spoon, for 5 to 7 minutes or until browned. Add choy sum,
									fish sauce and 1 chopped chilli. Cook, stirring, for 1 minute. Remove from heat. </p>
								</div>
								<div class="container mx-auto text-center">
									<a href="javascript:history.back()" class ="btn btn-secondary mx-auto text-center" role="button">Return</a>
									<a href="shopping-x.php" class ="btn btn-secondary mx-auto text-center" role="button">Add ingredients to shopping list</a>
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
