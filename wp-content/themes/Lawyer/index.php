<?php get_header(); //sa ovom funkcijom mi u stvari uzimamo header partial tj sadrzaj header.php  ?>



<!-- nama se na index.php izlistavaju sve vesti preko posts-loop template-a-->
<main>

    <?php
    get_template_part('/template-parts/lead-section');
   

  get_template_part('/template-parts/posts-loop');


 ?>



<?php
get_template_part('/template-parts/info-section');
?>

</main><!--main end-->





<?php get_footer(); //sa ovom funkcijom mi u stvari uzimamo footer partial tj sadrzaj footer.php   ?>

