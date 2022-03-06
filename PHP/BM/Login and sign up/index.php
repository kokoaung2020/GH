<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Log In</title>
  </head>
  <body>

    <div class="container">
      <div class="d-flex justify-content-center align-items-center mt-5 p-5">
      <form action="action.php" method="post">
        <label class="p-1" for="fname">Username:</label><br>
        <input class="mb-3 pt-3 ps-5" type="text" id="fname" name="username" required><br>
        <label class="p-1" for="pass">Password:</label><br>
        <input class="pt-3 ps-5" type="password" id="pass" name="password" required><br><br>
        <button type="submit" class="btn btn-primary" name="log">Log In</button>
        <div class="p-5">
        <a href="register.php">Register</a>
        </div>
      </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>