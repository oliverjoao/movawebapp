<?php
include("connection.php");
include("check.php")
?>
<html>
<head>
<title>Pontuação</title>
<style type="text/css">
	div.a{
		font-size: 80px;
		background-color: red;
	}
	img{
		margin-top: 2%;
		margin-bottom: -1%;
	}
	div.b{
		font-size: 30px;
		margin-top: 10%;
	}
	a.home{
            text-decoration: none;
            margin-left: 35%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:400px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.home:hover{
        	background-color: grey;
        }
</style>
</head>
<body>
<div class="a">
Obrigado!
</div>
<div class="b">
<?php
$point=$_REQUEST['pontos'];
mysqli_query($conn,"INSERT INTO os_score (name,score) VALUES('$user_check','$ponto')");
?>
Sua pontuação na categoria: Carnaval no Parque foi... 
<?php 
$sql=mysqli_query($conn,"SELECT * FROM os_score WHERE name= '$user_check' order by s_no desc");
$result=mysqli_fetch_array($sql,MYSQLI_ASSOC);
echo $result["score"];
?> de 25 perguntas.
</div>
<a href="mainpage.php" class="home"> Ir para página inicial</a>

</body>
</html>
