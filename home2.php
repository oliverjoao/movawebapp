<?php
include('connection.php');
include("check.php");
$sql = mysqli_query($conn,"SELECT * FROM jogadores WHERE name='$user_check' ");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user=$row['name'];
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="//node_modules/boststrap/compiler/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="//node_modules/boststrap/compiler/style.css">

  </head>
  <body>
    <header class="d-flex flex-column flex-md-row align-items-md-center p-5 bg-light">
          <div class="pt-md-3 pb-md-4">
            <h1 class="title">{{ page.title | smartify }}</h1>
            <p class="bd-lead">{{ page.description | smartify }}</p>
            <a href="#" class="btn-lg">ois</a>
            <button class="btn">asd</button>
            <a href="{{ site.download.source }}" class="btn btn-lg btn-bd-primary" onclick="ga('send', 'event', 'Examples', 'Hero', 'Download');">Download source code</a>
          </div>
          {% include ads.html %}
        </header>

        <main class="bd-content p-5" role="main">
          {{ content }}
        </main>



        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>     	
  </body>
</html>
