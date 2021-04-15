<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Alger_Port
* @since Alger_Port 1.0
*/
echo get_header(); 
?>


<header id="header">
	<div class="container" style="display: grid;grid-template-columns: 140px auto 140px">

		<h1 class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"></a></h1> 

		<nav class="nav-menu d-none d-lg-block">
			<ul class="d-flex align-items-center justify-content-center"> 
				<li><a href="index.html">Home</a></li> 
				<li><a href="#work">My Work</a></li>
				<li><a href="#services">Services</a></li>
				<li><a target="__blank" href="https://algerwrites.medium.com/">Blog</a></li>
				<li><a href="#">Shop</a></li>
				<li><a href="#contact">Contact</a></li>

			</ul>
		</nav> 


		<ul class="social-nav d-flex align-items-center justify-content-end">
			<li><a target="__blank" href="https://algerwrites.medium.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/medium.png"></a></li>
			<li><a target="__blank" href="https://github.com/algermakiputin"><img src="<?php echo get_template_directory_uri() ?>/assets/img/github.png"></a></li>
			<li><a target="__blank" href="https://youtube.com/algermakiputin"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube.png"></a></li>  
		</ul>


	</div>
</header> 

<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="overlay"></div>
	<span id="arrow-down">
		<!--    <span class="text-scroll">Scroll</span> -->
		<a class="ri-arrow-down-line bounce" href="#work" id="arrow-scroll" style="display: block;"></a>
	</span>
	<div class="hero-container" data-aos="fade-up" data-aos-delay="150">

		<span class="text-hl" id="hero-intro">HOWDY, I AM</span>
		<h1>Alger Makiputin</h1>
		<h2>I'm a <span id="typer" class="text-hl"></span></h2>

	</div>
</section><!-- End Hero -->

