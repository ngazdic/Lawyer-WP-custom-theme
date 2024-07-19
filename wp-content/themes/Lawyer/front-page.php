<?php

get_header();

?>

<main> 
   <!-- Lead section template included -->
    <?php get_template_part('/template-parts/lead-section'); ?>
    <!-- Homepage template included -->
<?php get_template_part('/template-parts/homepage-services'); ?>
    
    <section class="team-section bg-light">
        <div class="container">
            <div class="section-header d-lg-flex justify-content-lg-between align-items-lg-center mb-5">
                <h2><?php the_field('homepage_team_title'); ?></h2>
                <a href="<?php the_field('hompage_team_link'); ?>" class="team-more"><?php the_field('homepage_team_link_text'); ?></a>
            </div><!-- .section-header -->
            
            <ul class="team-members-slider owl-carousel owl-theme list-unstyled">
                <!-- Team Member 1 -->
                <li class="team-member">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                            <article class="team-member-content">
                                <h5 class="team-member-name">
                                    <a href="team-single.html">Lina Collier</a>
                                </h5>
                                <p class="team-member-info">
                                    It has survived not only five centuries, but
                                    also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised
                                    in the 1960s with the release...
                                </p>
                                <a href="https://linkedin.com" class="fab fa-linkedin-in"></a>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="team-single.html" class="d-block team-member-img">
                                <img src="img/team/team_1.png" alt=""/>
                            </a>
                        </div>
                    </div>
                </li><!-- .team-member end -->
                
                <!-- Team Member 2 -->
                <li class="team-member">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                            <article class="team-member-content">
                                <h5 class="team-member-name">
                                    <a href="team-single.html">Virginia Barrett</a>
                                </h5>
                                <p class="team-member-info">
                                    Staying calm, composed and maintaining strong self esteem
                                    in today’s tough environment can be difficult
                                    but is not impossible if you follow a
                                    few simple guidelines. 
                                </p>
                                <a href="https://linkedin.com" class="fab fa-linkedin-in"></a>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="team-single.html" class="d-block team-member-img">
                                <img src="img/team/team_2.png" alt=""/>
                            </a>
                        </div>
                    </div>
                </li><!-- .team-member end -->

                <!-- Repeat for additional team members -->
            </ul>
        </div><!-- .container end -->
    </section><!-- .team-section end -->

</main>

<?php

get_template_part('/template-parts/info-section'); 

get_footer();
