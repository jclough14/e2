 <!-- Jonathan Clough DGMD E-2, Fall 2019 -->

 <?php require 'index-controller.php'; ?>

 <!doctype html>
 <html lang='en'>

 <head>
 	<title>PROJECT 2</title>
 	<meta charset='utf-8'>
 </head>

 <body>

 	<h1>Rock, Paper, Scissors</h1>

 	<h2>Mechanics</h2>
 	<p>Each player chooses a shape (rock, paper or scissors).
 		<br>
 		They show each other the shape at the same time.
 		Rock beats scissors, paper beats rock, and scissors beats paper.
 		<br>
 		For this match, it is best 3 out of 5 games (excluding ties)</p>

 	<h2>Results</h2>

 	<?php for ($i = 0; $i < $game_number; $i++) { ?>
 		<p>
 			Player 1 throws a <?php echo $player_1_roll_result[$i]; ?> <br>
 			Player 2 throws a <?php echo $player_2_roll_result[$i]; ?> <br>
 		</p>
 		<h3>Game # <?php echo $i + 1; ?> Result - <?php echo $game_result[$i]; ?></h3>

 	<?php } ?>

 	<h2>It took <?php echo $game_number; ?> games, but <?php echo $victor; ?> finally beat <?php echo $loser; ?>!</h2>

 </body>

 </html>