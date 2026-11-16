<?php if(have_posts(  )) :
                             while(have_posts(  )) : the_post(  );?>
                       <div class="blog_area">
                        <div class="div_details">
                            <h2>
                                <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
                            </h2>
                            <p> </i>  <span> At </span>   <i class="fa-solid fa-clock"></i> <?php  echo the_time(); ?>      </p>
                            <?php the_excerpt(  ); ?>
                        </div>
                        <div class="post_thumb">
                            
                            <a href="<?php the_permalink();?>"> <?php echo the_post_thumbnail('medium'); ?></a>
                        </div>
                       </div>
                      <?php endwhile;
                           else: 
                            _e('No Post Found');
                           endif;
                           ?>      
                    
                        <div id="pagination">
                           <?php if('wakil_pagination') {wakil_pagination();} else{ ?>
                            <?php prev_post_link(); ?>
                            <?php next_post_link(); ?>
                            <?php } ?>
                        </div>