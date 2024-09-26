<?php
/**
 * Post Content
 * @package Akonic
 */
?>


<!-- ===== SINGLE POST CARD ===== -->
<div class="container mt-5">
<div class="card">
    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
    <div class="card-body">
        <a href="<?php the_permalink(); ?>"> <h5 class="card-title"> <?php the_title(); ?> </h5> </a>
        <p class="card-text"> <?php the_content(); ?> </p>
        <div class="d-flex justify-content-between mt-3">
            <span class="text-muted"> <?php the_time('F jS, Y') ?> </span>
            <span class="text-muted"> <?php the_author_posts_link() ?> </span>
        </div>
    </div>
</div>
</div>