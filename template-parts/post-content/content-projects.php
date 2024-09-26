
<div class="project-single mb-5 mt-5">
    <?php
    while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="project-content">
            <?php the_content(); ?>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="project-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <div class="project-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <!-- Display Custom Fields -->
        <?php
        $start_date = get_post_meta( get_the_ID(), 'project_start_date', true );
        $end_date = get_post_meta( get_the_ID(), 'project_end_date', true );
        $project_url = get_post_meta( get_the_ID(), 'project_url', true );

        if ( !empty( $start_date ) ) : ?>
            <div class="custom-field">
                <strong>Project Start Date:</strong> <?php echo esc_html( $start_date ); ?>
            </div>
        <?php endif; ?>

        <?php if ( !empty( $end_date ) ) : ?>
            <div class="custom-field">
                <strong>Project End Date:</strong> <?php echo esc_html( $end_date ); ?>
            </div>
        <?php endif; ?>

        <?php if ( !empty( $project_url ) ) : ?>
            <div class="custom-field">
                <strong>Project URL:</strong> <a href="<?php echo esc_url( $project_url ); ?>" target="_blank"><?php echo esc_html( $project_url ); ?></a>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>
</div>
