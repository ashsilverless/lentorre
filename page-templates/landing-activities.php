<?php
/**
 * ============== Template Name: Activities Landing
 *
 * @package Lentorre Lodge
 */
get_header();?>

    <?php
        $headerImg = get_field('header_image');
    ?>

<div class="container">

    <div class="header-image" style="background-image: url(<?php echo $headerImg['url']; ?>);">

        <h1 class="header-image__heading heading-primary heading-primary__xl"><?php the_title();?></h1>

    </div><!--header-image-->

    <div class="content-block">

        <div class="row">

        <?php if ( get_field( 'call_out_text' ) ): ?>

        <div class="col-sm-5 offset-sm-1">

            <div class="callout">

                <p><span>"</span><?php the_field('call_out_text');?><span>"</span></p>

            </div>

        </div>

        <div class="col-sm-5 body-copy">

        <?php the_field('text_content');?>

        </div>

        <?php else: ?>

        <div class="col-10 offset-1 multi-col">

        <?php the_field('text_content');?>

        </div>

        <?php endif; // end of if field_name logic ?>

        <div class="text-center">

        <a href="/contact" class="button button__prompt button__dark-hover mt1 mb1">
            <span>Get In Touch</span>
        </a>

        </div>

    </div><!--r-->

    </div>

    <section class="leaders">

        <div class="row no-gutters">

          <?php if( have_rows('section_leader') ):
          while( have_rows('section_leader') ): the_row();
          $leaderImg = get_sub_field('image', 569);?>

          <div class="col-sm-6">

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

    </section><!--leaders-->

    <?php get_template_part( 'template-parts/signpost');?>

</div><!--c-->

<?php get_footer();?>
