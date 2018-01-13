<?php
include('connection.php');
session_start();
 
if(!isset($_SESSION['name']))
{
    $lio="Log In/Sign Up";   //lio=login in/out   liol=log in/out link 
    $liol="login1.php";
}
else
{
    $lio="Log Out";
    $liol="logout.php";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <style>
            
            body{
               background-image: url("background/f.jpg");
               background-repeat: no-repeat;
               background-attachment: fixed;
            }

            div.a{
            
            width: 101%;
            background-color: #92a8d1;
            font-size: 60px;
            border: 1px solid grey;
            margin: -0.6% -0.10% 0% -0.6%;
            }
            div.b{
            height:1500px;
            margin:0% 100px 0px 100px;
            color: black;
            font-size: 30px;
            background-color: white;
            background: rgba(255, 255,255, 0.2);
            position: relative;
            padding: 20px 40px;
            word-spacing: 0.8px;
            }
            a.ls{
            font-size: 20px;
            color: black;
            margin-left: 15%;
            font-family: sans-serif;
            }

            ul.ul{
                width: 330px;
                display: none;
                position: absolute;
                list-style-type: none;
                text-align: left;
                margin-top: -114.2%;
                margin-left: -2%;
                background-color:rgb(80,140,50);
                }
            li.li{
                display: block;
                padding: 20px 20px;
                font-size: 30px
            }
            ul.ul a{
                text-decoration: none;
                color: black;
            }
            li.li:hover{
                background-color:#555;
            }
            ul.top{
            	display: block;
            	text-decoration: none;
            	list-style-type: none;
            }
            li.tli{
            	margin-top: -2%;
            	display: block;
            	float: left;
            	height:110px;
            	padding-left:20px;
            	padding-right: 40px; 
            	margin-top: -4.8%;
            	padding-top: 25px;
            }
            a.ta:link{
            	text-decoration:none;
            }
            li.tli:hover{
            	background-color: #82b74b;
            }
            a.test{
            text-decoration: none;
            margin-left: 25%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:500px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.test:hover{
        	background-color: grey;
        }
        </style>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script >
            $(document).ready(function(){   
                $("#img").click(function(){
                    $("ul.ul").toggle();
                });
              
            });
        </script>
    </head>
    <body>
     	<div class="a">
        <ul class="top">
        	<li class="tli"><img id="img" src="icon/menu-icon.png" height=50 width=50 style="cursor: pointer;"></li>
        	<li class="tli"><a class="ta" href="mainpage.php">Home</a></li>
        	<li class="tli"><a class="ta" href="os.php">Categoria 1</a></li>
        	<li class="tli"><a class="ta" href="dbms.php">Categoria 2</a></li>
            <li class="tli"><a class="ta" href="quiz3.php">Categoria 3</a></li>
            <li class="tli"><a class="ta" href="quiz4.php">Categoria 4</a></li>
        	
        </ul>
        <a class="ls" href=<?php echo $liol; ?>><?php echo $lio; ?></a>
      	</div>
        <div class="b" >
        <p>
        <h3>Identificação</h3>
        <p>Esse parágrafo não diz nada com nada. Obrigado.</p>
        <p><a href="home.php" class="test">Teste seus conhecimentos!</a></p>
       </div>
       <ul class="ul">
        <li  class="li"><a href="sb.php">Placar/Ranking</a></li>
        </ul>
    </body>
</html>
