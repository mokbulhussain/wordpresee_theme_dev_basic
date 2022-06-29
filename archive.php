    <!-- Header part -->
    <?php get_header();?>
       
        <!-- Blog Start Here -->
        <div class="blogs">
            <div class="blog-left">
                <h4>Category : <?php single_cat_title();?></h4>
                <!-- Blog part -->
                <?php get_template_part( 'template-parts/content', 'blog' );?>
            </div>
            <!-- Siderbar part -->
            <?php get_sidebar();?>
        </div>
        <!-- Blog End Here -->
       
        <!-- Footer Part -->
        <?php get_footer();?>