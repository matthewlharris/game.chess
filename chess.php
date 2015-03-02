<?php

class new_game {
  
public function game_board() {
return <<<GAME_BOARD
<div id='a8' data-occupied='Y' class='square light'>
				<img data-piece='rook' data-color='black' data-points='5' class='piece' src='/game.chess/black.rook.png'>
		</div>
		<div id='b8' data-occupied='Y' class='square dark'>
				<img data-piece='knight' data-color='black' data-points='3' class='piece' src='/game.chess/black.knight.png'>
		</div>
		<div id='c8' data-occupied='Y' class='square light'>
			<img data-piece='bishop' data-color='black' data-points='3' class='piece' src='/game.chess/black.bishop.png'>
		</div>
		<div id='d8' data-occupied='Y' class='square dark'>
				<img data-piece='queen' data-color='black' data-points='9' class='piece' src='/game.chess/black.queen.png'>
		</div>
		<div id='e8' data-occupied='Y' class='square light'>
				<img data-piece='king' data-color='black' data-points='0' class='piece' src='/game.chess/black.king.png'>
		</div>
		<div id='f8' data-occupied='Y' class='square dark'>
			<img data-piece='bishop' data-color='black' data-points='3' class='piece' src='/game.chess/black.bishop.png'>
		</div>
		<div id='g8' data-occupied='Y' class='square light'>
				<img data-piece='knight' data-color='black' data-points='3' class='piece' src='/game.chess/black.knight.png'>
		</div>
		<div id='h8' data-occupied='Y' class='square dark'>
				<img data-piece='rook' data-color='black' data-points='5' class='piece' src='/game.chess/black.rook.png'>
		</div>
		<div id='a7' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='b7' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='c7' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='d7' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='e7' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='f7' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='g7' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='h7' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='black' data-points='1' class='piece pawn' src='/game.chess/black.pawn.png'>
		</div>
		<div id='a6' data-occupied='N' class='square light'></div>
		<div id='b6' data-occupied='N' class='square dark'></div>
		<div id='c6' data-occupied='N' class='square light'></div>
		<div id='d6' data-occupied='N' class='square dark'></div>
		<div id='e6' data-occupied='N' class='square light'></div>
		<div id='f6' data-occupied='N' class='square dark'></div>
		<div id='g6' data-occupied='N' class='square light'></div>
		<div id='h6' data-occupied='N' class='square dark'></div>
		<div id='a5' data-occupied='N' class='square dark'></div>
		<div id='b5' data-occupied='N' class='square light'></div>
		<div id='c5' data-occupied='N' class='square dark'></div>
		<div id='d5' data-occupied='N' class='square light'></div>
		<div id='e5' data-occupied='N' class='square dark'></div>
		<div id='f5' data-occupied='N' class='square light'></div>
		<div id='g5' data-occupied='N' class='square dark'></div>
		<div id='h5' data-occupied='N' class='square light'></div>
		<div id='a4' data-occupied='N' class='square light'></div>
		<div id='b4' data-occupied='N' class='square dark'></div>
		<div id='c4' data-occupied='N' class='square light'></div>
		<div id='d4' data-occupied='N' class='square dark'></div>
		<div id='e4' data-occupied='N' class='square light'></div>
		<div id='f4' data-occupied='N' class='square dark'></div>
		<div id='g4' data-occupied='N' class='square light'></div>
		<div id='h4' data-occupied='N' class='square dark'></div>
		<div id='a3' data-occupied='N' class='square dark'></div>
		<div id='b3' data-occupied='N' class='square light'></div>
		<div id='c3' data-occupied='N' class='square dark'></div>
		<div id='d3' data-occupied='N' class='square light'></div>
		<div id='e3' data-occupied='N' class='square dark'></div>
		<div id='f3' data-occupied='N' class='square light'></div>
		<div id='g3' data-occupied='N' class='square dark'></div>
		<div id='h3' data-occupied='N' class='square light'></div>
		<div id='a2' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='b2' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='c2' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='d2' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='e2' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='f2' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='g2' data-occupied='Y' class='square light'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='h2' data-occupied='Y' class='square dark'>
				<img data-piece='pawn' data-color='white' data-points='1' class='piece pawn' src='/game.chess/white.pawn.png'>
		</div>
		<div id='a1' data-occupied='Y' class='square dark'>
				<img data-piece='rook' data-color='white' data-points='5' class='piece' src='/game.chess/white.rook.png'>
		</div>
		<div id='b1' data-occupied='Y' class='square light'>
				<img data-piece='knight' data-color='white' data-points='3' class='piece' src='/game.chess/white.knight.png'>
		</div>
		<div id='c1' data-occupied='Y' class='square dark'>
			<img data-piece='bishop' data-color='white' data-points='3' class='piece' src='/game.chess/white.bishop.png'>
		</div>
		<div id='d1' data-occupied='Y' class='square light'>
				<img data-piece='queen' data-color='white' data-points='9' class='piece' src='/game.chess/white.queen.png'>
		</div>
		<div id='e1' data-occupied='Y' class='square dark'>
				<img data-piece='king' data-color='white' data-points='0' class='piece' src='/game.chess/white.king.png'>
		</div>
		<div id='f1' data-occupied='Y' class='square light'>
			<img data-piece='bishop' data-color='white' data-points='3' class='piece' src='/game.chess/white.bishop.png'>
		</div>
		<div id='g1' data-occupied='Y' class='square dark'>
				<img data-piece='knight' data-color='white' data-points='3' class='piece' src='/game.chess/white.knight.png'>
		</div>
		<div id='h1' data-occupied='Y' class='square light'>
				<img data-piece='rook' data-color='white' data-points='5' class='piece' src='/game.chess/white.rook.png'>
		</div> 

GAME_BOARD;
}

} // end new_game class


