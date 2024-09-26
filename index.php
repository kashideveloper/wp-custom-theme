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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-8 col-lg-8 col-12 blog-body-container">
                <div class="blog-post-box mb-5">
                    <!-- ===== ADD POST FROM BLOG POST ====== -->
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>

                            <!-- === DISPLAY POST HERE == -->

                    <?php get_template_part( 'template-parts/post-content/content'); ?>

                        <?php
                        endwhile; ?>
                    <?php else :
                    ?>

                        <p>There Nothing to Show:(</p>

                    <?php endif; ?>


                </div>
            </div>
            <div class="col-md-4 col-xl-4 col-lg-4 col-12 blog-container h-100 pb-5 pr-4 mt-5 pl-4 bg-white">
                <aside> <?php get_sidebar(); ?> </aside>
            </div>
        </div>
    </div>
</section>



<!-- FOOTER -->
<?php
get_footer('footer.php');
