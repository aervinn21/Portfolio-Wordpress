<?php wp_footer() ?>

<footer class="footer py--3">
        <div class="container">
            <div class="footer__wrapper d--flex justify--between align--center mb--4">
                <div class="leftFooter">
                    <h1>Arvin.C</h1>
                    <ul class="d--flex">
                        <li><a href="https://www.facebook.com/arvincastillo21"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/rvn_cstll/"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/aervinn21"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="mailto:arvincastillo@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="rightFooter">
                    <table>
                        <tr>
                            <td><a href="#">Home</a></td>
                            <td><a href="contact.html">Contact</a></td>
                        </tr>
                        <tr>
                            <td><a href="about.html">About</a></td>
                            <td><a href="#slider">Reviews</a></td>
                        </tr>
                        <tr><td><a href="#projects">Projects</a></td></tr>
                        <tr><td><a href="#skills">Skills</a></td></tr>
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