<?php

get_header();

?>

<main>

    <?php
    // Get the lead image URL
    $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>

    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>

            <!-- Lead Page Section -->
            <section class="lead-page-section" style="background-image: url(<?php echo esc_url($leadImage); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-5">
                            <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                                <h1 class="lead-section-title mb-4"><?php the_title(); ?></h1>
                                <p class="lead-section-description">
                                    <?php the_field('service_description'); ?>   
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Content Section -->
            <section class="service-content">
                <div class="container">
                    <div class="row justify-content-sm-between">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-first">
                            <figure class="mb-0 animation" data-animation="slide-right">
                                <img src="<?php the_field('service_side_image'); ?>" alt=""/>
                            </figure>
                        </div>
                        <div class="col-12 col-md-6 mb-4 mb-md-0">
                            <article class="animation" data-animation="slide-left">
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        }
    } else {
        echo '<p>No content found.</p>';
    }
    ?>
 <?php get_template_part('template-parts/pagination');?>
    <!-- Info Section -->
    <?php get_template_part('/template-parts/info-section'); ?>

</main>

<?php

get_footer();

?>