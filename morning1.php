<?php
//Find whats wrong with this program
$selection = 0; //the already defind meal the user picked
//This functon takes the users order and return the total
function getTotal($userSelection) {
$cookie = 3.00; //This the cost of cookies
$chips = 10.00; //Cost of Chips
$soda  = 1.00;// Cosst of Soda
	//Checks if user wants the combo meal of 0
	if($userSelection == 0) {
		//Calculate Total
		$userSelection = $cookie + $chips;
		echo $userSelection; //Prints out the total amount
	}
}

getTotal($selection); //RUns the function with the users order
?>