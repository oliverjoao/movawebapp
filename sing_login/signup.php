<?php
// Create connection
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD']=='POST') 
	{ 
		if($_POST['pass']==$_POST['confpass']) 
		    {  
				$username=$_POST['user'];
				$email=$_POST['email']; 
				$password=$_POST['pass']; 
				$sql="INSERT INTO jogadores (name, email, password) VALUES('$username','$email','$password')"; 
				if ($conn->query($sql) === TRUE) 
					{
    					$_SESSION['name']=$username;
    					header('Location: image.php');
					}		 
				else 
					{
    					echo "O jogador não pode ser adicionado.";
					}
		    } 
		else
			{
				echo "Senha incorreta.";
			}
	}
?>

