<?php
 
 if ($argc == 3) {
 	echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
 } 
//echo 
//1.  Make the game user friendly by asking the user to login. 

fwrite(STDOUT, 'Welcome, What is your first name?');


//2. User enters their first name and returns name by grabbing their input.

$firstName = trim(fgets(STDIN));


//3. Explains that the random number will start where the user sets the minimum value. 

fwrite(STDOUT, "Perfect " . $firstName .  ". Let's set the parameters for this game!" . $firstName . " In order for you to guess my number, set a minimum value where I can start at...");

$minNumber = trim(fgets(STDIN));

//4. Explain that the random number stops at this number

fwrite(STDOUT, "Great, Now let's set and a max value, that way I know where I can stop at.");

$maxNumber = trim(fgets(STDIN));

//5. Game picks a random number between parameters set in steps 3 & 4 .
// Once numbers are set, game will begin
// Use the following formula: int rand ( int $min , int $max )

$rand  = rand($minNumber, $maxNumber);
	echo ($rand);

 
//6. Prompts user to guess the number
// 		Game Play Begins
// 		Game prompts user, using this format:

fwrite(STDOUT, "Please pick a number between $minNumber and $maxNumber.");

// User inputs number and $guess generates their input to match with 
// computers generated random number "int rand (1, 100)".

$guess = trim(fgets(STDIN));



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
fwrite(STDOUT, "Game Over $firstName!");



