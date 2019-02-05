<?php
/**
 * ============== Template Name: Home Lower
 *
 * @package Lentorre Lodge
 */
?>
<?php
$backgroundImg = get_field('background_image', 569);
$mapImg = get_field('map_image', 569);
;?>
          
<section  class="sub-hero" style="background-image: url(<?php echo $backgroundImg['url']; ?>);">
  
  <div class="container">
    
    <div class="row">

        <div class="col-12">
              
              <div class="sub-hero__detail">
                  
                <div class="sub-hero__detail__map">
                
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.52 16.02"><defs><style>.cls-1{fill:#1d1d1b;fill-rule:evenodd;}</style></defs><title>Kenya</title><g id="Layer_2" data-name="Layer 2"><g id="Countries"><path class="cls-1" d="M4.08,2l.18-.24.12-.05.15-.21.29-.28L5,1.31,5.37.72,6,0l.17.29L6.49.23l.24,0v1l.27.3.3.06.36-.12.39.1.76,0,.3.18.66.63.38.26.26.3.25.08h.56l.34.15L12,3.05l.28.1h.23l.31,0,.41-.65.15-.2.34-.13h.24l.16-.1.74-.1.22.11.19.34.27.16.59-.1h.41L15.06,3.86l0,6.21,1.11,1,0,.1-.51.62-.13,0-.18.21.1.15-.54.19-.29.4H14.1l-.19.06,0,.11-.23.26v.19l.1.08-.26.4-.25.32v.35l-.24.5-.56.83-.34.13H12l-2-1.38-.14-.16-.06-.2.08-.15-.32-.53L3.81,10.24l-.44,0,.41-1.53.06-.44L4.14,8l.18-.36.26-.25.12-.28L4.86,7V6.82h.54l.14-.38V6.21l.36-.42.05-.33-.11-.33-.23-.2.14-.2L5.56,4.6l-.21-.09L5.15,4l-.36-.35V3.36L4.68,3,4.47,3l0-.27-.15-.09-.1-.41L4.1,2ZM0,10.41H.59l.61,0L0,10.41Z"/></g></g></svg>
                  <p class="heading-secondary heading-secondary__xs"><?php the_field('location_details', 569);?></p>
                      
                </div>
                
                <div class="sub-hero__detail__content">
              
                  <?php the_field('content', 569);?>
            
                </div>
            
              </div><!--sub-hero-detail-->
        
        </div>
      
    </div><!--r-->
  
  </div><!--c-->

</section><!--sub-hero-->  

<section class="leaders">

  <div class="container">
    
    <div class="row no-gutters"> 
      
      <?php if( have_rows('leaders', 569) ): 
      while( have_rows('leaders', 569) ): the_row();  
      $leaderImg = get_sub_field('image', 569);?>
    
      <div class="col-6">    
      
        <div class="leaders__item" style="background-image: url(<?php echo $leaderImg['url']; ?>);">
          
          <h2 class="heading-primary heading-primary__md heading-primary__caps heading-primary__light"><?php the_sub_field('heading', 569);?></h2>    
          
          <?php the_sub_field('content', 569);?> 
          
          <div><!--button was spanning whole grid.  this div stops it spanning-->
              
            <a href="<?php the_sub_field('button_target', 569);?>   " class="button">
                <span><?php the_sub_field('button_text', 569);?></span>
            </a>      
                    
          </div>
          
        </div> 
        
      </div>     
           
      <?php endwhile; endif; ?>
      
    </div><!--r-->
    
  </div><!--c-->
  
</section><!--leaders-->