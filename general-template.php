<?php

/**
 * 
 * Template Name: General Template
 * 
 *
 */
?>

<?php
/**
 * INDEX FILE
 * 
 * @package AKONIC
 * 
 * * */
?>

<?php get_header(); ?>

<section class="mainContent">
    <div class="thumbnail-box">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?> width=" <?php echo get_custom_header()->width; ?>" alt="">
        <h5> <?php the_title(); ?> </h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5>Contact Form</h5>
            </div>

            <div class="col-6">
                <h5>Company Information</h5>
            </div>
        </div>
    </div>
</section>



<!-- FOOTER -->
<?php
get_footer('footer.php');
