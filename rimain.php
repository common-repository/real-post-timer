<?php
/*
Plugin Name: Real Post Timer
Description: Display Timer When Writing Post.
Tags: display timer, post edit
Author URI: http://www.tztape.dk/
Author: Kjeld Hansen
Text Domain: real_post_timer
Requires at least: 4.0
Tested up to: 4.4.2
Version: 1.0
*/

 
add_action('edit_form_advanced','realtimer_my_display_callback');
function realtimer_my_display_callback(  ) {
    ?>
    <style type="text/css">
    	#ripost_timer{     border: 1px solid #333;
    position: fixed;
    top: 23px;
    z-index: 99999;
    background: #fff;
    left: 0;
    right: 0;
    width: 140px;
    margin: auto;
    text-align: center;     font-size: 22px;     min-height: 18px;
    padding: 10px 0; }
    </style>
    <script type="text/javascript">
		var count = 0;
		var ritimer = setInterval(function(){ count++; risetTimer(count) }, 1000);
		function risetTimer(c){
			var h,i,s;
			s = c;
			h = (s - s%3600)/3600; 
			s = s%3600; 
			i = (s - s%60)/60;
			s = s%60;
			document.getElementById('ripost_timer').innerHTML = ('0' + h).slice(-2)+' : '+('0' + i).slice(-2)+' : '+('0' + s).slice(-2);
		}
		
	</script>
    <label id="ripost_timer">
       
    </label>
    
    <?php
}
?>