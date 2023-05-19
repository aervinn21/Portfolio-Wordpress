<?php wp_footer() ?>

<footer class="footer py--3">
        <div class="container">
            <div class="footer__wrapper d--flex justify--between align--center mb--4">
                <div class="leftFooter">
                    <h1>Arvin.C</h1>
                    <ul class="d--flex">
                    <?php if(have_rows('socials_repeater')) : while(the_repeater_field('socials_repeater')): ?>
                        <li><a href="https://www.facebook.com/arvincastillo21"><?php echo get_sub_field('icon_1'); ?></a></li>
                        <li><a href="https://www.instagram.com/rvn_cstll/"><?php echo get_sub_field('icon_2'); ?></a></li>
                        <li><a href="https://twitter.com/aervinn21"><?php echo get_sub_field('icon_3'); ?></a></li>
                        <li><a href="mailto:arvincastillo@gmail.com"><?php echo get_sub_field('icon_4'); ?></a></li>
                        <?php
                        endwhile;
                            else:
                                echo "no available post yet";
                            endif;
                            wp_reset_postdata();
                        ?> 
                    </ul>
                </div>
                <div class="rightFooter">
                    <table>
                        <tr>
                            <td><a href="<?php echo site_url('/home') ?>">Home</a></td>
                            <td><a href="<?php echo site_url('/contact') ?>">Contact</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('/about') ?>">About</a></td>
                            <td><a href="#slider">Reviews</a></td>
                        </tr>
                        <tr>
                            <td><a href="#projects">Projects</a></td>
                            <td><a href="#figma">Figma</a></td>
                        </tr>
                        <tr>
                            <td><a href="#skills">Skills</a></td>
                            <td><a href="#aboutMe">Resume</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="copyright">
                <p><small> © 2023 • Arvin Castillo</small></p>
            </div>
        </div>
    </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js">
</script>
<script type="module">
	var slides = tns({
	  container: '.my-slider',
	  items: 1,
	  slideBy: 'page',
	  autoplay: true,
	  controls: false,
      mouseDrag:true,
	  navPosition: "bottom",
	  responsive:{
		  320: {
			  items:1,
		  },
		  700:{
			  items:1,
		  },
		  900:{
			  items: 1,
		  }
	  }
	});
	</script>
    <script>
        const nav = document.querySelector(".nav");
        const toggleMenu = document.querySelector(".toggleMenu");
        const headerMobileNav = document.querySelector('.headerMobileNav');
    
        toggleMenu.addEventListener("click", ()=>{
            toggleMenu.classList.toggle("open");
            headerMobileNav.classList.toggle('active');
            nav.classList.toggle("open");
        });
    </script>
</body>
</html>