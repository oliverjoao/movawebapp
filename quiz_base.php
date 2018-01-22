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
        <style type="text/css">#msform fieldset:not(:first-of-type) {display: none;}</style>
    </head>	

    <body>
<section class="container">
	<div class="card">
      <div class="card-body">
		<form action="quizsubmit.php" id="msform" method="get" name="form">

			<fieldset>
				<h3>1.Routine is not loaded until it is called. All routines are kept on disk in a relocatable load format. The main program is loaded into memory & is executed. This type of loading is called _________ </h3>
				<input type="radio" name="q1" value="b">b. Dynamic Loading<br>
				<input type="radio" name="q1" value="correct">c. Dynamic Linking<br>
				<input type="radio" name="q1" value="d">d. Overlays<br><br>
				<input type="button" name="next" value="Confirmar" class="next-action-button">	

			</fieldset>
			<fieldset>
				<h3>2	.Which is not the state of the process ?</h3>
				<input type="radio" name="q25" value="a">a. Blocked<br>
				<input type="radio" name="q25" value="b">b. Running<br>
				<input type="radio" name="q25" value="correct">c. Privileged<br>
				<input type="radio" name="q25" value="d">d. Ready<br><br>	
				<input type="button" class="submit" name="submit" value="submit" onclick="score()">
			</fieldset>
		</form>
		</div>
	</div>
</section>	

    <script src="assets/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">checktime(20,"quiztime");</script>

    <script> // controla botoes de perguntas ( proxima e anterior) 
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
					duration: 300	, 
					complete: function()
					{
						current_fs.hide();
						next_fs.show(); 
					}
				});
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

	<script type="text/javascript">  // botao "like" de confirmar
			
	var check_status = false;
	var like_cnt = $("#like-cnt");
	var like_parent = $(".like-container");

	var burst = new mojs.Burst({
	  parent: like_parent,
	  radius:   { 20: 60 },
	  count: 15,
	  angle:{0:30},
	  children: {
	    delay: 250,
	    duration: 700,
	    radius:{10: 0},
	    fill:   [ '#ddca7e' ],
	    easing: 		mojs.easing.bezier(.08,.69,.39,.97)
	  }
	});

	$("#like-cnt").click(function(){
	  var t1 = new TimelineLite();
	  var t2 = new TimelineLite();
	  if(!check_status){
	    t1.set(like_cnt, {scale:0});
	    t1.set('.like-btn', {scale: 0});
	    t1.to(like_cnt, 0.6, {scale:1, background: '#ddca7e',ease: Expo.easeOut});
	    t2.to('.like-btn', 0.65, {scale: 1, ease: Elastic.easeOut.config(1, 0.3)}, '+=0.2');
	//    t1.timeScale(5);
	    check_status=true;
	    //circleShape.replay();
	    burst.replay();
	  }
	  else{
	    t1.to(like_cnt, 1, {scale:1})
	      .to(like_cnt, 1, {scale:1, background: 'rgba(255,255,255,0.3)', ease: Power4.easeOut});
	    t1.timeScale(7);
	    check_status=false;
	  }
	  
	})
	</script>
    </body>
</html>