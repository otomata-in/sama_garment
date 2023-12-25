@extends('layouts.app')

@section('content')
<br>
<br>
<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 animate-box">
				<h2><b>Contact Information </b></h2>
				<div class="row">
					<div class="col-md-18">
						<div class="contact-info-wrap-flex text-center p-5">
							<div class="con-info">
								<p><span class="contact-icon"><i class="icon-location-2"></i>
									</span><br> Sama Al Rahmaniah Readymade Gar Tr LLC
									PO Box:69933; Shk MBZ Road (E311) Muweilah Commercial, Sharjah - U.A.E
									</p>
							</div>
							<div class="con-info">
								<p><span class="contact-icon"><i class="icon-phone3"></i></span>
									<br>
									<a href="tel:+971 6 527 1437">+971 6 527 1437</a><br>
									<a href="tel:+971 50 535 8446">+971 50 535 8446</a><br>
									
							</div>
							<div class="con-info">
								<p><span class="contact-icon"><i class="icon-envelope"></i>
									</span><br> <a href="mailto:uniforms@sama-garments.com">uniforms@sama-garments.com</a></p>
							</div>
							<div class="con-info">
								<p><span class="contact-icon"><i class="icon-globe"></i><br>
									</span> <a href="/">sama-garments.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1 animate-box">
				<h2>Get In Touch</h2>
				<form class="contact-bx" enctype="multipart/form-data" action="/contact/store" method="POST">
					@csrf
					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="fname">First Name</label> -->
							<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
						</div>
						<div class="col-md-6">
							<!-- <label for="lname">Last Name</label> -->
							<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="email">Email</label> -->
							<input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="subject">Subject</label> -->
							<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="message">Message</label> -->
							<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68654.04842550041!2d51.483387547519364!3d25.264396713845052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x44d9319f78cfd4b1!2sDoha%2C%20Qatar!5e0!3m2!1sen!2sin!4v1688547211021!5m2!1sen!2sin" width=100% height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<style>
.con-info p{
 text-align: center !important;   
}


</style>

@endsection