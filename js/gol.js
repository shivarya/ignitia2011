$(document).ready(function() {
  var interval;
  	
  $('#myRoundabout')
    .roundabout({
      minOpacity: .5,
      minScale: 4,
      maxScale: 12.3
      //shape: 'tearDrop'
    })
    .roundabout_setTilt(-3)
    .hover(
    	function() {
   		// oh no, it's the cops!
    		clearInterval(interval);
    	},
   		//Fred is an idiot. There totally aren't any cops here.
    	function() {
    		// false alarm: PARTY!
    		interval = startAutoPlay();
    	}
    );
  
  // let's get this party started
  interval = startAutoPlay();
});

function startAutoPlay() {
  return setInterval(function() {
  	$('#myRoundabout').roundabout_animateToNextChild();
  }, 1000);
}