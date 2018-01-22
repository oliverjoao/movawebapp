<?php
//include("connection.php");
//session_start();
//$user_check=$_SESSION["name"];
 
//if(!isset($user_check))
{
//header("Location: login1.php");
}
?>
<html>
<head>
<title>#BSB Tem</title>
<meta charset="utf-8">
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
	element.innerHTML ="Tempo restante: "+minutos +" Mins "+ segundos + " Secs ";
	if(x<1)
	{
		window.alert("ACABOU!!!");
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
<div id="a">
<div id="quiztime"></div>
<script type="text/javascript">checktime(60,"quiztime");</script>
<form action="quizsubmit.php" id="msform" method="get" name="form" >
	<fieldset><h3>A música criada em Brasília faroeste caboclo dura aproximadamente...</h3>
		<input type="radio" name="q1" value="a">a. Um dia<br>
		<input type="radio" name="q1" value="b">b. Um ano<br>
		<input type="radio" name="q1" value="c">c. Aproximadamente uma década<br>
		<input type="radio" name="q1" value="correct">d. Aproximadamente 10 minutos<br><br>
		<input type="radio" name="q1" value="e">e. Nunca acaba<br><br>
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>2.Qual desses artistas ou banda não saiu de Brasília?</h3>
		<input type="radio" name="q2" value="correct">a. Renato Russo<br>
		<input type="radio" name="q2" value="a">b. Capital Inicial<br>
		<input type="radio" name="q2" value="c">c. Plebe Rude<br>
		<input type="radio" name="q2" value="d">d. Caetano Veloso<br>
		<input type="radio" name="q2" value="e">e. Natiruts<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>3.A musica Faroeste Caboclo é de qual artista de Brasília?</h3>
		<input type="radio" name="q3" value="a">a. Renato Grego<br>
		<input type="radio" name="q3" value="b">b. Dinho ouro preto<br>
		<input type="radio" name="q3" value="c">c. Zelia Ducan<br>
		<input type="radio" name="q3" value="correct">d. Renato Russo<br>
		<input type="radio" name="q3" value="e">e. Cassia Éller<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>4.Qual banda canta a música… “Tire suas mãos de mim, eu nao pertenço a você…"</h3>
		<input type="radio" name="q4" value="correct">a. Paralamas do sucesso<br>
		<input type="radio" name="q4" value="a">b. Natiruts <br>
		<input type="radio" name="q4" value="c">c. Capital Inicial <br>
		<input type="radio" name="q4" value="d">d. Legião Urbana<br>
		<input type="radio" name="q4" value="e">e. Banda Eva<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>5.Qual o nome da primeira banda de Renato Russo?</h3>
		<input type="radio" name="q5" value="a">a. Legião Urbana<br>
		<input type="radio" name="q5" value="b">b. Capital Inicial<br>
		<input type="radio" name="q5" value="correct">c. Plebe Rude<br>
		<input type="radio" name="q5" value="d">d. Aborto Elétrico<br>
		<input type="radio" name="q5" value="e">e. Trio Elétrico<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>6.Complete a música do Capital Inicial: ”Se um dia eu pudesse ver..."</h3>
		<input type="radio" name="q6" value="a">a. você passeando pelas ruas<br>
		<input type="radio" name="q6" value="correct">b. seus olhos coloridos<br>
		<input type="radio" name="q6" value="c">c. e fizesse parar de chover<br>
		<input type="radio" name="q6" value="d">d. o pintinho amarelinho<br>
		<input type="radio" name="q6" value="e">e. meu passado inteiro<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>7.Onde fica a Via S2?</h3>
		<input type="radio" name="q7" value="a">a. Sei Lá!<br>
		<input type="radio" name="q7" value="b">b. Ceilândia<br>
		<input type="radio" name="q7" value="c">c. Sei Não<br>
		<input type="radio" name="q7" value="correct">d. Asa Norte<br>
		<input type="radio" name="q7" value="correct">e. Asa Sul<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>8.Qual cidade fica a Praça do Relógio?</h3>
		<input type="radio" name="q8" value="a">a. Guará<br>
		<input type="radio" name="q8" value="b">b. No filme de volta para o futuro<br>
		<input type="radio" name="q8" value="c">c. Taguatinga<br>
		<input type="radio" name="q8" value="correct">d. Águas Claras<br>
		<input type="radio" name="q8" value="correct">e. Gama<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>9. Em qual quadra se localiza o primeiro Beirute</h3>
		<input type="radio" name="q9" value="a">a. 102 Norte<br>
		<input type="radio" name="q9" value="b">b. 302 Norte<br>
		<input type="radio" name="q9" value="correct">c. 116 Sul<br>
		<input type="radio" name="q9" value="d">d. 109 Sul<br>
		<input type="radio" name="q9" value="e">. 110 Sul<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>10.Quantos anos Brasília tem?</h3>
		<input type="radio" name="q10" value="a">a. 50<br>
		<input type="radio" name="q10" value="b">b. Idade de Cristo<br>
		<input type="radio" name="q10" value="correct">c. 48<br>
		<input type="radio" name="q10" value="d">d. 57<br>
		<input type="radio" name="q10" value="e">e. 71<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>11.Aonde foi a primeira residência de Juscelino Kubitschek?</h3>
		<input type="radio" name="q11" value="a">a. Catetinho<br>
		<input type="radio" name="q11" value="b">b. Praça das fontes<br>
		<input type="radio" name="q11" value="c">c. Esplanada dos ministérios<br>
		<input type="radio" name="q11" value="correct">d. Vila Planalto<br>
		<input type="radio" name="q11" value="e">e. Candangolândia <br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>12.Qual o nome do Parque da Cidade?</h3>
		<input type="radio" name="q12" value="a">a. Nicolândia<br>
		<input type="radio" name="q12" value="correct">b. Ana Lídia<br>
		<input type="radio" name="q12" value="c">c. Sarah Kubitschek<br>
		<input type="radio" name="q12" value="d">d. Central Parque<br>
		<input type="radio" name="q12" value="e">e. Piton Farias<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>13.Qual foi o primeiro nome dado ao Parque da Cidade?</h3>
		<input type="radio" name="q13" value="correct">a. Ana Lídia<br>
		<input type="radio" name="q13" value="b">b. Nicolândia<br>
		<input type="radio" name="q13" value="c">c. Disneylandia<br>
		<input type="radio" name="q13" value="d">d. Rogério Piton Farias<br>
		<input type="radio" name="q13" value="e">e. Sarah Kubitschek<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>14.Brasília é conhecida por ter um formato de…</h3>
		<input type="radio" name="q14" value="a">a. Um Navio<br>
		<input type="radio" name="q14" value="correct">b. Um Jumento<br>
		<input type="radio" name="q14" value="c">c. Um Helicóptero<br>
		<input type="radio" name="q14" value="d">d. Um Avião<br>
		<input type="radio" name="q14" value="e">e. Uma Libélula<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>15.Brasilia também é conhecida por ser a capital do…</h3>
		<input type="radio" name="q15" value="a">a. Axé<br>
		<input type="radio" name="q15" value="b">b. Pagode<br>
		<input type="radio" name="q15" value="c">c. Bolero<br>
		<input type="radio" name="q15" value="correct">d. Rock<br>
		<input type="radio" name="q15" value="e">e. Reggae<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>16.Qual o nome do nosso estádio?</h3>
		<input type="radio" name="q16" value="correct">a. Ayrton Senna<br>
		<input type="radio" name="q16" value="a">b. Zico<br>
		<input type="radio" name="q16" value="c">c. Pelé<br>
		<input type="radio" name="q16" value="d">d. Mr.Bean<br>
		<input type="radio" name="q16" value="e">e. Mané Garrincha<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>17.Quando Brasília foi fundada?</h3>
		<input type="radio" name="q17" value="correct">a. 21/04/1960<br>
		<input type="radio" name="q17" value="a">b. 24/01/1960<br>
		<input type="radio" name="q17" value="c">c. 21/01/1960<br>
		<input type="radio" name="q17" value="d">d. 24/04/1960<br><br>
		<input type="radio" name="q17" value="e">e. mlk Jusça, ajuda eu!<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>18.Qual dessas siglas de endereço não pertence a nossa cidade?</h3>
		<input type="radio" name="q18" value="a">a. SQS<br>
		<input type="radio" name="q18" value="correct">b. SHIS<br>
		<input type="radio" name="q18" value="c">c. SMDB<br>
		<input type="radio" name="q18" value="d">d. QI<br>
		<input type="radio" name="q18" value="e">e. WWW<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>19.O que significa a sigla SCS?</h3>
		<input type="radio" name="q19" value="correct">a. Setor do Comércio Sulamericano<br>
		<input type="radio" name="q19" value="a">b. Setor Comercial Sul<br>
		<input type="radio" name="q19" value="c">c. Setor Carnavalesco Sul<br>
		<input type="radio" name="q19" value="d">d. Só Carnaval Salva<br>
		<input type="radio" name="q19" value="e">e. Salada Com Sal<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>20.Qual dessas ruas não é de Brasília?</h3>
		<input type="radio" name="q20" value="a">a. L2<br>
		<input type="radio" name="q20" value="correct">b. W3<br>
		<input type="radio" name="q20" value="c">c. PQP<br>
		<input type="radio" name="q20" value="d">d. QNE<br>
		<input type="radio" name="q20" value="e">e. QL<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>21.Qual dessas gírias não é de Brasília?</h3>
		<input type="radio" name="q21" value="correct">a. Véi<br>
		<input type="radio" name="q21" value="a">b. Oxenti<br>
		<input type="radio" name="q21" value="c">c. Cabuloso<br>
		<input type="radio" name="q21" value="d">d. Paia<br><br>
		<input type="radio" name="q21" value="e">e. Velho<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>22.Complete a música: “Céu de Brasília traço do arquiteto…"</h3>
		<input type="radio" name="q22" value="a">a. amo ela assim<br>
		<input type="radio" name="q22" value="b">b. odeio ela assim<br>
		<input type="radio" name="q22" value="c">c. gosto tanto dela assim<br>
		<input type="radio" name="q22" value="correct">d. assim não dá pra mim<br>
		<input type="radio" name="q22" value="e">e. ela não gosta de mim<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>23.Qual rua fica abaixo da W3?</h3>
		<input type="radio" name="q23" value="a">a. L2<br>
		<input type="radio" name="q23" value="correct">b. X2<br>
		<input type="radio" name="q23" value="c">c. Xtudo<br>
		<input type="radio" name="q23" value="d">d. X9<br>
		<input type="radio" name="q23" value="e">e. W2<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>24.A Sigla de endereço SQN significa...</h3>
		<input type="radio" name="q24" value="correct">a. Só sei que nada sei<br>
		<input type="radio" name="q24" value="a">b. Só que não<br>
		<input type="radio" name="q24" value="c">c. Sabes que não sei <br>
		<input type="radio" name="q24" value="d">d. Super queijo nórdico<br><br>
		<input type="radio" name="q24" value="e">e. Super quadra norte<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>25.A Sigla de endereço SQS significa</h3>
		<input type="radio" name="q25" value="correct">a. Sabes que sou teu<br>
		<input type="radio" name="q25" value="a">b. Sei que sou capaz<br>
		<input type="radio" name="q25" value="c">c. Só eu que sei<br>
		<input type="radio" name="q25" value="d">d. Super quadra sul<br><br>
		<input type="radio" name="q25" value="e">e. Sai que Sujou<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>26.Brasília tinha um carnaval fora de época chamado…</h3>
		<input type="radio" name="q26" value="correct">a. Calangodangue<br>
		<input type="radio" name="q26" value="a">b. Micareto<br>
		<input type="radio" name="q26" value="c">c. Micarecandanga<br>
		<input type="radio" name="q26" value="d">d. Micarecalango<br>
		<input type="radio" name="q26" value="e">e. Morango do nordeste<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>27.“Pardal” em Brasília é conhecido por ser:</h3>
		<input type="radio" name="q27" value="correct">a. um professor<br>
		<input type="radio" name="q27" value="a">b. uma ave<br>
		<input type="radio" name="q27" value="c">c. objeto fiscalizador de velocidade que nos pega de surpresa<br>
		<input type="radio" name="q27" value="d">d. um animal<br>
		<input type="radio" name="q27" value="e">e. um mamífero<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>28.Qual comida não é típica de Brasília:</h3>
		<input type="radio" name="q28" value="correct">a. Pizza Dom Bosco<br>
		<input type="radio" name="q28" value="a">b. Dog do Baixinho<br>
		<input type="radio" name="q28" value="c">c. Pastel da Viçosa<br>
		<input type="radio" name="q28" value="d">d. Sanduba do Beto<br>
		<input type="radio" name="q28" value="e">e. Cachorro quente do Lande<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>29.Quantas faixas tem o eixo monumental?</h3>
		<input type="radio" name="q29" value="correct">a. 5<br>
		<input type="radio" name="q29" value="a">b. 8<br>
		<input type="radio" name="q29" value="c">c. 2<br>
		<input type="radio" name="q29" value="d">d. Faixa preta<br>
		<input type="radio" name="q29" value="e">e. 6<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>30.As “tesourinhas” da nossa cidade sao conhecidas por</h3>
		<input type="radio" name="q30" value="correct">a. cortar nossos cabelos<br>
		<input type="radio" name="q30" value="a">b. cortar nossa onda<br>
		<input type="radio" name="q30" value="c">c. cortar nada<br>
		<input type="radio" name="q30" value="d">d. nos levar para outra rua, sempre 90º à esquerda<br>
		<input type="radio" name="q30" value="e">e. Eduardos mãos de tesouras<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>31.Quando “a chama eterna” apagou?</h3>
		<input type="radio" name="q31" value="correct">a. Oxi, apagou? dinâmica<br>
		<input type="radio" name="q31" value="a">b. Onde é isso?<br>
		<input type="radio" name="q31" value="c">c. E num era eterna?<br>
		<input type="radio" name="q31" value="d">d. Acho que foi ontem.<br>
		<input type="radio" name="q31" value="e">e. 2016.<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>32.Quanto tempo a “chama eterna” se manteve acesa?</h3>
		<input type="radio" name="q32" value="correct">a. Ad Eternum<br>
		<input type="radio" name="q32" value="a">b. 10 anos<br>
		<input type="radio" name="q32" value="c">c. 30 anos<br>
		<input type="radio" name="q32" value="d">d. 60 anos<br>
		<input type="radio" name="q32" value="e">e. Ela apagou?<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset> 
	<fieldset><h3>33.Qual tamanho da bandeira hasteada na Praça dos 3 poderes?</h3>
		<input type="radio" name="q33" value="a">a. 150m²<br>
		<input type="radio" name="q33" value="b">b. 500m²<br>
		<input type="radio" name="q33" value="correct">c. Não faço idéia<br>
		<input type="radio" name="q33" value="d">d. 286m²<br>
		<input type="radio" name="q33" value="e">e. 197m²<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" class="submit" name="submit" value="submit" onclick="score()">
	</fieldset>
<br>
</form>
</body>
</html>
