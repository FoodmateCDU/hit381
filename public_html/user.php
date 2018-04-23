<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
<body>
    <header>
		<?php include 'php/header.php'; ?>
    </header>
		<!-- Navigation Slider -->
		<?php require 'php/slider.php'; ?>
		
    <div class="container mb-5">
      <div class="row">
        <p></p>
      </div>
      <div class="row mx-auto text-center">
        <div class="col-sm">
          <div class="card mx-auto mb-5" style="width:300px">
            <div class="card-body">
              <h4 class="card-title">Your Recipes</h4>
              <p class="card-text">
                <div class="list-group">
                  <a href="recipe-x.php" class="list-group-item list-group-item-action">Creamy caramelised onion and bacon pasta</a>
                  <a href="recipe-x.php" class="list-group-item list-group-item-action">15-minute salmon gnocchi</a>
                  <a href="recipe-x.php" class="list-group-item list-group-item-action">Spicy pork larb with chilli sauce</a>
                  <a href="recipe-x.php" class="list-group-item list-group-item-action">Hypotherical quantum recipe</a>
                </div>
                <a href="recipe-new.php" class="btn btn-secondary mt-2">Add Recipe</a>
                <a href="recipe-manage.php" class="btn btn-secondary mt-2">Manage</a>
              </div>
            </div>
          </div>

          <div class="col-sm">
            <div class="card mx-auto mb-5" style="width:300px">
              <div class="card-body">
                <h4 class="card-title">Shopping Lists</h4>
                <p class="card-text">
                  <div class="list-group">
                    <a href="shopping-x.php" class="list-group-item list-group-item-action">Monday Night</a>
                    <a href="shopping-x.php" class="list-group-item list-group-item-action">A Grand Feast</a>
                  </div>
                  <a href="shopping-new.php" class="btn btn-secondary mt-2">Create New</a>
                  <a href="shopping-manage.php" class="btn btn-secondary mt-2">Manage</a>
                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card mx-auto mb-5" style="width:300px">
                <div class="card-body">
                  <h4 class="card-title">Inventory</h4>
                  <p class="card-text">
                    <ul class="list-group text-left">
                      <li class="list-group-item">1 Bread</lsi>
                        <li class="list-group-item">500ml Milk</li>
                        <li class="list-group-item">4 Cheese</li>
                      </ul>
                      <a href="inventory-manage.php" class="btn btn-secondary mt-2">Manage</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<!-- Footer Import, if used.
			<?php include 'php/footer.php' ?> 
			-->
                </body>
                </html>
