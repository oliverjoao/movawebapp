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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title> 
        <meta http-equiv="Content-Language" content="pt-br">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>



<section class="container">

    <div class="card">
      <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="osquiz.php" class="btn btn-outline-primary btn-lg btn-block">Sustentabilidades</a>  
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








    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>