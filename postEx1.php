<?php

	$userInput = $_POST['userInput']; //Takes the name of userInput in the form 
	$myName = "" ;//Enter your name
	function checksName() {
		if ($userInput == $myName) {
			echo "My name is ". $userInput;
		} else {
			echo "My name is not ". $userInput;
		}
	}
	checksName(); //Runs function checksName()

?>
