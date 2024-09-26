<?php
/**
 * SINGLE PAGE
 * @package Ikonic
 */
?>

<?php get_header(); ?>

<!-- ==== DISPLAY SINGLE POST CONTENT ====== -->
<?php 

while(have_posts()):
    the_post();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php get_template_part('/template-parts/post-content/content' ,  'single'); ?>
            </div>
        </div>
    </div>
    <?php
endwhile;

?>


<?php get_footer(); ?>

