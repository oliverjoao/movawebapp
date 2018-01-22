//Quiz application
		//An array of questions and answers
		var questions = [	
    ["Taxonomy is the __________ of organisms.","structure","classification","dissecting","opening","B"],
	["How many charactersitics do all living things have in common?", "7","4","6","3","A"],
	["Which of the following is not a taxanomic classifcation?", "kingdom", "height", "phyla","class","B"],
	["Various species are located and classified in an ____________.", "habitat","chart","ecosystem","group","C"],
	];
    var random = Math.floor(Math.random() * questions.length);
		  var question = questions[random][0]; //random question 
			var answerA = questions[random][1];
			var answerB = questions[random][2];
			var answerC = questions[random][3];
			var answerD = questions[random][4];

		//Choose a random question with relative answers from the array
    function randomize() {
      random = Math.floor(Math.random() * questions.length);
		  question = questions[random][0]; //random question 
			answerA = questions[random][1];
			answerB = questions[random][2];
			answerC = questions[random][3];
			answerD = questions[random][4];
    }
		
		//Display one question at a time with relative answer out of 15 random questions
		function renderQuestions() {
		var test = document.getElementById("test");
		var questionNumber = 1;
		test.innerHTML =  "<div id='question'>"+questionNumber++ +")"+ question +"</div>";
		test.innerHTML +="<div id='answerA'><button onclick='next()' value='A' name='choices'>"+"(a) "+answerA+"</button></div>";
		test.innerHTML +="<div><button onclick='next()' value='B' name='choices'>"+"(b) "+answerB+"</button></div>";
		test.innerHTML +="<div><button onclick='next()' value='C' name='choices'>"+"(c) "+answerC+"</button></div>";
		test.innerHTML +="<div><button onclick='next()' value='D' name='choices'>"+"(d) "+answerD+"</button></div>";
      test.innerHTML += questions[random][5];
		}
    
    randomize();
		renderQuestions();
		
		//question
		//When the answer is clicked next question is rendered randomly
		function next() {
      randomize();
			renderQuestions();
		}