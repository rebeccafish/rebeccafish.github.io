<?php $page = "L&DStartup" ?>
<?php $page_type = "portfolio_item" ?>

<?php include 'files/header.php'; ?>

<?php include 'files/nav.php'; ?>

<header>
	<div id="lead_image">
		<img class="himage monitor" src="/img/LD_lead_image_monitor.png"/>
		<img class="himage side1" src="/img/LD_lead_image_side1.png"/>
		<img class="himage side2" src="/img/LD_lead_image_side2.2.png"/>
	</div>
	<a id="scroll" href="#title"><i class="fa fa-angle-down"></i></a>
</header>



<div id="content">

<div id="title"><div class="col1">
	<h1>Learning &amp; Development Start-up</h1>
	<p id="meta">
		<span id="date">2013</span>
	</p>
</div></div>

<section id="overview"> <div class="col1">
	<h2>Overview</h2>
	<p>This small company was founded on the premise of providing a web-based resource for workplace training professionals, and was centered around a widely-adopted concept practiced in the learning and development community. To protect the company and its process, names have been withheld.</p>
	<p>A systems architect and I were given three months to build the web app. I was responsible for the UX, visual design, and front-end development for everything behind the subscription-based paywall. </p><p>Components included a full checkout flow, an interactive community forum, a full suite of multimedia tools, notifications, and user profiles with inline editing functionality.</p>
</div></section>

<section class="graphic"><div class="col1-wide">
  <figure><img src="/img/LD_image5.jpg" /></figure>
</div></section>

<?php 
/*
<section> <div class="col1">
	<h2>Background</h2>
	<h4>What is 70:20:10?</h4>
	<p>The 70:20:10 framework is a learning model that recognizes people learn more from day-to-day on-the-job experiences than formal courses. Based on research, 70:20:10 is a ratio that breaks down the percentage of learning that comes from everyday experience (70%), social work with managers, mentors and peers (20%), and structured education (10%). Companies can strategically leverage the 70:20:10 framework to develop more effective learning initiatives that increase performance and productivity. It’s been embraced by a lot of really large corporations: Microsoft, IBM, Oracle, Procter &amp; Gamble, Goldman Sachs, and Nike, to name a few.</p>
	<h4>The concept behind the Forum</h4>
	<p>Despite the framework’s popularity, resources are scarce. People are on board with the concept, but lost when it comes to implementation.  The Forum provides an online repository of resources and a global community where members can share ideas and strategies.</p>
</div>
</section>
*/
?>


<section class="graphic"><div class="col1-wide">
  <figure><img src="/img/LD_image6.jpg" /></figure>
</div></section>

<section> <div class="col1">
	<h2>Requirements</h2>
	<p>I came on board a couple of months before the targeted launch date and inherited an Axure prototype from the previous UX designer.  Two of us built the site: a systems architect and I.  We worked with the product owners to decide which features from the prototype were essential for launch, and which could be cut and revisited later.  We decided the initial release would have these five core components:</p>
	<ul>
		<li>a community forum</li>
		<li>a library of articles to help with implementation (the "Toolkit")</li>
		<li>a list of members and profiles</li>
		<li>personal account settings</li>
		<li>a signup/checkout flow</li>
		
	</ul>
</div></section>

<section class="graphic"><div class="col1-wide">
  <figure><img src="/img/LD_image4.jpg" /></figure>
</div></section>

<section> <div class="col1">
	<h2>Project Details</h2>
	<h4>UX</h4>
	<p>In wireframes and sketches, I addressed these areas of weakness in the prototype:</p>
	<ol>
	<li>There was no search, sort, or filter for either the Community section posts or the Toolkit articles.  They had been ranked by number of likes only. </li>
	
	<li>There was unresolved functionality around the tiered membership model. Clear visual indicators of what was and was not accessible to members at each level of membership were needed.</li>
	
	<li>There was no signup/checkout in the prototype.   The Join functionality for the site had a few complexities: It needed to accommodate both sign-ups with variable pricing, as well as item purchases. It had to support signups through LinkedIn. And, it needed to address the currency and taxation complexities of international e-commerce.</li>
	</ol>
	
	<p>To build the signup/checkout, I did a lot of competitive research and read literature on best practices. There was no budget or resources to recruit outsiders for usability testing, so I tested it on coworkers and friends: anyone who would sit still for me. The systems architect and I collaborated closely to build a system that was reliable and secure.</p>
	
	<h4>Visual design</h4>
	<p>A local graphic designer had already given the company a basic brand identity: the logo, Helvetica Neue, and true RGB 255,0,0 red. I presented a variety of designs for similar sites to the team, and we agreed on a minimal, clean interface so the content could be the star of the show. The final mockup felt light and friendly.  I paid special attention to maintaining a visual hierarchy for each page.</p>
	
	<h4>Front-end development</h4>
	<p>The systems architect chose CakePHP for the web app framework, and wrote most of the controller functions. I was responsible for the view files: the HTML, LESS, and Javascript (mostly JQuery), and the database calls and array traversals.</p>
	<p>One challenge we faced was browser demographics. The analytics on our “coming soon” splash page reported that IE had the biggest usage share—by far. This was mainly a result of the corporate appeal of our product. We decided to fully support IE8 and above, which would satisfy the vast majority of our users, without significantly hindering development speed.</p>
	
</div></section>

<section class="graphic"><div class="col1-wide">
  <figure><img src="/img/LD_image9.jpg" /></figure>
</div></section>

<section class="graphic"><div class="col1-wide">
  <figure><img src="/img/LD_image8.jpg" /></figure>
</div></section>



<section> <div class="col1">
	<h2>After launch</h2>
	<p>The site had a soft release in June, and the response was positive.  We started to hear from our customers: what they wanted more of, what they had trouble with. This feedback led to shifts in the business strategy. We introduced webinars and public events to great success.  The tiered membership model was eventually abandoned, and replaced with a blanket organization-wide membership. Instead of requiring a sign up to access the free preview, we started offering it to the public.  </p>
	<p>A number of new or expanded features were added. I worked on refining  the interactions, as shown below:</p>
	<figure><img src="/img/LD_video1.gif" />
	<figcaption><span>Inline editing of private member details.</span> The public profile (not shown here) is also editable inline, and includes a headshot, description, social media links, etc.</figcaption>
	</figure>
	<figure><img src="/img/LD_video2.gif" />
	<figcaption><span>The address page in the checkout flow.</span> I implemented instant validation for checkout fields. Fields left empty, however, don't validate until the click of "next" button, as shown above.</figcaption>
	</figure>
</div></section>


<section><div class="col1">
	<h2>The latest</h2>
	<p>The company is still in early stages, working on finding its footing, but membership is growing well. In early 2014, I designed a new homepage, membership page, and ongoing art direction for the public-facing site.</p>
</div></section>



<?php include 'files/bottom.php'; ?>

</div>

<?php include 'files/footer.php'; ?>