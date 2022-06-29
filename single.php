    <!-- Header part -->
    <?php get_header();?>
       
       <div class="single-blog-des">

        <div class="single-blog-left">
                    <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post( );
                ?>
                <div class="single-blog">
                        <h4><?php the_title();?></h4>
                        <?php the_post_thumbnail();?>
                        <div class="blog-meta">
                            <a href="">Admin</a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p><?php the_content();?></p>
                       
                    </div>    
                <?php 
                    }
                }
                ?>
        </div>
        <div class="single-right">
            <?php get_sidebar();?>
        </div>

       </div>
       
        <!-- Footer Part -->
        <?php get_footer();?>