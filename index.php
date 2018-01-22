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
    <title>Quiz no Parque</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style type="text/css">
        body {background-image: url("assets/img/bg-quiz-no-parque.svg");}
    </style>
    </head>
    <body>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">

        <div class="card">
            <div class="card-head">
                <h1 class="text-center">Quiz no Parque</h1>
            </div>
          <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bola">
                        <a href="escolha_tema.php" class="btn btn-verde up btn-block">Jogar</a>
                        </div>
                    </div>
                </div> <!-- row -->
          </div> <!-- card body -->
        </div><!--  fecha card -->

    </div> <!-- row h-100 justify-content-center align-items-center -->
</div> <!-- container h-100 -->
    

    <script src="assets/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>