<?php include 'inc/header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="inc/style.css">

  <title>Quiz</title>
</head>
<body>
  

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Log In</h1>
    <p class="lead">Take the quiz!</p>
      <form action="validation.php" method="POST">
        <div class="form-group">
          <label for="inputUsername">Username</label>
          <input type="text" name="user" id="inputUsername" class="form-control" required >
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" id="pass" class="form-control" required >
        </div>
        <div class="form-group form-check">
          
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
  
</body>
</html>

<?php include 'inc/footer.php' ?>