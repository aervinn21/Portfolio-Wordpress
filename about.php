<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<section class="aboutBanner bg--green" >
        <div class="container">
            <div class="aboutBanner__wrapper d--flex justify--between">
                <div class="name">
                    <h1 class="arvin" data-text="Arvin"><?php echo get_field('first_name'); ?></h1>
                    <h1 class="castillo" data-text="Castillo"><?php echo get_field('last_name'); ?></h1>
                </div>
                <div class="aboutPic">
                <?php 
                
                $img = get_field('about_banner_image');
                if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
                </div>
                <div class="aboutBanner__wrapper__content">
                    <?php if(have_rows('aboutbanner_repeater')) : while(the_repeater_field('aboutbanner_repeater')): ?>
                    <h6 class="text--blue mb--1"><?php echo get_sub_field('aboutbanner_title'); ?></h6>
                    <h3 class="mb--1"><?php echo get_sub_field('aboutbanner_desc'); ?></h3>
                    <p class="aboutQuote mb--2"><?php echo get_sub_field('aboutbanner_info'); ?></p>

                    <ul class="contactBanner">
                        <li class="text--blue mb--1"><i class="fa-solid fa-phone text--blue"></i> <?php echo get_sub_field('aboutbanner_contact'); ?></li>
                        <li class="text--blue mb--1"><i class="fa-solid fa-envelope text--blue"></i><?php echo get_sub_field('aboutbanner_email'); ?></li>
                    </ul>
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
    </section>
    <section class="aboutInfo py--6" id="aboutMe">
        <div class="container">
            <div class="aboutInfo__wrapper d--flex justify--between align--center">
                <div class="aboutLeft ">
                    <h3 class="mb--1"><?php echo get_field('aboutinfo_title'); ?></h3>
                    <p class="mb--2"><?php echo get_field('aboutinfo_desc'); ?></p>

                    <table class="center mb--2">
                    <?php if(have_rows('table_repeater')) : while(the_repeater_field('table_repeater')): ?>
                        <tr>
                            <td><?php echo get_sub_field('table_name'); ?></td>
                            <td><?php echo get_sub_field('table_colon'); ?></td>
                            <td><?php echo get_sub_field('table_info'); ?></td>
                        </tr>
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                    </table>
                    <div class="buttonCV">
                        <a  href="CV - Castillo, Arvin.pdf"> Download CV  <i class="fa-solid fa-download"></i>   </a>
                    </div>
                </div>
                <div class="aboutRight">
                <?php 
                
                $img = get_field('aboutinfo_img');
                if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
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
                            'posts_per_page' => 4, 
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
						<a href="about.html">VIEW ALL PROJECTS</a>
					</div>
				</div>
				<div class="projectsRight">
                    <div class="projects__wrapper__item mb--2">
                    <?php
                        $args = array(
                            'post_type' => 'blogPost',
                            'posts_per_page' => 5, 
                            'offset'    => 4,
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
						<a href="#">VIEW ALL PROJECTS</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="figma bg--green" id="figma">
        <div class="gradientBottomFromTop"></div>  
        <div class="container">
            <div class="figmaInfo">
                <h4><?php echo get_field('figma_text'); ?></h4>
                <h1><?php echo get_field('figma_title'); ?></h1>
                <p><?php echo get_field('figma_desc'); ?></p>
            </div>
            <div class="figma__wrapper d--flex">
                <?php if(have_rows('figma_repeater')) : while(the_repeater_field('figma_repeater')): ?>
                <div class="figmaLeft">
                  <a href="https://www.figma.com/proto/vXcLfoHFq5hS7htntubYPo/Arvin-Web-Design?node-id=35%3A188">
                    <?php 
                        $img = get_sub_field('figma_img_one');
                        if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                </a>
                </div>
                <div class="figmaRight">
                    <div class="f2">
                        <a href="https://www.figma.com/proto/3R1xJZTDlXA5cPY28jrw7j/Arvin-New-Design?node-id=0%3A1">
                        <?php 
                            $img = get_sub_field('figma_img_two');
                            if(!empty($img)) :
                        ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                        <?php endif; ?>
                        </a>
                    </div>
                   <div class="f1">
                    <a href="https://www.figma.com/proto/N1BH44vAlrELyz3zuTayJs/Re-design-Castillo?node-id=0%3A1">
                    <?php 
                        $img = get_sub_field('figma_img_three');
                        if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                    </a>
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
    </section>
    <section class="accomplishments bg--gray" id="accomplishments">
        <div class="container">
            <div class="accomplishments__wrapper ">
                <?php if(have_rows('accomp_repeater')) : while(the_repeater_field('accomp_repeater')): ?>
                <div class="projectsCompleted">
                    <div class="logo">
                    <?php 
                        $img = get_sub_field('accom_img');
                        if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                    </div>
                    <div class="hoverDisplay"><h2><?php echo get_sub_field('accomp_desc'); ?></h2></div>
                    <div class="accomplishmentsName"><h2><?php echo get_sub_field('accomp_title'); ?></h2></div>
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
<?php get_footer(); ?>  