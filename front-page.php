<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<section class="banner py--5">
        <div class="container">
            <div class="banner__wrapper mt--4 d--flex">
            <?php if(have_rows('banner_repeater')) : while(the_repeater_field('banner_repeater')): ?>
                <div>
                    <div class="slide-up ">
                        <h1 class="skill1"><?php echo get_sub_field('skill_one'); ?></h1>
                        <h1 class="skill2"><?php echo get_sub_field('skill_two'); ?></h1>
                        <h1 class="skill3"><?php echo get_sub_field('skill_three'); ?>R</h1>
                    </div>
                    <div class="slide-right">
                        <p class="mb--2"><?php echo get_sub_field('banner_quote'); ?></p>
                        <div class="buttonCV">
                            <a   href="CV - Castillo, Arvin.pdf"> Download CV  <i class="fa-solid fa-download"></i>   </a>
                        </div>    
                       
                    </div>
                </div>
   
                <div class="image">
                <?php 
                $img = get_sub_field('banner_image');
                if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
                    <!-- <img src="./img/Rectangle 3.png" alt=""> -->
                </div>
            </div>
                
            <?php
                endwhile;
                    else:
                        echo "no available post yet";
                    endif;
                    wp_reset_postdata();
                ?>
        </div>
    </section>
    <section class="mainSkills">
        <div class="container">
            <div class="mainSkills__wrapper">
                <div class="mainSkills__wrapper__details text--center">
                    <h2 class="mb--2"><?php echo get_field('text_one'); ?></h2>
                    <p><?php echo get_field('info_skills'); ?></p>
                    
                </div>
                <div class="tours py--6 bg--gray px--2 my--4">
                    <div class="tours__wrapper">
                    <?php if(have_rows('mainskills_repeater')) : while(the_repeater_field('mainskills_repeater')): ?>
                        <div class="tours__card">
                        <?php 
                            $img = get_sub_field('mainskill_image');
                            if(!empty($img)) :
                        ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                            <?php endif; ?>
                            <div class="tours__details text--center">
                                <h4><?php echo get_sub_field('mainskill_title'); ?></h4>
                            </div>
                            <div class="overlaySkills">
                                <h4 class="mb--1"> <h4><?php echo get_sub_field('mainskill_title'); ?></h4>
                                <p><?php echo get_sub_field('mainskill_info'); ?></p>
                            </div>
                        </div>
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
       <!-- Slider main container -->
<div class="container" >
<section class="swiper" id="skills" >
    <h1><?php echo get_field('skill_title'); ?></h1>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php if(have_rows('swiperskill_repeater')) : while(the_repeater_field('swiperskill_repeater')): ?>
        <div class="swiper-slide">
            <div class="slider-card">
                <div class="skills">
                    <div class="img-area" >
                    <?php 
                            $img = get_sub_field('skill_image');
                            if(!empty($img)) :
                        ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                            <?php endif; ?>
                    </div>
                    <div class="skillName">
                        <h4><?php echo get_sub_field('skill_title'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
                else:
                    echo "no available post yet";
                endif;
                wp_reset_postdata();
            ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    
    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
    
    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div> -->
</section>
</div>
	<section class="projects py--6 bg--primary" id="projects">
		<div class="container">
			<div class="projects__wrapper">
				<div class="projectsLeft">
					<div class="projectsInfo">
						<h6><?php echo get_field('projects_title'); ?></h6>
						<h3><?php echo get_field('projects_info'); ?></h3>
						<p class="mb--3"><?php echo get_field('projects_excerpt'); ?></p>
					</div>
                    <div class="projects__wrapper__item mb--2">
                        <?php

                        $args = array(
                            'post_type' => 'blogPost',
                            'posts_per_page' => 1, 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'Projects'
                                ),
                            ),
                        );
                        $newQuery = new WP_Query($args);

                        ?>
                        <?php if($newQuery -> have_posts()) : while($newQuery ->have_posts()) : $newQuery -> the_post(); ?>  
						<div class="projects__wrapper__item__details">
                            <div class="projectImage">
                            <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <div class="info">
                                <h6 class="mb--1"><?php echo the_title() ?></h6>
                                <p> <?php echo the_excerpt() ?></p>
                                <a href="#"><img class="arrow" src="<?php echo get_template_directory_uri(); ?>./img/arrow.png" alt=""></a> 
                            </div>
						</div>
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?>
					</div>
					<div class="button mt--4">
						<a href="<?php echo site_url('/about') ?>">VIEW ALL PROJECTS</a>
					</div>
				</div>
				<div class="projectsRight">
                    <div class="projects__wrapper__item mb--2">
                    <?php
                        $args = array(
                            'post_type' => 'blogPost',
                            'posts_per_page' => 2, 
                            'offset'    => 1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'Projects'
                                ),
                            ),
                        );
                        $newQuery = new WP_Query($args);

                        ?>
                        <?php if($newQuery -> have_posts()) : while($newQuery ->have_posts()) : $newQuery -> the_post(); ?> 
						<div class="projects__wrapper__item__details mb--2">
                            <div class="projectImage">
                            <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <div class="info">
                                <h6 class="mb--1"><?php echo the_title() ?></h6>
                                <p><?php echo the_excerpt() ?></p>
                                <a href="#"><img class="arrow" src="<?php echo get_template_directory_uri(); ?>./img/arrow.png" alt=""></a> 
                            </div>
						</div>
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?>
					</div>

					<div class="buttonLg mt--4">
						<a href="<?php echo site_url('/about') ?>">VIEW ALL PROJECTS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="slider text--center bg--green" id="slider">
		<div class="container">
			<h2><?php echo get_field('review_title'); ?></h2>
			<p><?php echo get_field('review_excerpt'); ?></p>
		<div class="my-slider">
			<!-- <div> -->
                <?php if(have_rows('review_repeater')) : while(the_repeater_field('review_repeater')): ?>
				<div class="reviews">
					<img class="quote1" src="<?php echo get_template_directory_uri(); ?> ./img/quote1.png" alt="">
					<div class="box">
                        <div class="reviewerPic">
                        <?php 
                                $img = get_sub_field('review_image');
                                if(!empty($img)) :
                            ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        </div>
						<p class="p"><?php echo get_sub_field('review_content'); ?></p>
					</div>
				
					<img class="quote2"  src="<?php echo get_template_directory_uri(); ?> ./img/quote2.png" alt="">
					<h2><?php echo get_sub_field('reviewers_name'); ?></h2>
					<p><small><?php echo get_sub_field('reviewers_info'); ?></small></p>  
           
				</div>
                <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?> 
			<!-- </div> -->
		</div>
	</section>
    <section class="contact py--6">
        <div class="container">
            <div class="contact__wrapper ">
            <?php if(have_rows('contact_repeater')) : while(the_repeater_field('contact_repeater')): ?>
                <div class="left"><h2><?php echo get_sub_field('contact_title'); ?></h2></div>
                <div class="mid"><p><?php echo get_sub_field('contact_excerpt'); ?></p></div>
                <div class="right d--flex align--center ">
                    <?php 
                        $img = get_sub_field('button_img');
                        if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                    <a href="<?php echo site_url('/contact') ?>"><?php echo get_sub_field('button_name'); ?></a>
                </div>
                <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?> 
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    effect: 'coverflow',
    grabCursor: true,
    autoplay: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
      slideShadows: false,
    },
  
    
    
  });
</script>
<?php get_footer(); ?>

