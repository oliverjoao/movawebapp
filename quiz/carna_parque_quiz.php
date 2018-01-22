<?php
include("connection.php");
session_start();
$user_check=$_SESSION["name"];
 
if(!isset($user_check))
{
header("Location: login1.php");
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Quiz no Parque</title> 
        <meta http-equiv="Content-Language" content="pt-br">

        <!-- estilo personalizado -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- esconde todas as perguntas -->
        <style type="text/css">
        body {background-image: url("assets/img/bg-quiz-no-parque.svg");}
        #msform fieldset:not(:first-of-type) {display: none;} #quiztime{
	font-size: 30px;
	color: #1e1e1e;
}</style>
    </head>	

    <body>
    	<section class="container">
	<div class="card">
      <div class="card-body">
		<form action="quizsubmit.php" id="msform" method="get" name="form">


<div id="quiztime"></div>

<form action="quizsubmit.php" id="msform" method="get" name="form" >


	<fieldset><h3>1.Quantos dias vai durar o Carnaval No Parque?</h3>
		<input type="radio" name="q1" value="a">a. 2 <br>
		<input type="radio" name="q1" value="b">b. 5 <br>
		<input type="radio" name="q1" value="correct">c. 4 <br>
		<input type="radio" name="q1" value="d">d. 6 <br>
		<input type="radio" name="q1" value="e">e. 10 <br><br>
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>2.O que significa QTA?</h3>
		<input type="radio" name="q2" value="correct">a. Queijo Tomate Alface<br>
		<input type="radio" name="q2" value="a">b. Quero Te Amar<br>
		<input type="radio" name="q2" value="c">c. Quero Te Alugar<br>
		<input type="radio" name="q2" value="d">d. Quero Te Ajudar<br>
		<input type="radio" name="q2" value="e">e. Quem é Que Sabe?<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>3.Em que ano tivemos nossa primeira edição do Carnaval no Parque?</h3>
		<input type="radio" name="q3" value="a">a. 2016<br>
		<input type="radio" name="q3" value="b">b. 2017<br>
		<input type="radio" name="q3" value="c">c. 1985<br>
		<input type="radio" name="q3" value="correct">d. Essa é a primeira edição<br>
		<input type="radio" name="q3" value="e">e. Não me enche o saco<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>4.Que horas abre o Carnaval no Parque no sábado ?</h3>
		<input type="radio" name="q4" value="correct">a. 10 da manhã<br>
		<input type="radio" name="q4" value="a">b. Meia noite<br>
		<input type="radio" name="q4" value="c">c. 15h<br>
		<input type="radio" name="q4" value="d">d. Nunca abre<br>
		<input type="radio" name="q4" value="e">e. 14h<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>5.Quantos seguidores o Carnaval no Parque tem no instagram?</h3>
		<input type="radio" name="q5" value="a">a. 23 a 27mil <br>
		<input type="radio" name="q5" value="b">b. De 5 a 10 mil<br>
		<input type="radio" name="q5" value="correct">c. Não tem seguidores<br>
		<input type="radio" name="q5" value="d">d. Mais de 100 mil<br>
		<input type="radio" name="q5" value="e">e. De 50 a 55 mil<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>6.O Carnaval no parque tem mais de 50 mil seguidores?</h3>
		<input type="radio" name="q6" value="a">a. Sim<br>
		<input type="radio" name="q6" value="correct">b. Não<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>7.Qual público total do Carnaval No Parque ano passado?</h3>
		<input type="radio" name="q7" value="a">a. 200 pessoas<br>
		<input type="radio" name="q7" value="b">b. 5000 pessoas<br>
		<input type="radio" name="q7" value="c">c. 1 milhão de pessoas<br>
		<input type="radio" name="q7" value="correct">d. 18968 pessoas<br>
		<input type="radio" name="q7" value="e">e. sei lá, véi<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>8.É obrigatório o uso de fantasia no Carnaval no Parque?</h3>
		<input type="radio" name="q8" value="a">a. Sim<br>
		<input type="radio" name="q8" value="b">b. Não<br>
		<input type="radio" name="q8" value="c">c. Quem é que sai de casa sem fantasia no carnaval?<br>
		<input type="radio" name="q8" value="correct">d. Ainda não<br>
		<input type="radio" name="q8" value="e">e. Quero Gliiiitteer!<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>9.Qual o nome do nosso ônibus que passeou pelos bares da cidade levando alegria surpresa para muitas pessoas?</h3>
		<input type="radio" name="q9" value="a">a. Ônibus da alegria<br>
		<input type="radio" name="q9" value="b">b. Baú móvel<br>
		<input type="radio" name="q9" value="correct">c. Batmovel<br>
		<input type="radio" name="q9" value="d">d. BaúCarna<br>
		<input type="radio" name="q9" value="e">e. Carnabaú<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>10.Qual forma de pagamento não aceitamos para compra de ingresso?</h3>
		<input type="radio" name="q10" value="a">a. Cartão de crédito<br>
		<input type="radio" name="q10" value="b">b. Cartão de débito<br>
		<input type="radio" name="q10" value="correct">c. Boleto<br>
		<input type="radio" name="q10" value="d">d. Fiado<br>
		<input type="radio" name="q10" value="e">e. Através de um comissário<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>11.Quem é o nosso muleque presidente mais maroto da história?</h3>
		<input type="radio" name="q11" value="a">a. mlk polvo<br>
		<input type="radio" name="q11" value="b">b. mlk doido<br>
		<input type="radio" name="q11" value="c">c. mlk baraka<br>
		<input type="radio" name="q11" value="correct">d. mlk justo<br>
		<input type="radio" name="q11" value="e">e. mlk jusça<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>12.Qual nosso email para contato?</h3>
		<input type="radio" name="q12" value="a">a. contatocarnavalnoparqur@carna.com.br<br>
		<input type="radio" name="q12" value="correct">b. carnavalnoparque@contato.com.br<br>
		<input type="radio" name="q12" value="c">c. faleconosco@carnaval.com.br<br>
		<input type="radio" name="q12" value="d">d. carnabau@carnaval.com.br<br>
		<input type="radio" name="q12" value="e">e. contato@carnavalnoparque.com.br<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>13.Teremos atração infantil?</h3>
		<input type="radio" name="q13" value="correct">a. Sim<br>
		<input type="radio" name="q13" value="b">b. Não<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>14.Qual desses artistas não teremos no carnaval?</h3>
		<input type="radio" name="q14" value="a">a. Primeiro Beijo<br>
		<input type="radio" name="q14" value="correct">b. Camafeu<br>
		<input type="radio" name="q14" value="c">c. Bloco Eduardo e Mônica<br>
		<input type="radio" name="q14" value="d">d. Psirico<br>
		<input type="radio" name="q14" value="e">e. Dj Alok<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>15.Qual desses artistas não teremos no carnaval?</h3>
		<input type="radio" name="q15" value="a">a. Xand Avião<br>
		<input type="radio" name="q15" value="b">b. Gabriel Diniz<br>
		<input type="radio" name="q15" value="c">c. Kevinho<br>
		<input type="radio" name="q15" value="correct">d. Matheus e Kauan<br>
		<input type="radio" name="q15" value="e">e. Cleber e Cauan<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>16.Qual desses artistas não teremos no carnaval?</h3>
		<input type="radio" name="q16" value="correct">a. Durval<br>
		<input type="radio" name="q16" value="a">b. Bel<br>
		<input type="radio" name="q16" value="c">c. Kevinho<br>
		<input type="radio" name="q16" value="d">d. Saulo<br>
		<input type="radio" name="q16" value="e">e. Léo Santana<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>17.Que dia o Saulo vai tocar no Carnaval No Parque?</h3>
		<input type="radio" name="q17" value="correct">a. Quinta<br>
		<input type="radio" name="q17" value="a">b. Sábado<br>
		<input type="radio" name="q17" value="c">c. Dia de São Nunca<br>
		<input type="radio" name="q17" value="d">d. Segunda<br>
		<input type="radio" name="q17" value="e">e. Terça<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>18.Complete a música do Asa de Águia: Da Primeira Vez que eu te vi…</h3>
		<input type="radio" name="q18" value="a">a. Foi lá no Campo Grande<br>
		<input type="radio" name="q18" value="correct">b. Foi lá Feira da Torre<br>
		<input type="radio" name="q18" value="c">c. Foi na ladeira da Barra<br>
		<input type="radio" name="q18" value="d">d. Foi lá na esquina<br>
		<input type="radio" name="q18" value="e">e. Fingi que não vi<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>19.Qual o principal artista de que começa com a letra “A”?</h3>
		<input type="radio" name="q19" value="correct">a. A louca<br>
		<input type="radio" name="q19" value="a">b. A depravada<br>
		<input type="radio" name="q19" value="c">c. Aluga-se<br>
		<input type="radio" name="q19" value="d">d. Alok<br>
		<input type="radio" name="q19" value="e">e. Não é o Kevinho?<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>20.Quais os principais artistas da sexta-feira?</h3>
		<input type="radio" name="q20" value="a">a. Kléber e Kauã, e Durval<br>
		<input type="radio" name="q20" value="correct">b. Clébio e Cauãn, e Durval<br>
		<input type="radio" name="q20" value="c">c. Cleber e Cauan, e Bell<br>
		<input type="radio" name="q20" value="d">d. Sexta é hoje???<br>
		<input type="radio" name="q20" value="e">e. Durval Lelys, meu rei! E Cleber e Cauan<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>21.Quais os principais artistas de sábado?</h3>
		<input type="radio" name="q21" value="correct">a. Alok e Kevinho<br>
		<input type="radio" name="q21" value="a">b. Leo Santana, Luiza e Maurílio<br>
		<input type="radio" name="q21" value="c">c. Luan Santana, Luiza e Maurílio<br>
		<input type="radio" name="q21" value="d">d. Simone e Simaria, Koringa<br><br>
		<input type="radio" name="q21" value="e">e. Saulo e GD<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>22.Quais os principais artistas de quinta-feira?</h3>
		<input type="radio" name="q22" value="a">a. Leo Santana, Luiza e Maurílio <br>
		<input type="radio" name="q22" value="b">b. Luan Santana, Luiza e Maurílio <br>
		<input type="radio" name="q22" value="c">c. Ivete e Pablo Vittar<br>
		<input type="radio" name="q22" value="correct">d. Simone e Simaria, Koringa<br>
		<input type="radio" name="q22" value="e">e. Alok e Kevinho<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>23.Quais desses artistas estão no Carnaval no Parque que vieram de Salvador?</h3>
		<input type="radio" name="q23" value="a">a. Salvador Dali e Pablo Picasso<br>
		<input type="radio" name="q23" value="correct">b. Pablo Vittar e Pablo Picasso<br>
		<input type="radio" name="q23" value="c">c. Salvador Dali e Pablo Vittar<br>
		<input type="radio" name="q23" value="d">d. Leo Santana e Durval Lelys<br><br>
		<input type="radio" name="q23" value="e">e. Saulo e Kevinho<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>24.Qual desses blocos de carnaval não é de Brasília?</h3>
		<input type="radio" name="q24" value="correct">a. Suvaco da Asa<br>
		<input type="radio" name="q24" value="a">b. Galinho<br>
		<input type="radio" name="q24" value="c">c. Babydol de Nylon<br>
		<input type="radio" name="q24" value="d">d. Camaleão<br>
		<input type="radio" name="q24" value="e">e. Pacotão<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>25.Complete a musica de samba do nosso Carnaval no Parque: Brasília tem…</h3>
		<input type="radio" name="q25" value="a">a. e lá vou eu<br>
		<input type="radio" name="q25" value="b">b. tem tem tem<br>
		<input type="radio" name="q25" value="correct">c. tem de tudo um pouco<br>
		<input type="radio" name="q25" value="d">d. gente que ajuda gente<br>
		<input type="radio" name="q25" value="e">e. na tela da tv no meio desse povo<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" class="submit" name="submit" value="submit" onclick="score()">
	</fieldset>
		</form>
		</div>
	</div>
</section>	
	<script type="text/javascript">checktime(60,"quiztime");</script>
	<script src="assets/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


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
	var pontos=0;
	for(var i=0;i<x.length;i++)
	{ 
		if(x[i].checked)
		{

			if(x[i].value=="correct")
				pontos=pontos+1;
		}
	}
	window.location ="scoreos.php?pontos="+pontos;
}

</script>
</body>
</html>
