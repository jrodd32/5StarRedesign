<?php
// Template Name: Cabin Parent
get_header();
get_sidebar('page');
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main cabin-parent" role="main">
            <ul class="quick-jump">
                <legend>Quick Jump Links</legend>
                <li><a href="#five-star">5 Star Cabins</a></li>
                <li><a href="#four-star">4 Star Cabins</a></li>
                <li><a href="#three-star">3 Star Cabins</a></li>
            </ul>
            <header class="entry-header" id="no-margin">
                <a name="five-star"></a>
                <h2 class="entry-title">5 Star Cabins</h2>
            </header><!-- .entry-header -->
            <div class="cabin-row">
<?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                $rows = get_field('five_star_cabins_area');
                shuffle($rows);
                if($rows) {
                    foreach($rows as $row) {
                        $thumb_id = $row['cabin_picture'];
                        $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                        $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
                        $link = get_bloginfo('site_url') . '/' . $row['cabin_link'];
                        $description = $row['cabin_description'];
                        $name = $row['cabin_name'];

                        $thumb_id_2 = $row['cabin_picture_2'];
                        $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                        $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                        $link_2 = get_bloginfo('site_url') . '/' . $row['cabin_link_2'];
                        $description_2 = $row['cabin_description_2'];
                        $name_2 = $row['cabin_name_2'];
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link; ?>"><?php echo $name; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link; ?>">
<?php
                        echo $description;
?>
                        </a>
                    </p>
                </article>
<?php
if (!empty($name_2)) :
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link_2; ?>"><?php echo $name_2; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link_2; ?>">
                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link_2; ?>">
<?php
                        echo $description_2;
?>
                        </a>
                    </p>
                </article>
<?php
endif;
                    }
                }

                endwhile;
            }
?>
            </div>
            <header class="entry-header">
                <a name="four-star"></a>
                <h2 class="entry-title">4 Star Cabins</h2>
            </header><!-- .entry-header -->
            <div class="cabin-row">
<?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                $rows = get_field('four_star_cabins_area');
                if($rows) {
                    foreach($rows as $row) {
                        $thumb_id = $row['cabin_picture'];
                        $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                        $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
                        $link = get_bloginfo('site_url') . '/' . $row['cabin_link'];
                        $description = $row['cabin_description'];
                        $name = $row['cabin_name'];

                        $thumb_id_2 = $row['cabin_picture_2'];
                        $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                        $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                        $link_2 = get_bloginfo('site_url') . '/' . $row['cabin_link_2'];
                        $description_2 = $row['cabin_description_2'];
                        $name_2 = $row['cabin_name_2'];
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link; ?>"><?php echo $name; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link; ?>">
<?php
                        echo $description;
?>
                        </a>
                    </p>
                </article>
<?php
if (!empty($name_2)) :
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link_2; ?>"><?php echo $name_2; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link_2; ?>">
                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link_2; ?>">
<?php
                        echo $description_2;
?>
                        </a>
                    </p>
                </article>
<?php
endif;
                    }
                }

                endwhile;
            }
?>
            </div>
            <header class="entry-header">
                <a name="three-star"></a>
                <h2 class="entry-title">3 Star Cabins</h2>
            </header><!-- .entry-header -->
            <div class="cabin-row">
<?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                $rows = get_field('three_star_cabins_area');
                if($rows) {
                    foreach($rows as $row) {
                        $thumb_id = $row['cabin_picture'];
                        $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                        $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
                        $link = get_bloginfo('site_url') . '/' . $row['cabin_link'];
                        $description = $row['cabin_description'];
                        $name = $row['cabin_name'];

                        $thumb_id_2 = $row['cabin_picture_2'];
                        $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                        $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                        $link_2 = get_bloginfo('site_url') . '/' . $row['cabin_link_2'];
                        $description_2 = $row['cabin_description_2'];
                        $name_2 = $row['cabin_name_2'];
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link; ?>"><?php echo $name; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link; ?>">
<?php
                        echo $description;
?>
                        </a>
                    </p>
                </article>
<?php
if (!empty($name_2)) :
?>
                <article class="cabin">
                    <h2><a href="<?php echo $link_2; ?>"><?php echo $name_2; ?></a></h2>
                    <figure>
                        <a href="<?php echo $link_2; ?>">
                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>">
                        </a>
                    </figure>
                    <p>
                        <a href="<?php echo $link_2; ?>">
<?php
                        echo $description_2;
?>
                        </a>
                    </p>
                </article>
<?php
endif;
                    }
                }

                endwhile;
            }
?>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
