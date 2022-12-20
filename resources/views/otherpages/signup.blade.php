<x-login-layout>
<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Page Content -->
		<div id="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 auth-box">
						<div class="proclinic-box-shadow">
							<!-- Page Title -->
							<h3 class="widget-title">Sign Up</h3>
							<!-- /Page Title -->

							<!-- Form -->
							<form class="widget-form">
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="email" placeholder="Email" name="email" class="form-control" required="" data-validation="email" data-validation-has-keyup-event="true">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-12">
										<input name="user" placeholder="Username" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
										 data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" placeholder="Password" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
										 data-validation-has-keyup-event="true">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" placeholder="Confirm Password" name="pass_confirmation" class="form-control" data-validation="strength"
										 data-validation-strength="2" data-validation-has-keyup-event="true">
									</div>
								</div>
								<div class="form-check row">
									<div class="col-sm-12 text-left">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" type="checkbox" id="ex-check-2">
											<label class="custom-control-label" for="ex-check-2">I agree to Terms & Conditions</label>
										</div>
									</div>
								</div>
								<!-- Button -->
								<div class="button-btn-block">
									<button type="button" class="btn btn-primary btn-lg btn-block">Sign Up</button>
								</div>
								<!-- /Button -->
								<!-- Linsk -->
								<div class="auth-footer-text">
									<small>Alredy Sign Up,
										<a href="login.html">Login</a> Here</small>
								</div>
								<!-- /Links -->
							</form>
							<!-- /Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
	</div>
</x-login-layout>
