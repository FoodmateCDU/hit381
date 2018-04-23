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
      <div class="row mx-auto text-center mt-5">
        <div class="col-sm">
          <span class="h1">Generate Recipe</span>
        </div>
      </div>

      <div class="row">
        <div class="container mt-5 text-center">
          <h2> Fridge </h2>
          <form class="" action="#">
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password" value="Bread">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password" value="Milk">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password" value="Cheese">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
          </form>

        </div>
      </div>
      <div class="row">
        <div class="container mt-5 text-center">
          <h3> Pantry </h3>
          <form class="" action="#">
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password" value="Plain Flour">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password" value="jasmine rice">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center ">
              <input type="text" class="form-control mt-1" id="password" value="pasta spirals">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
            <div class="form-group form-inline justify-content-center">
              <input type="text" class="form-control mt-1" id="password">
              <a href="#" class="btn btn-secondary ml-1" role="button">Add</a>
            </div>
          </form>
          <a href="recipe-g.php" class ="btn btn-secondary" role="button">Generate</a>
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
