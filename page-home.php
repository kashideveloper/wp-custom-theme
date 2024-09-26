<?php
/**
 * Page Home Template
 * 
 * @package AKONIC
 */

get_header(); ?>

<section class="mainContent mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-8 col-sm-12 col-12">
                <section class="home-blog-section">
                    <?php 
                    // Query for blog posts
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10, // Change this to show more or fewer posts
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post(); ?>
                            <div class="blog-post">
                                <header>
                                    <h4 class="mb-4 mt-2"><?php the_title(); ?></h4>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail">
                                            <?php the_post_thumbnail('medium'); // You can change the size ?>
                                        </div>
                                    <?php endif; ?>
                                </header>
                                <div class="post-content">
                                    <p><?php the_excerpt(); // Display the excerpt ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata(); // Reset the query
                    else :
                        echo '<p>No posts found.</p>'; // Message if no posts are found
                    endif;
                    ?>
                </section>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-12 col-12">
            <?php 
                    // Query for project posts
                    $args = array(
                        'post_type' => 'projects', // Change 'projects' to your custom post type if needed
                        'posts_per_page' => 10, // Adjust the number of posts as needed
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post(); ?>
                            <article class="project-post mt-5 mb-5 post-<?php the_ID(); ?>">
                                <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="project-thumbnail">
                                        <?php the_post_thumbnail('medium'); // Change size as needed ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Display Custom Fields -->
                                <?php
                                $start_date = get_post_meta(get_the_ID(), 'project_start_date', true);
                                $end_date = get_post_meta(get_the_ID(), 'project_end_date', true);
                                $project_url = get_post_meta(get_the_ID(), 'project_url', true);

                                if (!empty($start_date)) : ?>
                                    <div class="custom-field">
                                        <strong>Project Start Date:</strong> <?php echo esc_html($start_date); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($end_date)) : ?>
                                    <div class="custom-field">
                                        <strong>Project End Date:</strong> <?php echo esc_html($end_date); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project_url)) : ?>
                                    <div class="custom-field">
                                        <strong>Project URL:</strong> <a href="<?php echo esc_url($project_url); ?>" target="_blank"><?php echo esc_html($project_url); ?></a>
                                    </div>
                                <?php endif; ?>
                            </article>
                            <hr />
                            <?php
                        endwhile;
                        wp_reset_postdata(); // Reset the query
                    else :
                        echo '<p>No projects found.</p>'; // Message if no posts are found
                    endif;
                    ?>
            </div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>
