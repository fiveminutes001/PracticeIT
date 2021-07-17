<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../v/loginAlert.php';	
	include '../../v/structure.php';	
	
	$headerDisplay = new documentHeader();
	$headerDisplay->displayContent();
	
	$question_index = substr(__FILE__, -12,2);
	
	$start_index = ($question_index - 10)*80;
	$end_index = $start_index + 10;
	
	$start_questions_index = $start_index + 1;
	$end_questions_index = $start_questions_index + 79;
		
	$subjectDisplay = new subjectHeader('מילים בעברית לפסיכומטרי',$start_questions_index,$end_questions_index);
	$subjectDisplay->displayContent();
	
	$cardPageDisplay = new cardPage(1,$start_index,$end_index);
	$cardPageDisplay->displayContent();
	
	include 'questionFiles/001-004.php';	
		
	$middleDisplay = new middlePart2();
	$middleDisplay->displayContent();
	
	$cardPageDisplay = new cardPage(0,$start_index+10,$end_index+10);
	$cardPageDisplay->displayContent();
	
/*	//SOLUTIONS
	$solutionDisplay = new solution($solution_array_01->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_02->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_03->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_04->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$middleDisplay = new middlePart();
	$middleDisplay->displayContent();

	//QUESTIONS
	//001 on page
	$questionDisplay = new question($solution_array_01->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//002 on page
	$questionDisplay = new question($solution_array_02->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//003 on page
	$questionDisplay = new question($solution_array_03->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//004 on page
	$questionDisplay = new question($solution_array_04->displaySolutionArray());
	$questionDisplay->displayContent();
*/
	$footerDisplay = new footer(1);
	$footerDisplay->displayContent();
?>
			


	




