<?php
// Make the game user friendly by asking the user to login. 

fwrite(STDOUT, 'Welcome, What is your first name?');

//User enters their first name and returns name by grabbing their input.

$firstName = fgets(STDIN);


// Welcomes the user and inputs their name in the message below.

fwrite(STDOUT, "Good Day" . $firstName . "Let's play!" . PHP_EOL);

// game picks a $random number between 1 and 100.
// Command to pick a random number between 1 and 100:
//Use the following formula: int rand ( int $min , int $max )

rand(1, 100);
$rand = rand();
 
// prompts user to guess the number
// Game prompts user, using this format:

fwrite(STDOUT, 'Please pick a number between 1 and 100.');

// User inputs number and $guess generates their input to match with 
// computers generated random number "int rand (1, 100)".

$guess = fgets(STDIN);

// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"

if ($guess < $rand){
	echo "Nice Try $firstName! Aim Higher!";

} elseif ($guess > $rand) {

	echo "Whoa $firstName! Aim Lower!";

} else {

	echo "Right On $firstName! You got it!";
}


// Asks user if they'd like to play another round
fwrite(STDOUT, 'Try again $firstName!');





