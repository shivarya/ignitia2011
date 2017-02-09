 jQuery(function( $ ){

		$('#menu a').click(function(){
			$.scrollTo( this.hash , 1600);
			return false;
		});

        $('#menu_f a').click(function(){
			$.scrollTo( this.hash , 1000);
			return false;
		});

		$('.up').click(function(){
			$.scrollTo( this.hash , 1900);
			return false;
		});

		$('.cn a').add('#small_menu2 a').click(function(){
			$.scrollTo( this.hash , 3000);
			return false;
		});
		$('#small_menu a').add('#small_menu2 a').click(function(){
			$.scrollTo( this.hash , 1000);
			return false;
		});
		
			
		
	});