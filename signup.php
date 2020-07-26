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
    <h1 class="display-4">Sign Up</h1>
    <p class="lead">We can get you started with the quiz.</p>
    <form action="registration.php" method="POST">
        <div class="form-group">
          <label >Username</label>
          <input type="text" name="user"  class="form-control" required >
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password"  class="form-control" required >
        </div>
        <div class="form-group form-check">
          
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
</div>
  
</body>

<?php include 'inc/footer.php' ?>

</html>