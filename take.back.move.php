<?php  

if( $_GET['new_game'] == 'Y' ){
	die;
}

if( $_GET['existing_game'] == 'Y' ){
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
	echo "resize();";
	echo "$('#ajax-spinner').fadeOut(300);";
	if ( $_GET['rotated'] == 'Y' ) {
		echo "$('.piece').addClass('rotate-piece');";
	}
	echo "$('.piece').css('visibility', 'visible');";

}

?>