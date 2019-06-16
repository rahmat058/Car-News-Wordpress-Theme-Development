
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
   
	  <!-- header start area -->
	 		<?php get_header(); ?>
		<!-- Header area end -->

    <!--Main Slider-->
    	<?php get_template_part('slider')?>
    <!-- Slider End -->


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">

										<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href="">
                                            <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                                        </a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                <li><i class="fa fa-calendar"></i> <?php the_time("m/d/Y"); ?></li>
                                                <li><i class="fa fa-comment"></i> <?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                        <div class="text-des">
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php the_time('M d, Y'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
												<?php endwhile; else: ?>
													<p><?php esc_html_e('Sorry no posts matched your criteria.');?></p>
												<?php endif; ?>

                        <div class="col-md-12">
                            <?php the_posts_pagination(); ?>
														<!-- <div class="pagination-area tac">
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </div>
                
								<!-- sidebar start area -->
									<?php get_template_part("sidebar"); ?>
								<!-- sidebar end area -->
            </div>
        </div>
    </div>
    <!-- /news table  -->
    
		<!-- footer start area -->
			<?php get_footer(); ?>
		<!-- footer end area -->
    