$start_new_game = new new_game;
$existing_game;
$new_game;
$white_score = '39';
$black_score = '39';


if( $_GET['existing_game'] == 'Y' ){
	$existing_game = 'Y';
}else{
	$new_game = 'Y';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Chess</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/game.chess/octicons/octicons.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/game.chess/style.css">
<?php
echo "<script>var black_score = " . $black_score . "; var white_score = " . $white_score . ";</script>";
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
 
<body>

<div id='pawn-promotion-popup'>
	<div class='promotion-square' data-id='queen'>Queen</div>
	<div class='promotion-square' data-id='rook'>Rook</div>
	<div class='promotion-square' data-id='bishop'>Bishop</div>
	<div class='promotion-square' data-id='knight'>Knight</div>
</div>

<div id='ajax-spinner'><i class='fa fa-rotate-right fa-2x fa-spin'></i></div>

<div id='page-wrapper'>

	<div id='game-url-popup'>
		<div id='close-url-popup'>X</div>
		<br>
		Copy link to share this
		<br>
		position with a friend:
		<br>
		<br>
		<textarea></textarea>
	</div>

	<div id='menu'>
		<div id='menu-options'>
			<div id='new-game-button' title='new game' class='buttons'>new</div>
			<div id='rotate-button' title='rotate board' class='buttons'><span class="mega-octicon octicon-sync"></span></div>
			<div id='take-back-move-button' title='take back move' class='buttons'><span class="mega-octicon octicon-mail-reply"></span></div>
			<div id='get-url-button' title='share game link' class='buttons'><span class="mega-octicon octicon-radio-tower"></span></div>
		</div><!-- end menu options -->

		<div id='score-wrapper'>
			<div id='black-score' title='black score' class='buttons'><span class='score'><?php echo $black_score; ?></span></div>
			<div id='white-score' title='white score' class='buttons'><span class='score'><?php echo $white_score; ?></span></div>
		</div><!-- end score wrapper -->
	</div><!-- end menu -->



	<div id='board' class='new-board'>
		<?php echo $start_new_game->game_board(); ?>
	</div><!-- end board -->

<?php

if ( $_GET['existing_game'] == 'Y' ) {
	echo "<script>";
	echo "$('.square').empty();";
	echo "$('.square').attr('data-occupied', 'N');";
	echo "$('.piece').css('visibility', 'hidden');";
	$black_points = 0;
	$white_points = 0;
	foreach($_GET as $name => $value){
		if ( strlen($name) <> 2 ) {
			echo "";
		}else{
			if ( preg_match('/white/',$value) ){
				$color = 'white';
			}else if ( preg_match('/black/',$value) ){
				$color = 'black';
			}
			if( preg_match('/pawn/',$value) ){
				$piece = 'pawn';
				$points = 1;
			}else if( preg_match('/king/',$value) ){
				$piece = 'king';
				$points = 0;
			}else if( preg_match('/queen/',$value) ){
				$piece = 'queen';
				$points = 9;
			}else if( preg_match('/rook/',$value) ){
				$piece = 'rook';
				$points = 5;
			}else if( preg_match('/bishop/',$value) ){
				$piece = 'bishop';
				$points = 3;
			}else if( preg_match('/knight/',$value) ){
				$piece = 'knight';
				$points = 3;
			}
			if ( $color == 'black' ) {
				$black_points += $points;
			}else if( $color == 'white' ){
				$white_points += $points;
			}
			echo "$('#" . $name . "').attr('data-occupied', 'Y');";
			echo "$('#" . $name . "').html(\"<img data-piece='" . $piece . "' data-color='" . $color . "' data-points='" . $points . "' class='piece " . $piece . "' src='/game.chess/" . $color . "." . $piece . ".png'>\");";
		}
	}
	echo "$('#black-score .score').html('" . $black_points . "');";
	echo "black_score = " . $black_points . ";";
	echo "$('#white-score .score').html('" . $white_points . "');";	
	echo "white_score = " . $white_points . ";";
	echo "</script>";
}

?>

</div><!-- end page wrapper -->


<script src="/game.chess/scripts.js"></script>

</body>
</html>


