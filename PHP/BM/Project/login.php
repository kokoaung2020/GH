<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Log In Form</title>
  </head>
  <body>

    <div class="container">
      <form action="action.php" method="post">
        <div class="mt-5 mx-5">
          <h2 class="mb-5">Log In Form</h2>
          <?php if ( isset($_GET['incorrect']) ) : ?>
            <div class="alert alert-warning">
            Incorrect Email or Password
          </div>
         <?php endif ?>
        <div class="mb-3">
          <b>Username:-</b><input type="text" name="name" required>
        </div>
        <div class="mb-3">
          <b>Password:-</b><input type="text" name="password" required>
        </div>
        <div>
          <input type="submit" name="submit" value="Log In">
        </div>
        <div class="mt-5">
          <a href="signup.php">Register</a>
        </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
