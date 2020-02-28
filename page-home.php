<?php


get_header();
?>

<div>it is Home page</div>



<div class="flexslider">
  <ul class="slides">

    <?php
    


    // check if the repeater field has rows of data
    if( have_rows('slider') ):
        while ( have_rows('slider') ) : the_row();
    ?> 
        <li>
            <p><?php echo get_sub_field('name'); ?>  </p>
            
            <img src="<?php echo get_sub_field('image' )['url']; ?>" />
           
        </li>

    <?php
        endwhile;
    else :
        // no rows found
    endif;
    ?>
    </ul>
</div>

<?php
$args = array ('post_type' => 'car');

  // The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>','<a href="'.get_the_permalink() .'">' . get_the_title() . '</a>', '</li>';
                       
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
    ?>
 


<?php
get_footer();