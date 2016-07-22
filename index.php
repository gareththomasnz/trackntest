        <?php get_header(); ?>
        <?php get_sidebar(); ?>
                <section class="col-md-9  content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(__('(more...)')); ?></p>
                        <hr> <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
                <div class="content-footer hidden-sm hidden-xs hidden-md ">
                    
                    <img class="img-responsive row-img" src="<?php bloginfo('template_directory'); ?>/images/google.jpg" alt="google">
                    <img class="img-responsive row-img" src="<?php bloginfo('template_directory'); ?>/images/amazon.jpg" alt="amazon">
                    <img class="img-responsive row-img" src="<?php bloginfo('template_directory'); ?>/images/yahoo.jpg" alt="yahoo">
                    <img class="img-responsive row-img" src="<?php bloginfo('template_directory'); ?>/images/ebay.jpg" alt="ebay">
                    
                </div>
                
                </section>
                
            </section>
            
            <?php get_footer(); ?>