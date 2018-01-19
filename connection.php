<?php
// Create connection
$conn = new mysqli('localhost', 'id4121120_quiz_carnaval','quiz#27','index');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php

	//Protege contra SQL Injection
	function DBEscapa($dados){
		$link = DBConnect();

		if(!is_array($dados))
			$dados = mysqli_real_escape_strong($link, $dados);
		else{
			$arr = $dados;

			foreach ($arr as $key => $value) {
				$key = mysqli_real_escape_strong($link, $key);
				$value = mysqli_real_escape_strong($link, $value);

				$dados[$key] = $value;
			}
		}

		DBClose($link);
		return $dados;
	}



	//Fecha conexão com MySQL
	function DBClose($link){
		@mysqli_close($link) or die(mysqli_error($link));
	}


	//Abre conexão com MySQl
	function DBConnect(){
		$link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_error($link));
		mysqli_set_charset($link, DB_CHARSET) or die(mysqli_error($link));

		return $link;
	}