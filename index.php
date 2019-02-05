<?php
/**
 * Conditional to divert to time-specific content
 *
 * @package Lentorre Lodge
 */
?>

<style>
    
.loading {
    position: relative;
    display: grid;
    grid-template-rows: auto auto;
    height:100%;
    width:100%;
    align-content: center;
    justify-content: center;
    text-align: center;
    background: hsl(29, 33%, 90%);
}    

svg {
    width:10em;
    height: 10em;
}    

@-webkit-keyframes svg_pulse {
	 0% {
	 	radius: 10;
    transform-origin: center center;
		transform: scale(.25);
		opacity: 0;
	 }
   
   25% {
     opacity: .5;
   }

	 50% {
		opacity: .5;
	 }
	 100% {
	  transform-origin: center center;
		transform: scale(1.5);
		opacity: 0;
	 }
}

.svg-pulse .pulse {
    -webkit-animation: svg_pulse 6s ease;
    -webkit-animation-iteration-count: infinite;
    fill: hsl(30, 6%, 54%);
}

.svg-pulse .two {
  opacity: 0;
  animation-delay: 1.5s;
}

.svg-pulse .three {
  opacity: 0;
  animation-delay: 3s;
} 

.svg-pulse .four {
  opacity: 0;
  animation-delay: 4.5s;
}    

p {
    text-transform: uppercase;
    color: hsl(32, 6%, 50%);
    font-weight: 900;
    letter-spacing: 2px;
}    
    
</style>




<div class="loading">
  
  <svg version="1.1" class="svg-pulse" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">
    <circle class="pulse" fill="#E21A9E" stroke-miterlimit="10" cx="40" cy="40" r="14"/>
    <circle class="pulse two" fill="#E21A9E" stroke-miterlimit="10" cx="40" cy="40" r="14"/>
    <circle class="pulse three" fill="#E21A9E" stroke-miterlimit="10" cx="40" cy="40" r="14"/>
    <circle class="pulse four" fill="#E21A9E" stroke-miterlimit="10" cx="40" cy="40" r="14"/>
</svg>
 
 <p>Loading</p>
  
</div>

<script>
    var today = new Date().getHours();

    if (today >= 0 && today < 8) {
        window.location.replace("/nightime-description");
    }
    
    if (today >= 8 && today < 12) {
        window.location.replace("/morning-description");
    }
    
    if (today >= 12 && today < 15) {
        window.location.replace("/lunchtime-description");
    }
    
    if (today >= 15 && today < 18) {
        window.location.replace("/afternoon-description");
    }
    
    if (today >= 18 && today < 22) {
        window.location.replace("/evening-description");
    }  
    
    if (today >= 22 && today < 23) {
        window.location.replace("/night-time-description");
    }
  </script>

