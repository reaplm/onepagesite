	<div id="contact" >
			<?php include "contact.php"; ?>
	</div>
	<div class="footer">
			<div class="row">	
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col-sm-6" >
					<form id="contact-form" action="/onepagesite/mailer.php" method="post" class="form-horizontal">
						<div class="has-danger">
							<div class="">
								<input type="text" name="name"
								class = "form-control" placeholder="Name" />
								<div class="error-container">
									<label id="name-error" class="error" 
										for="name"></label>
								</div>
							</div>
						</div>
						<div class="has-danger">
							<div class="">
								<input type="text" name="email"
									class = "form-control"  placeholder="Email" />
								<div class="error-container">
									<label id="email-error" class="error" 
										for="email"></label>
								</div>
							</div>
						</div>
						<div class="has-danger">
							<div class="">
								<input type="text" name="subject"
								class = "form-control"  placeholder="Subject" />
								<div class="error-container">
									<label id="subject-error" class="error" 
										for="subject"></label>
								</div>
							</div>
						</div>
						<div class="" >
							<div  >
								<textarea rows="5" cols="50"	name="message"
									class = "form-control" ></textarea>
							</div>
						</div>
						<div class="">
							<button  class="btn btn-primary float-right"  role="button" 
								id="contactWidgetSubmit" >SUBMIT</button>
						</div>
					</form>
				</div>
				<div class="col-lg-4 col-sm-6 centered-container">
					<div class="contact-me">
						<img src="/onepagesite/assets/images/mail.png"/> pdm.molefe@gmail.com<br />
						<img src="/onepagesite/assets/images/smartphone.png" class="d-inline"/> +267 71406569<br />
						<img src="/onepagesite/assets/images/placeholder.png"/> Gaborone, Botswana<br />
						<img src="/onepagesite/assets/images/skype.png"/> pearl.molefe<br />
						
					</div>
				</div>
				<div class="col-lg-2">
					
				</div>
			
			<br>
			
		</div>
		<div class="card footer-footer">
				<p>&copy;  Pearl Molefe 2018</p>
			</div>
	</body>
</html>