<?php
include("connection.php");
session_start();
$user_check=$_SESSION["name"];
 
if(!isset($user_check))
{
header("Location: login1.php");
}
?>
<html>
<head>
<title>Operating System</title>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script >
            $(document).ready(function(){   
                $(".next-action-button").click(function()
                {
                		current_fs = $(this).parent();
						next_fs = $(this).parent().next();
	
						current_fs.animate({opacity: 0}, 
						{
							step: function(now) 
							{
								scale = 1 - (1 - now) * 0.2;
								//2. bring next_fs from the right(50%)
								left = (now * 50)+"%";
								//3. increase opacity of next_fs to 1 as it moves in
								opacity = 1 - now;
								current_fs.css({'transform': 'scale('+scale+')'});
								next_fs.css({'left': left, 'opacity': opacity});
							}, 
							duration: 600, 
							complete: function()
							{
								current_fs.hide();
								next_fs.show(); 
							}
						});
				});

				$(".previous-action-button").click(function()
				{
					
					current_fs = $(this).parent();
					previous_fs = $(this).parent().prev();
					
					current_fs.animate({opacity: 0}, 
					{
						step: function(now) 
						{
							scale = 0.8 + (1 - now) * 0.2;
							//2. take current_fs to the right(50%) - from 0%
							left = ((1-now) * 50)+"%";
							//3. increase opacity of previous_fs to 1 as it moves in
							opacity = 1 - now;
							current_fs.css({'left': left});
							previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
						}, 
						duration: 600, 
						complete: function()
						{
							current_fs.hide();
							previous_fs.show(); 
						}
					})
				});
					$(".submit").click(function(){
					return false;
				})
				});


        </script>
</head>
<style type="text/css">
body{
	background-color: white;
	background-image: url("gs.png");
}
#msform fieldset:not(:first-of-type) {
	display: none;
}

fieldset{
	background-color: white;
	padding:10px 20px;
	width:50%;
	margin-top: 60px;
	margin-left: 25%;
	font-size: 20px;
}
.previous-action-button,.next-action-button,.submit{
	background-color: #27AE60;
	text-align: center;
	color: white;
	cursor: pointer;
	width: 25%;
	height:35px;
	border: 0 none;
	font-size: 20px;
}
.next-action-button:hover,.previous-action-button:hover,.submit:hover{
box-shadow: 0 0 0 2px white;
color: black
}
#a{
	border: 0 none;
	padding:10px 15px ;
	margin-right: 50px;
}

#quiztime{
	font-size: 30px;
	color: white;
}
li{
	list-style-type: none;
	color: white;
	float: left;
}

</style>

<body>

<script type="text/javascript">
function checktime(x,ele)
{
	var min=parseInt(x/60);
	var sec=parseInt(x%60);
	element=document.getElementById("quiztime");
	element.innerHTML ="Time left: "+min +" Mins "+ sec + " Secs ";
	if(x<1)
	{
		window.alert("Exam is Finshed!!!");
		score();
	}
	else
	{
		x--;
		setTimeout('checktime('+x+',"'+ele+'")',1000);
	}
	

}

function score(){
	var x=document.forms[0];
	var points=0;
	for(var i=0;i<x.length;i++)
	{ 
		if(x[i].checked)
		{

			if(x[i].value=="correct")
				points=points+1;
		}
	}
	window.location ="scoreos.php?points="+points;
}

