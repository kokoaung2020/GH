<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>

    <div class="container">
      <div class="d-flex justify-content-center align-items-center mt-5">
      <form action="action.php" method="post">
        <label for="fname">Username:</label><br>
        <input class="mb-3" type="text" id="fname" name="username" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone No:</label><br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2}[0-9]{3}[0-9]{3}[0-9]{3}" required><br><br>
        <label for="pass">Password:</label><br>
        <input type="password" id="pass" name="password" required><br><br>
        <h6 class="mb-3">Gender</h6>
        <input type="radio" name="gender" value="male" required>Male<br><br>
        <input type="radio" name="gender" value="female" required>Female<br><br>
        <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
      </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
