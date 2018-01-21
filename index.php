<?php
include('connection.php');
include("check.php");
$sql = mysqli_query($conn,"SELECT * FROM jogadores WHERE name='$user_check' ");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user=$row['name'];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Home</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>



<section class="container">

    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    

    <div class="card">
      <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="quiz_base.php" class="btn btn-outline-primary btn-lg btn-block">Sustentabilidades</a>  
                    <a href="dbmsquiz.php" class="btn btn-outline-primary btn-lg btn-block">Carnaval no Parque</a>
                    <a href="osquiz.php" class="btn btn-outline-primary btn-lg btn-block">BSB tem</a>
                </div>
                <div class="col-md-6">
                    <a href="dbmsquiz.php" class="btn btn-outline-primary btn-lg btn-block">Artista</a>
                    <a href="osquiz.php" class="btn btn-outline-primary btn-lg btn-block">Aleatório</a>
                </div>
            </div> <!-- row -->
      </div> <!-- card body -->
    </div><!--  fecha card -->


</section>

    <script src="assets/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>