<?php
include('connection.php');
session_start();
 
if(!isset($_SESSION['name']))
{
}
else
{
    header("Location: mainpage.php");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        body{
        background-image: url("background/9.jpg");
        background-size: 100% 720px;
        background-color: lightblue;
        }
        div.a{
            margin: 85px 560px 100px 400px;
        }
        p{
        margin-left:130px;

        }
        form{
        display:inline;
        }
        header{
        text-align:center;
        color: white;
        background-color:black;
        height:50px;
        }
        div.inner{
        background-color:white;
        padding-left:20px; 
        padding-top: 20px;
        }
        p.home{
        font-size: 40px;
        margin-left: -0.1%;
        margin-top: -0.1%;
        }
        </style>
        <title>Sign Up</title>
    </head>
    <body>
        <p class="home"><a href="mainpage.php"></a>Home Page</p>
        <div class="a">
        <form action="signup.php" method="POST">
                <header><h1>Sign up</h1></header>
                <div class="inner">
                Digite seu nome:<br>
                <input type="text" name="user" required><br>
                Seu e-mail:<br>
                <input type="email" name="email" required><br>
                Senha:<br>
                <input type="password" name="pass" pattern=".{5,10}" required title="5 to 10 characters"><br>
                Confirme sua senha:<br>
                <input type="password" name="confpass"><br><br>
                <input type="submit" value="Sign Up"><br>
                <p>
                Já possui uma conta?<a href="login1.php"> Log In</a>
                </p>
                </div>
         </form>
         </div>
    </body>
</html>