<main id="main"> 
	<section id="work" class="work">
		<div class="container" > 
			<div class="row">
				<div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-up">
					<div class="work-wrapper">
						<h3>My Recent Work</h3>
						<h2>POSLite Inventory Software</h2> 
						<p>
							A point-of-sale, sales, and Inventory management system for every retailer and wholesalers. Helping businesses save time and focus on what truly matters. Growing their business.  As of this writing, POSLite empowers over a hundred stores nationwide and counting.
						</p>
					</div>
				</div>
				<div class="col-lg-6 video-box align-self-baseline no-padding-left" data-aos="zoom-in" data-aos-delay="100"> 
					<a href="https://poslitesoftware.com" target="__blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/work/poslite.jpg" class="img-fluid" alt=""> </a>
				</div>   
			</div>


			<div class="row">

				<div class="col-lg-6 video-box align-self-baseline no-padding-right" data-aos="zoom-in" data-aos-delay="100">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/work/trading.png" class="img-fluid" alt=""> 
				</div>  

				<div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-up">
					<div class="work-wrapper">
						<h3>Rising Soon</h3>
						<h2>PSE Trading Journal</h2> 
						<p>
							I am also a stock trader.  I trade in both the global markets and in the Philippines stock exchange (PSE).  Over the past few years, I can’t seem to find a trading journal that fits my criteria. PSE Trading Journal is on the way and when it's done it will be available to the public for free!.
						</p>
					</div>
				</div> 
			</div>

			<div class="row">
				<div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-up">
					<div class="work-wrapper">
						<h3>Mobile App for Kids</h3>
						<h2>Filipino Alamat</h2> 
						<p>
							Everyone likes stories, I enjoyed reading Filipino Alamat stories when I was a kid and I'm sure there are thousands of kids out there who enjoy reading stories just like me. Filipino Alamat App is a free mobile app for kids and young adults. Up to date, Filipino Alamat earned 100,000+ downloads. 
						</p>
					</div>
				</div>
				<div class="col-lg-6 video-box align-self-baseline no-padding-left" data-aos="zoom-in" data-aos-delay="100">
					<a href="https://play.google.com/store/apps/details?id=filipino.alamat&hl=en&gl=US" target="__blank">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/work/alamat.png" class="img-fluid" alt=""> 
					</a>
					
				</div>   
			</div>

		</div>
	</section><!-- End About Section -->

	<section id="cta" class="cta" >
		<div class="container" data-aos="zoom-in">
			<h1 class="text-center" data-aos="flip-left">Let's create an app that will make your competitors jealous and generate more sales.</h1>
			<button class="mx-auto cta-btn" data-bs-toggle="modal" data-aos="fade-up" data-bs-target="#hireme-modal">Hire Me</button>
		</div>
	</section>

	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 px-2">
					<article data-aos="fade-right">
						<b>My Services</b>
						<h1>What Do I Do?</h1>
						<p>If you hire me you will get an amazing website specially tailored for your business. I am totally committed to giving you amazing customer support. If you don’t like my work you’re eligible for a 100% refund. Which has never happened before.</p>
					</article>
				</div>
				<div class="col-lg-4 px-2">
					<article class="services-wrapper" data-aos="fade-up">
						<div class="service-icon">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/coding.png">
						</div>
						<div class="services-description">
							<h2>Website Development</h2>
							<p>Fully functional, a stunning website for everyone. My service delivers exactly what you need for your business. It provides credibility, accessibility, and showcasing your products and services.</p>
						</div>
					</article>

					<article class="services-wrapper" data-aos="fade-up">
						<div class="service-icon">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/robot.png">
						</div>
						<div class="services-description">
							<h2>Automation</h2>
							<p>With my expertise, I can help you assess your business process workflow and redesign. Provide you with automation technology that will maximize your operational efficiency.</p>
						</div>
					</article>
				</div>
				<div class="col-lg-4">
					<article class="services-wrapper" data-aos="fade-up">
						<div class="service-icon">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/app-development.png">
						</div>
						<div class="services-description">
							<h2>Mobile App Development</h2>
							<p>Using up to date technologies for mobile app development. I help companies reach customers on smaller devices and utilize mobile features to keep your customers engaged. </p>
						</div>
					</article>

					<article class="services-wrapper" data-aos="fade-up">
						<div class="service-icon">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/computer.png">
						</div>
						<div class="services-description">
							<h2>UI Design</h2>
							<p>Fresh ideas and countless resources for inspiration. I create designs with a customer mindset. I will make sure that your website will not only look great but is also convertible.</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section id="cta-bottom" class="cta">
		<div class="container">

			<div class="col-lg-8">
				<h1 class="" data-aos="fade-left">Start off on the right foot Let’s start developing your success online!</h1>
				<button data-bs-toggle="modal" class="cta-btn" data-bs-target="#hireme-modal" data-aos="fade-up">Hire Me</button>
			</div>
		</div>
	</section>

	<section id="contact" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div data-aos="fade-up">
					<?php
						echo apply_shortcodes('[contact-form-7 id="1890" title="Contact form 1"]', FALSE);
					?> 
				</div>
				</div>
				<div class="col-lg-4">
					<article class="contact-details" >
						<h4 data-aos-delay="300" data-aos="fade-up">CONTACT DETAILS</h4>
						<p data-aos-delay="400" data-aos="fade-up"> You have reached my contact details. You are one step away from turning your idea into reality. I am always available to discuss your project over the phone or via email or you can fill-up the form and just say HI!</p>
						<div class="contact-information" data-aos-delay="500" data-aos="fade-up">
							<div><label><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/pin.png"> &nbsp;&nbsp;&nbsp;Philippines</label></div>
							<div><label><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/mail.png"> &nbsp;&nbsp;&nbsp;hello@algermakiputin.dev</label></div>
							<div><label><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone-number.png"> &nbsp;&nbsp;&nbsp;+639560887535</label></div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<!-- ======= Footer ======= -->
		<footer id="footer"> 
			<p class="text-center" data-aos-delay="600" data-aos="fade-up"> Alger Makiputin <span class="text-hl">&copy;2020</span></p>
		</footer><!-- End Footer -->
	</section>
</main> 

<div class="modal" tabindex="-1" id="hireme-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">HIRE ME</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
     <?php
			echo apply_shortcodes('[contact-form-7 id="1891" title="Hire Me"]', FALSE);
		?> 
    
    </div>
  </div>
</div>



<div id="preloader"></div>



<?php echo get_footer(); ?>