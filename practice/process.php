<?php

session_start();

## Declaring starting variables
$playerShape = $_GET['shape'];
$computerOptions = ['Rock', 'Paper', 'Scissors'];
$computerShape = $computerOptions[rand(0, 2)];

## Determining winner
if ($playerShape == $computerShape) {
    $result  = "It's a tie!";
} elseif ($playerShape == 'Rock' and $computerShape == 'Scissors') {
    $result = "You win!";
} elseif ($playerShape == 'Rock' and $computerShape == 'Paper') {
    $result = "The computer wins!";
} elseif ($playerShape == 'Paper' and $computerShape == 'Rock') {
    $result = "You win!";
} elseif ($playerShape == 'Paper' and $computerShape == 'Scissors') {
    $result = "The computer wins!";
} elseif ($playerShape == 'Scissors' and $computerShape == 'Paper') {
    $result = "You win!";
} elseif ($playerShape == 'Scissors' and $computerShape == 'Rock') {
    $result = "The computer wins!";
}

## Outputting variables to index-controller 
$_SESSION['playerShape'] = $playerShape;
$_SESSION['result'] = $result;
$_SESSION['CPUShape'] = $computerShape;
header('Location: index.php');
