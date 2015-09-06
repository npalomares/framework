<?php
/*
Template Name: Contact Form
*/

//Form validation goes here


?>
<?php get_header(); ?>

<section class="content container">
	<!-- Contact Content Goes Here! -->
	<div class="main">
		<div class="page-wrap">
		<div class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
			<article class="entry-content">
				<header class="page-intro">
					<h3>Let's chat about the web!</h3>
				</header>
				<form class="contact-form" method="post" action="">
					<div class="form-control">
						<label>First Name: </label>
						<input type="text" name="fname" id="fname" />
					</div>
					<div class="form-control">
						<label>Last Name: </label>
						<input type="text" name="lname" id="lname" />
					</div>
					<div class="form-control">
						<label>Email Address: </label>
						<input type="email" name="email" id="email" />
					</div>
					<div class="form-control">
						<label>Phone Number: </label>
						<input type="tel" name="number" id="number" />
					</div>
					<div class="form-control">
						<label>Subject: </label>
						<input type="text" name="subject" id="subject" />
					</div>
					<div class="form-control">
						<label>Message: </label>
						<textarea type="textarea" name="message" id="message"></textarea>
					</div>
					<div class="form-control">
						<input class="btn btn-primary" type="submit" value="Send Message" id="send" name="send" />
					</div>


				</form>
				<footer>

				</footer>
			</article>
		</div>
	</div>
</section>


<?php get_footer(); ?>