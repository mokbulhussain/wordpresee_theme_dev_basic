<div class="blogs">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post( );
    ?>
     <div class="single-blog">
            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            <?php the_post_thumbnail();?>
            <div class="blog-meta">
            <?php echo get_the_author_posts_link(); ?>
                <?php echo get_the_date('M d');?>
                <?php the_category();?>
            </div>
            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink();?>">read more</a>
        </div>    
    <?php 
        }
    }
    ?>
       
</div>