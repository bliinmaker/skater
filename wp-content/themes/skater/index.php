<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skater
 */

get_header();
?>

    <div class="site-section" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <span>Latest Blog Posts</span>
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                                <div>
<!--                                    <a href="single.html" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>-->
                                    <h2><a href="single.html"><?php the_title() ?></a></h2>
                                    <p class="text-muted mb-3 text-uppercase small"><span class="mr-2"><?php the_date() ?></span> By <a href="single.html" class="by"><?php the_author() ?></a></p>
                                    <p><?php the_content_feed(); ?></p>
                                    <p><a href="<?php the_; ?>">Read More</a></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>

            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
