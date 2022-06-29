<?php get_header();?>
    <div class="page-box ">
        <div class="page-left">
            <h2><?php the_title();?></h2>
            <br/>
            <?php the_content();?>
        </div>
        <div class="page-right">
            <?php 
            if(is_active_sidebar( 'sidebar-2' )){
                echo dynamic_sidebar( 'sidebar-2' );
            }
            ?>
        </div>
    </div>
<?php get_footer();?>