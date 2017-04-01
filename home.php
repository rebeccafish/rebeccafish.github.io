<?php $page = "home" ?>
<?php $page_type = "home" ?>

<?php include 'files/header.php'; ?>


<header id="intro">
	<div>
		<img src="/img/logo.png" alt="logo"/>
		<h1>the portfolio of <br class="mbr">Rebecca Fish.</h1>
		<p>interaction and visual designer, <br class="dbr"/> and sometime front-end developer. </p>
	</div>
	<a id="scroll" href="#title"><i class="fa fa-angle-down"></i></a>
</header>

<div id="content">

<section id="projects"> 
	<button class="project_link" id="LDstartup" >
		<div class="preview">
			<div class="preview_image" id="LDstartup_preview"></div>
		</div>
		<a href="/L&D_startup">Learning &amp; Development Startup </a>  
	</button>
	<button class="project_link right" id="oneview" >
		<div class="preview">
			<div class="preview_image" id="oneview_preview"></div> 
		</div>
		<a href="/oneview">OneView &#8226; <span>Customized CRM</span></a>
	</button>
	<button class="project_link" id="financial" >
		<div class="preview">
			<div class="preview_image" id="financial_preview"></div>
		</div>
		<a href="/financial_app">Financial App &amp; Other Wireframes</a>
	</button>
	<button class="project_link right" id="pioneer" >
		<div class="preview">
			<div class="preview_image" id="pioneer_preview"></div> 
		</div>
		<a href="/the_pioneer">The Pioneer &#8226; <span>Student Newspaper Site</span></a>
	</button>

</section>

<section id="about"> <div class="col1">
	<h2>About me</h2>

	<p class="intro">Hey, I’m Rebecca. I’m a user experience designer at Apple. My role includes interaction design, visual design, and some prototyping/front-end development.</p>
	
	<p>I believe machines are here to help, not harm. Sometimes they just need a little extra assistance communicating with us humans.</p>
	
	<p>Due to the confidential nature of my work, I can’t share a lot here, but feel free to browse through my older projects.</p>
	
	<?php /*
	
	<p class="intro">experience designer, interaction refiner, <br/> pretty decent rhymer, and lover of the color blue</p>
	
	<p>I have experience designing mobile and web experiences for a variety of organizations, from multinational corporation to startup. My skill set includes user experience design, visual design, and basic front-end development. I’m passionate about all phases of the process of building user-friendly applications, from sketching out big-picture concepts with low-fidelity wireframes to getting an interaction just right in code. </p>
	
	<p>There's nothing better than things that just work. My favorite interfaces are elegant, efficient, and intuitive.  They solve real problems. They're powerful, but easy to learn. And they're pretty too! Ease of use is primary, but a beautiful interface has the power to delight and inspire. </p>
	
	<p>If you’re interested in the nitty gritty, here’s a list of technologies I’ve worked with in a professional capacity: standards-compliant HTML5, CSS3, jQuery, LESS, PHP, MySQL, Wordpress, AngularJS, CakePHP, Agile methodologies, Photoshop, Illustrator, InDesign, Fireworks, OmniGraffle, Sketch, Axure, and Balsamiq. I've also worked with Processing, Quartz Composer, After Effects, Premiere, Lightroom, and the new Adobe Edge suite of software.</p>
	
	<p>When a well-meaning person encourages me step away from the screen, I also enjoy photography, hiking, adventuring, art-creating, art-observing, and experimenting in the kitchen (with, um, mixed results).</p>
	
	
	---------
	
	<p><strong>I'm a perfectionistic pixel-pushing pragmatic product-designing puzzle-solver. And a few more things that don’t begin with ‘p’ so I couldn’t fit them in.</strong></p>
	
	<p>In secondary school, projects were my thing. I loved them, and I obsessed about every detail. For the seventh grade science fair, my process included these stages: 1. I agonized for hours over the perfect title font (I think I chose Jokerman &mdash; embarrassing). 2. Pasted the sections on the poster in a meticulous, calculated order. 3. Went to bed, and realized while trying to fall asleep that the order was wrong. 4. Politely asked (made) my mother go buy a new poster board at 11pm. And, 5., drank my first cup of coffee.</p>
	
	<p><strong>The point is, it's always been important to me that things are constructed with thought and purpose.  Nowadays, I spend my time passionately designing clean, efficient, intuitive interfaces that make a difference. I think <a href="http://en.wikipedia.org/wiki/Three_Laws_of_Robotics" target="_blank">computers should help people, not hurt them</a>, and that simple tasks should be simple.</strong></p>
	
	<p>I've used a diverse range of tools in a professional capacity, including standards-compliant HTML5, CSS3, JQuery, LESS, PHP, MySQL, Wordpress, AngularJS, CakePHP, Agile, Photoshop, Illustrator, InDesign, Fireworks, Sketch, Axure (somewhat), and Balsamiq.  I've also worked with Processing, Quartz Composer, After Effects, Premiere, Lightroom, and the new Adobe Edge suite of software.</p>
	
	<p>Some more things I love: photography, technology, contemporary art, and beautiful things that work beautifully.</p>
*/ ?>
</div></section>

<section id="contact"><div class="col1">
<h2>Contact</h2>
<form action="/files/contact.php" method="post">
	<div id="basics">
		<div>
			<label for="cf_name">Name:</label>
			<input class="contact_input" type="text" id="cf_name" name="cf_name"/>

			<label for="cf_email">Email:</label>
			<input class="contact_input" type="text" id="cf_email" name="cf_email"/>
		</div>
	</div>
	<textarea class="contact_input" name="cf_message"></textarea>
	<button type="submit"><i class="fa fa-paper-plane"></i>send</button>
</form>
</div></section>

<section id="final"><div class="col1">
	<p>&#169; <?php echo date("Y"); ?> Rebecca Fish</p>
	<p id="social">
		<a href="http://linkedin.com/in/rebeccafish/"><i class="fa fa-linkedin-square"></i></a>
		<a href="http://viewery.tumblr.com/"><i class="fa fa-tumblr-square"></i></a>
		<a href="http://www.pinterest.com/rbcafish/"><i class="fa fa-pinterest-square"></i></a>
		<a href="https://twitter.com/rebeccafish"><i class="fa fa-twitter-square"></i></a>
	</p>
</div></section>

</div>
<?php include 'files/footer.php'; ?>