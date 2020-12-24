<?php 
    include 'includes/header.php';

?>

	<!-- section-3 -->
    <section class="contact"> 
			<div class="Contact-us-area"> 
				<div class="container"> 
					<div class="row">
						<div class="Contact-us text-center">
							<h2>Contact Us</h2>
							<p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-4">
							<div class="contact-content"> 							
								<i class="fa fa-mobile"></i>
								<h3>Call Us On</h3>
								<p>01771976535</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-content"> 							
								<i class="fa fa-envelope-o"></i>
								<h3>Email Us At</h3>
								<p>hasibul35-2452@diu.edu.bd</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-content"> 							
								<i class="fa fa-map-marker"></i>
								<h3>Visit Office</h3>
								<p>Allar Darga,Kushtia,Dhaka</p>
							</div>
						</div>							
                    </div>
                    <form action="success.php" method="POST">
                        <div class="message-box"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name*" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="email" name="email" placeholder="Your Email*" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="subject" placeholder="Your Subject.." />
                                    <textarea class="form-control" name="msg" cols="150" rows="3" placeholder="Your Message.."></textarea>
                                </div>	
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-btn">
                                    <button type="submit" name="insert" class="btn btn-custom">Send Message</button>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</section>

<?php 
	include 'includes/footer.php';

?>