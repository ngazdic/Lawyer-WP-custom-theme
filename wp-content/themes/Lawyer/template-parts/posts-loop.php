<?php
if (have_posts()) {
    ?>
    <section class="news-section">
        <div class="container">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <article class="news-item mb-5 animation" data-animation="slide-top">
                    <div class="row justify-content-sm-between">
                        <div class="col-12 mb-4 col-md-7 mb-md-0 col-lg-6">
                            <div class="news-item-content">
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?> 
                                <a href="<?php the_permalink(); ?>" class="read-more text-uppercase text-primary">read more</a>
                            </div>
                        </div><!--.col left end-->

                        <div class="col-12 col-md-5">
                            <a class="d-block news-item-img" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('news-list'); ?>
                            </a>
                        </div>
                    </div>
                </article><!--.news-item end-->
                <?php
            }
            ?>

            <section class="news-pagination mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-left">
                            <div><?php next_posts_link('Older posts'); ?></div>
                        </div>
                        <div class="col-6 text-right">
                            <div><?php previous_posts_link('Newer posts'); ?></div>
                        </div>
                    </div>                        
                </div> <!--.container end-->
            </section><!--.news-pagination end-->

        </div><!--.container end-->
    </section><!--.news-section end-->
    
    
    
    
    <!--sekcija pagination ali sa brojevima ne sa next i previous-->
       <section class="news-pagination-full mb-5">
                <div class="container">
                    <?php the_posts_pagination(array
                            ('screen_reader_text'=>' ',
                        'mid_size'=> 2,
                        'prev_text'=>'&lang;',
                        'next_text'=>'&rang;')); ?>                  
                </div> <!--.container end-->
            </section><!--.news-pagination end-->

        </div><!--.container end-->
    </section><!--.news-section end-->

<?php
} else {
    ?>
    <section class="news-section">
        <div class="container">
            <div class="jumbotron">
                <h3>The news doesn't exist</h3>
            </div>
        </div><!--.container end-->
    </section><!--.news-section end-->

<?php
}
?>
