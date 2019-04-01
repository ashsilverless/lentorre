<?php
/**
 * @package Lentorre Lodge
 */
get_header();?>

    <?php
        $headerImg = get_field('header_image', '1067');
    ?>

<div class="container">

    <div class="header-image" style="background-image: url(<?php echo $headerImg['url']; ?>);">

        <h1 class="header-image__heading heading-primary heading-primary__xl">
        Taken a wrong turn?
        </h1>

    </div><!--header-image-->

    <div class="content-block">

        <div class="row" >
        <p style="display:block; width:100%; text-align:center;">Not to worry, we'll get you back on track in a jiffy</p>
        </div>
<div class="row"  style="display:block; text-align:center;">
        <a href="<?php ?>" class="button button__prompt button__dark-hover mt1 mb1">
        <span>Go Back Home</span>
        </a>            

        </div><!--r-->

    </div>


</div><!--c-->

<?php get_footer();?>
