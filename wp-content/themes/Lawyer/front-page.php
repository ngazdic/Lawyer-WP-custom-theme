<?php

get_header();

?>

<main> 
    <!-- Lead section template included -->
    <?php get_template_part('/template-parts/lead-section'); ?>
    <!-- Homepage-services template included -->
    <?php get_template_part('/template-parts/homepage-services'); ?>
    <!-- Homepage-team template included -->
      <?php get_template_part('/template-parts/homepage-team'); ?>
    
   

</main>

<?php

get_template_part('/template-parts/info-section'); 
get_footer();

?>