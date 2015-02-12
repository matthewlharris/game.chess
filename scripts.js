// set size of board and pieces
$(window).load(function(){
	var window_width = $(window).width();
	var window_height = $(window).height();
	if (window_width > window_height){
		var new_board_size = window_height * .85;
		var new_square_size = new_board_size / 8;
		var new_piece_size = new_square_size * .7;
		var new_pawn_size = new_square_size * .6;
		$('.piece').css('width', new_piece_size + 'px');
		$('.pawn').css('width', new_pawn_size + 'px');
		$('.square').css({'height' : new_square_size + 'px', 'width' : new_square_size + 'px'});
		$('#board').css({'height' : new_board_size + 'px', 'width' : new_board_size + 'px', 'visibility' : 'visible'});
	}else{
		var new_board_size = window_width * .85;
		var new_square_size = new_board_size / 8;
		var new_piece_size = new_square_size * .7;
		var new_pawn_size = new_square_size * .6;
		$('.piece').css('width', new_piece_size + 'px');
		$('.pawn').css('width', new_pawn_size + 'px');
		$('.square').css({'height' : new_square_size + 'px', 'width' : new_square_size + 'px'});
		$('#board').css({'height' : new_board_size + 'px', 'width' : new_board_size + 'px', 'visibility' : 'visible'});
	}
});

function resize(){
	var window_width = $(window).width();
	var window_height = $(window).height();
	if (window_width > window_height){
		var new_board_size = window_height * .85;
		var new_square_size = new_board_size / 8;
		var new_piece_size = new_square_size * .7;
		var new_pawn_size = new_square_size * .6;
		$('.piece').css('width', new_piece_size + 'px');
		$('.pawn').css('width', new_pawn_size + 'px');
		$('.square').css({'height' : new_square_size + 'px', 'width' : new_square_size + 'px'});
		$('#board').css({'height' : new_board_size + 'px', 'width' : new_board_size + 'px'});
	}else{
		var new_board_size = window_width * .85;
		var new_square_size = new_board_size / 8;
		var new_piece_size = new_square_size * .7;
		var new_pawn_size = new_square_size * .6;
		$('.piece').css('width', new_piece_size + 'px');
		$('.pawn').css('width', new_pawn_size + 'px');
		$('.square').css({'height' : new_square_size + 'px', 'width' : new_square_size + 'px'});
		$('#board').css({'height' : new_board_size + 'px', 'width' : new_board_size + 'px'});
	}
}

// reset size of board and pieces on window resize
$(window).resize(function(){
	resize();
});

// highlight clicked square
$('.square').click(function(){
	$('.square').css('box-shadow', 'none');
	$(this).css('box-shadow', 'yellow 0px 0px 3px 3px inset');
});

// move a chess piece
var url = 'new_game=Y';
var previous_url;
var ready_to_move = 'N';
var active_piece_html;
var moving_square;
$('.square').click(function(){
	if( ready_to_move == 'N' ){
		if( $(this).attr('data-occupied') == 'Y' ){
			active_piece_html = $(this).html();
			ready_to_move = 'Y';
			moving_square = $(this).attr('id');
		}
	}else if( ready_to_move == 'Y' ){
		var moving_square_color = $('#' + moving_square).find('.piece').attr('data-color');
		var new_square_color = $(this).find('.piece').attr('data-color');
		if( moving_square_color == new_square_color ){
			moving_square = $(this).attr('id');
			active_piece_html = $(this).html();
			return false;
		}
		get_url();
		previous_url = url;
		if( $(this).attr('data-occupied') == 'Y' ){
			var points = $(this).find('.piece').attr('data-points');
			var color = $(this).find('.piece').attr('data-color');
			if( color == 'black' ){
				black_score -= points;
				$('#black-score .score').html(black_score);
			}else if( color == 'white' ){
				white_score -= points;
				$('#white-score .score').html(white_score);
			}
		}
		$('#' + moving_square).html('');
		$('#' + moving_square).attr('data-occupied', 'N');
		$(this).html(active_piece_html);
		$(this).attr('data-occupied', 'Y');
		ready_to_move = 'N';
	}
});

// rotate board
var rotated = 'N';
$('#rotate-button').click(function(){
	if ( rotated == 'N' ){
		rotated = 'Y';
	}else if( rotated == 'Y' ){
		rotated = 'N';
	}
	$('#board').toggleClass('rotate-board');
	$('.piece').toggleClass('rotate-piece');
});


// get game url function
function get_url(){
	url = 'existing_game=Y';
	$('.square').each(function(){
		if( $(this).attr('data-occupied') == 'Y' ){
			var square = $(this).attr('id');
			var color = $(this).find('.piece').attr('data-color');
			var piece = $(this).find('.piece').attr('data-piece');
			url += '&' + square + '=' + color + piece;
		}
	});
}

// get game url on button click
$('#get-url-button').click(function(){
	get_url();
	$('#game-url-popup').css('display', 'block');
	$('#game-url-popup textarea').val('http://' + location.hostname + '/chess?' + url);
	$('#game-url-popup textarea').select();
});

// close url popup on button click
$('#close-url-popup').click(function(){
	$('#game-url-popup').css('display', 'none');
});

// close url popup on esc keypress
$(window).keypress(function(e){
	if( e.keyCode == '27' ){
		$('#game-url-popup').css('display', 'none');
	}
});

// take back move
$('#take-back-move-button').click(function(){
	$('#ajax-spinner').fadeIn(0);
	if( previous_url == null ){
	$('#ajax-spinner').fadeOut(300);
	}else{
		var take_back = $.ajax({
			url: "/game.chess/take.back.move.php",
		  type: "GET",
		  data: "rotated=" + rotated + "&" + previous_url,
		  dataType: "script",
		  success: function(data){
		  	data;
		 	}
		});
	}
});


// start new game
$('#new-game-button').click(function(){
	window.location.href='chess';
});





