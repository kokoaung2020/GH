<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>

    <div class="container">
      <form action="action.php" method="post">
        <div class="mt-5 mx-5">
          <h2 class="mb-5">Registeration Form</h2>
        <div class="mb-3">
          <b>Username:-</b><input type="text" name="name" required>
        </div>
        <div class="mb-3">
          <b>email:-</b><input type="email" name="email" required>
        </div>
        <div class="mb-3">
          <b>Password:-</b><input type="password" name="password" required>
        </div>
        <div class="mb-3">
          <b>Male:- </b><input type="radio" name="gender" required>
          <b>Female:- </b><input type="radio" name="gender" required>
        </div>
        <div class="mb-3">
          <b>Date of Bith:-</b><input type="date" name="dob" required>
        </div>
        <div>
          <input type="submit" name="signup" value="Sign Up">
        </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
