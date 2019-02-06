<?php
/**
 * ============== Template Name: Home
 *
 * @package Lentorre Lodge
 */
get_header();?>

<!--<?php the_field('sub_heading');?>
 <?php the_field('heading');?>   -->

<div class="hero">
    
    <div class="hero__upper">
    <?php
        $frontImg = get_field('hero_front');
        $midImg = get_field('hero_mid');
        $rearImg = get_field('hero_rear');     
    ?>   

        <div class="rear-image" style="background-image: url(<?php echo $rearImg['url']; ?>);"></div>    
        
        <div class="mid-image" style="background-image: url(<?php echo $midImg['url']; ?>);"></div>        
        
        <div class="front-image" style="background-image: url(<?php echo $frontImg['url']; ?>);"></div>        

        <div class="headline">
            
            <div class="container">
            
                <div class="row">
                
                    <div class="col-6">                
                
                        <h3 class="heading-secondary heading-secondary__sm"><?php the_field('sub_heading');?></h3>
                           
                        <h2 class="heading-primary heading-primary__xl heading-primary__bold"><?php the_field('heading');?></h2>      

                    </div>
                         
                </div><!--r-->         
                                 
            </div><!--c-->                     
                                 
        </div>

    </div>    
    
    <div id="hero-lower" class="hero__lower">
    
        <div class="timeline">
        
            <div class="hour" id='hour-1'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">1am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>   
            <div class="hour" id='hour-2'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">2am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-3'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">3am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-4'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">4am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-5'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">5am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-6'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">6am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>        
            <div class="hour" id='hour-7'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">7am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-8'><a href="/morning-description" class="link"></a><div class="time-wrapper" value="yeppp"><span class="hour-mark">8am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-9'><a href="/morning-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">9am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-10'><a href="/morning-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">10am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-11'><a href="/morning-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">11am</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-12'><a href="/lunchtime-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">12pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>       
            <div class="hour" id='hour-13'><a href="/lunchtime-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">1pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>      
            <div class="hour" id='hour-14'><a href="/lunchtime-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">2pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-15'><a href="/afternoon-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">3pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-16'><a href="/afternoon-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">4pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-17'><a href="/afternoon-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">5pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-18'><a href="/evening-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">6pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-19'><a href="/evening-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">7pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-20'><a href="/evening-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">8pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-21'><a href="/evening-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">9pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-22'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">10pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-23'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">11pm</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
            <div class="hour" id='hour-00'><a href="/night-time-description" class="link"></a><div class="time-wrapper"><span class="hour-mark">Midnight</span><span></span><?php get_template_part( 'template-parts/svg', 'clock' );?></div></div>  
        
        </div>
    
        <div class="container">
            
            <div class="row">
                
                <div class="col-6 vertical-center">
                    
                    <a href="" class="button button__prompt button__dark-hover">
                        <span>Book Now</span>
                    </a>
                    
                </div>
                
                <div class="col-6 vertical-center">
                    
                    <p><?php the_field('teaser');?></p>
                    
                    <div class="button button__ghost button__fullwidth button__prompt button__prompt__down reveal-context">
                        <span>Learn More</span>
                        
                    </div>
                                
                </div>        
                
            </div><!--r-->
            
        </div><!--c-->
        
    </div>    
    
</div>

        <div class="context-panel">
            
            <div class="container">
                
                <div class="row">    

                    <div class="col-12 vertical-center">

<div class="owl-carousel owl-theme image-carousel">
                 
                        	<?php $images = get_field('image_carousel');
                            	
                        	foreach ($images as $image):?> 		
                   	
                       <div class="item">		
                        			<img class="slide" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                       </div>
                        		 
                        	<?php endforeach;?>
                        	
                        </div>

                    </div>    
                    
                    <div class="col-6">

                        <div class="lodge-now">
                        
                            <p class="heading-secondary heading-secondary__xs">
                                
                                <span id="timeHolder"></span> at Lentorre Lodge
                            
                            </p>                           
                            
                            <p class="heading-primary heading-primary__md"><?php the_field('current_activity');?></p>                            
                        
                        </div>
                        
                    </div>               

                    <div class="col-6 vertical-center">
                        
                        <?php the_field('text_content');?>
                        
                        <a href="/activities" class="button button__prompt button__dark-hover"><span>Learn More About Activities</span></a>
                        
                    </div>               
                    
            
                </div><!--r-->     
                          
            </div><!--c-->
            
            

        </div> 
 
<?php get_template_part( 'page-templates/home', 'lower' );?> 

<?php get_footer();?>
