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

                    <?php get_template_part( 'template-parts/kenya', 'map' );?>

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

      <div class="col-sm-6">

        <div class="leaders__item" style="background-image: url(<?php echo $leaderImg['url']; ?>);">

          <h2 class="heading-primary heading-primary__md heading-primary__caps heading-primary__light"><?php the_sub_field('heading', 569);?></h2>

          <?php the_sub_field('content', 569);?>

          <div class="button-wrapper"><!--button was spanning whole grid.  this div stops it spanning-->

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
