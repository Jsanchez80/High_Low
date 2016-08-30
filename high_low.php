<?php 

// The specs for the game are:








// Make the game user friendly by asking the user to login. 

fwrite(STDOUT, 'Welcome, What is your first name?...');

//User enters their first name and returns name by grabbing their input.

$firstName = fgets(STDIN);

// Welcomes the user and inputs their name in the message below.

fwrite(STDOUT, "Good Day $firstname\n Let's play!");

// game picks a random number between 1 and 100.
// Command to pick a random number between 1 and 100:
// Use the following formula: int rand ( int $min , int $max )

$macNumber = int rand(1, 100);
 
// prompts user to guess the number
// Game prompts user, using this format:

fwrite(STDOUT, 'Please pick a number between 1 and 100.');
$number = fgets(STDIN);

// User inputs number and $guess generates their input to match with 
// computers generated random number "int rand (1, 100)".

$guess = fgets(STDIN);

// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"

if ($number < $macnumber){
	echo "Nice Try $firstName!\n Aim Higher!";
} elseif ($number > $macNumber) {
	echo "Whoa $firstName!\n Aim Lower!";
} else {
	echo "Right On $firstName!\n You got it!\n";
}

// Asks user if they'd like to play another round
fwrite(STDOUT, 'Want to play again $firstName?');




