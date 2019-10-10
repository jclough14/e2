<?php

session_start();

$playerShape = $_GET['shape'];
$computerOptions = ['Rock', 'Paper', 'Scissors'];
$computerShape = $computerOptions[rand(0, 2)];

if ($playerShape == $computerShape) {
    $result  = "It's a tie!";
} elseif ($playerShape == 'Rock' and $computerShape == 'Scissors') {
    $result = "You win!";
    $player_1_wins = $player_1_wins + 1;
} elseif ($playerShape == 'Rock' and $computerShape == 'Paper') {
    $result = "The computer wins!";
    $player_2_wins = $player_2_wins + 1;
} elseif ($playerShape == 'Paper' and $computerShape == 'Rock') {
    $result = "You win!";
    $player_1_wins = $player_1_wins + 1;
} elseif ($playerShape == 'Paper' and $computerShape == 'Scissors') {
    $result = "The computer wins!";
    $player_2_wins = $player_2_wins + 1;
} elseif ($playerShape == 'Scissors' and $computerShape == 'Paper') {
    $result = "You win!";
    $player_1_wins = $player_1_wins + 1;
} elseif ($playerShape == 'Scissors' and $computerShape == 'Rock') {
    $result = "The computer wins!";
    $player_2_wins = $player_2_wins + 1;
}


$_SESSION['playerShape'] = $playerShape;
$_SESSION['result'] = $result;
$_SESSION['CPUShape'] = $computerShape;
header('Location: index.php');
