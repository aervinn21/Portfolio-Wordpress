<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<section class="contactPage py--6 bg--green">
        <div class="container">
            <div class="contactPage__wrapper d--flex justify--between">
                <div class="contactInfo">
                    <h2><?php echo get_field('contact_title'); ?></h2> 
                    <p><?php echo get_field('contact_desc'); ?></p>
            
                </div>
                <div class="form">
                    <form action="">
                    <?php if(have_rows('form_repeater')) : while(the_repeater_field('form_repeater')): ?>
                        <label for=""><?php echo get_sub_field('name'); ?></label> <br>
                        <input type="text" name="name" id="name"><br>
                        <label for=""><?php echo get_sub_field('email'); ?></label><br>
                        <input type="email" name="email" id="name" > <br>
                        <label for=""><?php echo get_sub_field('message'); ?></label> <br>
                        <textarea name="message" id="message" cols="" rows="10" ></textarea> <br> <br>
                        <input class="submit" type="submit" id="submit" value="LET'S GET STARTED">
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                    </form> 
                </div>
 
            </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>  