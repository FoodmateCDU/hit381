<!DOCTYPE html>
<?php include 'php/head.php'; ?>

<body>

  <div class="text-center fm-100vh fm-container">
    <h1 class="fm-heading">Foodmate</h1>
    <p class="fm-sub-heading">We make it easy to eat!</p>
    <form>
      <div class="form-group">
        <input type="email" class="form-control" id="inputEmail0" placeholder="Enter email">
      </div>
      <div id="fm-signin" class="form-hidden form-group">
        <input type="password" class="form-control" id="inputPassword0" placeholder="Password">
      </div>
      <div id="enter-buttons" class="form-hidden form-group">
        <a href="user.php" class="btn btn-secondary fm-button" role="button">Log in</a>
        <a href="user.php" class="btn btn-secondary fm-button" role="button">Sign up</a>
      </div>
    </form>
  </div>
  <script src="js/fm-login.js"></script>
</body>
</html>
