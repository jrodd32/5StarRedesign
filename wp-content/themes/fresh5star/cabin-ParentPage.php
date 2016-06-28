<?php
/**
 * Template Name: Cabin Parent Page
*/
get_header(); ?>
<?php get_sidebar('post'); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h1><?php the_field('main_heading'); ?></h1>
            <h2><?php the_field('sub_heading'); ?></h2>
            <dl class="tabs contained three-up">
                <dd class="active"><a href="#5star">5-Star Cabins</a></dd>
                <dd><a href="#4star">4-Star Cabins</a></dd>
                <dd><a href="#3star">3-Star Cabins</a></dd>
            </dl>
            <ul class="tabs-content contained">
                <li class="active" id="5starTab">
                    <?php
                        $rows = get_field('five_star_cabins_area');
                        if($rows) {
                            foreach($rows as $row) {
                                $thumb_id = $row['cabin_picture'];
                                $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                                $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);

                                $thumb_id_2 = $row['cabin_picture_2'];
                                $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                                $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                            ?>
                            <div class="row">
                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>"/>
                                            <?php echo $row['cabin_description']; ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link_2']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name_2']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>"/>
                                            <?php echo $row['cabin_description_2']; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                     ?>
                </li>
                <li id="4starTab">
                    <?php
                        $rows = get_field('four_star_cabins_area');
                        if($rows) {
                            foreach($rows as $row) {
                                $thumb_id = $row['cabin_picture'];
                                $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                                $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);

                                $thumb_id_2 = $row['cabin_picture_2'];
                                $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                                $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                            ?>
                            <div class="row">
                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>"/>
                                            <?php echo $row['cabin_description']; ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link_2']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name_2']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>"/>
                                            <?php echo $row['cabin_description_2']; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                     ?>
                </li>

                <li id="3starTab">
                    <?php
                        $rows = get_field('three_star_cabins_area');
                        if($rows) {
                            foreach($rows as $row) {
                                $thumb_id = $row['cabin_picture'];
                                $thumb = wp_get_attachment_image_src($thumb_id, 'full');
                                $thumb_alt_text = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);

                                $thumb_id_2 = $row['cabin_picture_2'];
                                $thumb_2 = wp_get_attachment_image_src($thumb_id_2, 'full');
                                $thumb_alt_text_2 = get_post_meta($thumb_id_2 , '_wp_attachment_image_alt', true);
                            ?>
                            <div class="row">
                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $thumb_alt_text; ?>"/>
                                            <?php echo $row['cabin_description']; ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="six columns cabin">
                                    <a href="http://naturalbridgecabinrental.com/<?php echo $row['cabin_link_2']; ?>/">
                                        <div class="title">
                                            <h5><?php echo $row['cabin_name_2']; ?></h5>
                                        </div>
                                        <div class="content">
                                            <img src="<?php echo $thumb_2[0]; ?>" alt="<?php echo $thumb_alt_text_2; ?>"/>
                                            <?php echo $row['cabin_description_2']; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                     ?>
                </li>
            </ul>
    <?php endwhile; ?>
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>