</script>
<div id="a">
<div id="quiztime"></div>
<script type="text/javascript">checktime(20,"quiztime");</script>
<form action="quizsubmit.php" id="msform" method="get" name="form" >
	<fieldset><h3>1.O Carnaval no Parque é um evento “Lixo Zero”?</h3>
		<input type="radio" name="q1" value="correct">a. Sim<br>
		<input type="radio" name="q1" value="b">b. Não<br>
		<input type="radio" name="q1" value="c">c. Quem é que sabe?<br><br>
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>2.O que significa ser um evento “Lixo Zero”?</h3>
		<input type="radio" name="q2" value="correct">a. Mandar para o aterro sanitário 100% de tudo que for descartado<br>
		<input type="radio" name="q2" value="a">b. Mandar para o aterro sanitário 30% de tudo que for descartado<br>
		<input type="radio" name="q2" value="c">c. Não ter nenhum lixo<br>
		<input type="radio" name="q2" value="d">d. Mandar para o aterro sanitário 5% de tudo que for descartado<br>
		<input type="radio" name="q2" value="e">e. Mandar para o aterro sanitário 20% de tudo que for descartado<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>3.Temos copos descartáveis no Carnaval no Parque?</h3>
		<input type="radio" name="q3" value="correct">a. Sim<br>
		<input type="radio" name="q3" value="b">b. Não<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>4.Você pode devolver seu ecocopo e recuperar seu dinheiro?</h3>
		<input type="radio" name="q4" value="correct">a. Somente na saída<br>
		<input type="radio" name="q4" value="a">b. Nunca<br>
		<input type="radio" name="q4" value="c">c. A qualquer momento<br>
		<input type="radio" name="q4" value="d">d. No outro dia<br>
		<input type="radio" name="q4" value="e">e. Nao pode devolver o ecocopo<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>5.O Carnaval no Parque contribui para o aquecimento global?</h3>
		<input type="radio" name="q5" value="a">a. Sim<br>
		<input type="radio" name="q5" value="b">b. Não<br>
		<input type="radio" name="q5" value="c">c. Aquecimento de quem?<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>6.O papel higiênico dos banheiros pode ser jogado na privada?</h3>
		<input type="radio" name="q6" value="a">a. Sim<br>
		<input type="radio" name="q6" value="correct">b. Não<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>7.O papel higiênico dos banheiros é hidrossolúvel?</h3>
		<input type="radio" name="q7" value="a">a. Sim<br>
		<input type="radio" name="q7" value="b">b. Não<br>
		<input type="radio" name="q7" value="correct">c. O que é hidrossolúvel mesmo???<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>8.O papel higiênico pode ser jogado no lixo?</h3>
		<input type="radio" name="q8" value="a">a. Sim<br>
		<input type="radio" name="q8" value="b">b. Não<br>
		<input type="radio" name="q8" value="correct">c. Depende do horário<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>9.Para quem paga meia entrada e não leva carteira de estudante, é obrigatório a doação do kg de alimento?</h3>
		<input type="radio" name="q9" value="a">a. Não<br>
		<input type="radio" name="q9" value="b">b. Sim<br>
		<input type="radio" name="q9" value="correct">c. Só se a pessoa tiver com seus pais juntos<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>10.O que vão virar todos os resíduos orgânicos do Carnaval do Parque?</h3>
		<input type="radio" name="q10" value="a">a. Lixo<br>
		<input type="radio" name="q10" value="b">b. Energia<br>
		<input type="radio" name="q10" value="correct">c. Glitter<br>
		<input type="radio" name="q10" value="d">d. Adubo<br><br>
		<input type="radio" name="q10" value="e">e. Sabão<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>11.O uso do ecocopo Carnaval no Parque evita quantos mil copos descartáveis no mundo?</h3>
		<input type="radio" name="q11" value="a">a. 1 bilhão<br>
		<input type="radio" name="q11" value="b">b. 1 milhão<br>
		<input type="radio" name="q11" value="c">c. 200 mil<br>
		<input type="radio" name="q11" value="correct">d. 300 mil<br>
		<input type="radio" name="q11" value="e">e. 10 milhões<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>12.Como o Carnaval no Parque compensa suas emissões de Co2 emitidas no evento?</h3>
		<input type="radio" name="q12" value="a">a. Reciclando o lixo<br>
		<input type="radio" name="q12" value="correct">b. Limpando o lago<br>
		<input type="radio" name="q12" value="c">c. Plantando árvores<br>
		<input type="radio" name="q12" value="d">d. O que é Co2? Faltei as aulas de química <br>
		<input type="radio" name="q12" value="e">e. Dançando muuuuito<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>13.De onde vem a maior parte das emissões de Co2 do Carnaval no Parque?</h3>
		<input type="radio" name="q13" value="correct">a. Do suor das pessoas<br>
		<input type="radio" name="q13" value="b">b. Dos carros<br>
		<input type="radio" name="q13" value="c">c. Dos peidos das pessoas<br>
		<input type="radio" name="q13" value="d">d. Da água da chuva<br>
		<input type="radio" name="q13" value="e">e. Do Sol<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>14.Temos lixeiras com porta líquidos?</h3>
		<input type="radio" name="q14" value="a">a. Não<br>
		<input type="radio" name="q14" value="correct">b. Sim<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>15.Qual o nome da empresa de limpeza parceira do Carnaval no Parque?</h3>
		<input type="radio" name="q15" value="a">a. Limpa tudo<br>
		<input type="radio" name="q15" value="b">b. Aliança Limpeza<br>
		<input type="radio" name="q15" value="c">c. Acobraz<br>
		<input type="radio" name="q15" value="correct">d. Pato Purific<br>
		<input type="radio" name="q15" value="e">e. Lixo Zero<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>16.Os descartáveis do Carnaval no Parque são compostáveis?</h3>
		<input type="radio" name="q16" value="correct">a. Sim<br>
		<input type="radio" name="q16" value="b">b. Não<br>
		<input type="radio" name="q16" value="c">c. Talvez<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>17.O Carnaval no Parque faz reuso de materiais de outros eventos?</h3>
		<input type="radio" name="q17" value="correct">a. Não<br>
		<input type="radio" name="q17" value="b">b. Sim<br>
		<input type="radio" name="q17" value="c">c. Não me lembro disso<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>18.Existem PCD (pessoas com deficiencia) trabalhando no Carnaval no Parque?</h3>
		<input type="radio" name="q18" value="a">a. Não<br>
		<input type="radio" name="q18" value="correct">b. Sim<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>19.Quantos quilos de alimentos o Carnaval no Parque estima receber?</h3>
		<input type="radio" name="q19" value="correct">a. 100 kilos<br>
		<input type="radio" name="q19" value="b">b. 10 toneladas<br>
		<input type="radio" name="q19" value="c">c. 25 toneladas<br>
		<input type="radio" name="q19" value="d">d. 70 toneladas<br>
		<input type="radio" name="q19" value="e">e. O peso de 2 cavalos macho<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>

	<fieldset><h3>20.Quantos quilos de alimentos o Carnaval no Parque arrecadou em 2017?</h3>
		<input type="radio" name="q20" value="a">a. 100 kilos<br>
		<input type="radio" name="q20" value="b">b. 16 toneladas<br>
		<input type="radio" name="q20" value="correct">c. 70 toneladas<br>
		<input type="radio" name="q20" value="d">d. Peso de uma girafa<br>
		<input type="radio" name="q20" value="e">e. 1000 quilos<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" class="submit" name="submit" value="submit" onclick="score()">
	</fieldset>
<br>
</form>
</body>
</html>













