<?php
include('connection.php');
include("check.php");
$sql = mysqli_query($conn,"SELECT * FROM jogadores WHERE name='$user_check' ");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user=$row['name'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style>
        body{
            background-color:#92a8d1;
            background-image: url("background/4.jpg");
            background-size: 100% 720px;
            background-position: center;
            background-repeat: no-repeat;
        }
        div.a{
        	height:200px;
        	border: 1px solid black;
        	margin-left: 10;
            background-color: #f18973;        	
        }
        img{
        	margin-top: -60px;
        }
        h1{
        	
        	margin-left: 20%;
        }
        a.lo{
        	color: black;
        	margin-left: 75%;
        	font-size: 30px;
        	text-decoration: none;
        	display: inline-block;
            margin-top: -20%;
            margin-right: 2%;
        }
        a.os{
        	text-decoration: none;
        	margin-left: 25%;
        	margin-top: 8%;
        	background-color: #405d27;
        	color: white;
        	height:70px;
        	width:300px;
        	text-align:center;
        	padding: 20px 10px;
        	display: inline-block;
        	font-size: 50px;
        }
        a.dbms{
            text-decoration: none;
            margin-left: 10%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:300px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.os:hover,a.dbms:hover{
        	background-color: grey;
        }
        img{
                margin-top: -5.9%;
        }
        a.hp{
            margin-left: 75%;
        }

       

        </style>
        <link rel="stylesheet" type="text/css" href="//node_modules/boststrap/compiler/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="//node_modules/boststrap/compiler/style.css">
    </head>
    <body>
        <div class="quiz">
    	<a href="osquiz.php" class="os">Sustentabilidade</a>
        <a href="dbmsquiz.php" class="dbms">Carnaval no Parque</a>
        <a href="osquiz.php" class="os">BSB tem</a>
        <a href="dbmsquiz.php" class="dbms">Artista</a>
        <a href="osquiz.php" class="os">Aleatório</a>
        </div>



    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>         
    	
    </body>
</html>