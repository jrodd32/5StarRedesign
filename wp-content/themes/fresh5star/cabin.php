<?php
/**
 * Template Name: Cabin
*/
get_header(); ?>
<?php get_sidebar('post'); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h5><?php the_field('cabin_name'); ?></h5>
        <?php
            $id = get_field('large_cabin_picture');
            $image = wp_get_attachment_image_src( $id, 'full' );
            $alt_text = get_post_meta($id , '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />

        <p><?php the_field('cabin_paragraph_description'); ?></p>

        <a href="#" class="check" data-room="<?php the_field('check_availability') ?>">Check Availability Calendar</a>
        <p><strong>ALERT: If you are using Internet Explorer browser it must be version 9 or above for calendar to load properly.</strong></p>

        <p class="cabin-heading"><?php the_field('cabin_name'); ?> has the following amenities:</p>

        <?php
            $rows = get_field('cabin_amenities');
                if($rows) {
                    echo '<ul class="amenities">';

                        foreach($rows as $row) {
                            echo '<li>' . $row['amenity'] . '</li>';
                        }

                    echo '</ul>';
                }
        ?>

        <p class="cabin-heading">Gallery</p>

        <?php
            $rows = get_field('cabin_gallery');
                if($rows) { ?>
                    <ul class="gallery">
                    <?php
                    foreach($rows as $key => $row) {
                        $thumb_id = $row['gallery_thumbnail'];
                        $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                        $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);

                        $large_id = $row['gallery_link'];
                        $large = wp_get_attachment_url($large_id);
                        $large_alt_text = get_post_meta($large_id , '_wp_attachment_image_alt', true);
                        ?>
                        <li>
                            <a class="fancybox" rel="galleryCabin" href="<?php echo $large; ?>" alt="<?php echo $large_alt_text; ?>">
                                <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>" />
                            </a>
                        </li>
                    <?php
                    }
                }
        ?>
        <p><a class="check" href="http://naturalbridgecabinrental.com/?page_id=2330">Read this before you book your room</a></p>
    <?php endwhile; ?>
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>