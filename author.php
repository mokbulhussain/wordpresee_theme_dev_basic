    <!-- Header part -->
    <?php get_header();?>
       
        <!-- Blog Start Here -->
        <div class="blogs">
            <div class="blog-left">
                <h4>Author: <?php echo get_the_author( );?></h4>
                <!-- Blog part -->
                <?php get_template_part( 'template-parts/content', 'blog' );?>
            </div>
            <!-- Siderbar part -->
            <?php get_sidebar();?>
        </div>
        <!-- Blog End Here -->
       
        <!-- Footer Part -->
        <?php get_footer();?>