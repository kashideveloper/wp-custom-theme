<article class="post-<?php the_ID(); ?>">
    <header>
        <h2> <?php the_title(); ?> </h2>
        <p> <?php echo get_the_date('F j, Y');?> </p>
        <span> <?php get_the_date() ?> </span>
        <span> <?php the_category(); ?> </span>
        <?php the_post_thumbnail(); ?>
    </header>

    <content>
        <p> <?php the_content( ); ?> </p>
    </content>
</article>