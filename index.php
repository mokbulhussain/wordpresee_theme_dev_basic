    <!-- Header part -->
    <?php get_header();?>
       
        <!-- Blog Start Here -->
        <div class="blogs" id="about" <?php post_class(array("blogs","fix"));?>>
            <div class="search">
                <?php get_search_form();?>
            </div>
            <div class="blog-left">
                <h4>latest blog</h4>
                <!-- Blog part -->
                <?php get_template_part( 'template-parts/content', 'blog' );?>
            </div>
            <!-- Siderbar part -->
            <?php get_sidebar();?>
        </div>
        <!-- Blog End Here -->
       
        <!-- Footer Part -->
        <?php get_footer();?>