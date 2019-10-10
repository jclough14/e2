 <?php require 'index-controller.php'; ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8">

 	<title>Document</title>
 </head>

 <body>
 	<h1>Rock, Paper, Scissors</h1>

 	<h2>Mechanics</h2>
 	<p>You choose a shape (rock, paper or scissors).
 		<br>
 		The computer selects a shape.<br>
 		The players reveal each other the shape at the same time.
 		Rock beats scissors, paper beats rock, and scissors beats paper.
 		<br>

 		<h2>Choose your Shape!</h2>

 		<form method='GET' action='process.php'>

 			<input type="radio" name="shape" value='Rock'> Rock<br>
 			<input type="radio" name="shape" value='Paper'> Paper<br>
 			<input type="radio" name="shape" value='Scissors'> Scissors<br>

 			<br>
 			<button type='submit'>REVEAL!</button>

 		</form>

 		<?php if ($showResults) { ?>
 			<h2>Results</h2>

 			You threw a <?php echo $playerShape ?> <br>
 			The computer threw a <?php echo $CPUShape ?> <br>

 			<?php echo $result ?>
 			<form action='index.php'><br>
 				<input type="submit" value='RETRY!'>
 			</form>
 		<?php } ?>




 </body>

 </html>