<?php
/**
 * Conditional to divert to time-specific content
 *
 * @package Lentorre Lodge
 */
?>
<html>

<script type="text/javascript">

function detectIE() {
  var ua = window.navigator.userAgent;
  
  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    return true;
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    return true;
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 15) {
    return false;
  }

  // other browser
  return false;
}

if(detectIE()){
    window.location.replace("http://lentorre-lodge.local/old-browser");
} else {
  //document.getElementById("ie").innerHTML = "No it's not!";
}

</script>

<script>

    var today = new Date().getHours();

    if (today >= 0 && today < 1) { window.location.replace("/midnight");}

    if (today >= 1 && today < 2) { window.location.replace("/1am");}

    if (today >= 2 && today < 3) { window.location.replace("/2am");}

    if (today >= 3 && today < 4) { window.location.replace("/3am");}

    if (today >= 4 && today < 5) { window.location.replace("/4am");}

    if (today >= 5 && today < 6) { window.location.replace("/5am");}

    if (today >= 6 && today < 7) { window.location.replace("/6am");}

    if (today >= 7 && today < 8) { window.location.replace("/7am");}

    if (today >= 8 && today < 9) { window.location.replace("/8am");}

    if (today >= 9 && today < 10) { window.location.replace("/9am");}

    if (today >= 10 && today < 11) { window.location.replace("/10am");}

    if (today >= 11 && today < 12) { window.location.replace("/11am");}

    if (today >= 12 && today < 13) { window.location.replace("/12pm");}

    if (today >= 13 && today < 14) { window.location.replace("/1pm");}

    if (today >= 14 && today < 15) { window.location.replace("/2pm");}

    if (today >= 15 && today < 16) { window.location.replace("/3pm");}

    if (today >= 16 && today < 17) { window.location.replace("/4pm");}

    if (today >= 17 && today < 18) { window.location.replace("/5pm");}

    if (today >= 18 && today < 19) { window.location.replace("/6pm");}

    if (today >= 19 && today < 20) { window.location.replace("/7pm");}

    if (today >= 20 && today < 21) { window.location.replace("/8pm");}

    if (today >= 21 && today < 22) { window.location.replace("/9pm");}

    if (today >= 22 && today < 23) { window.location.replace("/10pm");}

    if (today >= 23 && today < 24) { window.location.replace("/11pm");}

</script>

<?php get_template_part( 'template-parts/loader');?>

</html>