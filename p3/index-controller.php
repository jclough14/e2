<?php
# Jonathan Clough DGMD E-2, Fall 2019

# Setting up arrays
$outcomes = ['Rock', 'Paper', 'Scissors'];
$player_1_roll_result = [];
$player_2_roll_result = [];
$game_result = [];

# Setting up variables
$player_1_wins = 0;
$player_2_wins = 0;
$game_number = 0;

# While loop for each game
while ($player_1_wins <= 2 and $player_2_wins <= 2) {

    # Determining player roll numerically
    $player_1_roll = $outcomes[rand(0, 2)];
    $player_2_roll = $outcomes[rand(0, 2)];

    # Determining winner
    if ($player_1_roll == $player_2_roll) {
        $result  = "It's a tie!";
    } elseif ($player_1_roll == 'Rock' and $player_2_roll == 'Scissors') {
        $result = "Player 1 wins!";
        $player_1_wins = $player_1_wins + 1;
    } elseif ($player_1_roll == 'Rock' and $player_2_roll == 'Paper') {
        $result = "Player 2 wins!";
        $player_2_wins = $player_2_wins + 1;
    } elseif ($player_1_roll == 'Paper' and $player_2_roll == 'Rock') {
        $result = "Player 1 wins!";
        $player_1_wins = $player_1_wins + 1;
    } elseif ($player_1_roll == 'Paper' and $player_2_roll == 'Scissors') {
        $result = "Player 2 wins!";
        $player_2_wins = $player_2_wins + 1;
    } elseif ($player_1_roll == 'Scissors' and $player_2_roll == 'Paper') {
        $result = "Player 1 wins!";
        $player_1_wins = $player_1_wins + 1;
    } elseif ($player_1_roll == 'Scissors' and $player_2_roll == 'Rock') {
        $result = "Player 2 wins!";
        $player_2_wins = $player_2_wins + 1;
    }

    # Adding to arrays and variables
    $game_number = $game_number + 1;
    $game_result[] = $result;
    $player_1_roll_result[] = $player_1_roll;
    $player_2_roll_result[] = $player_2_roll;
}

# Declaring winner
if ($player_1_wins > $player_2_wins) {
    $victor = 'Player 1';
    $loser = 'Player 2';
} else {
    $victor = 'Player 2';
    $loser = 'Player 1';
}
