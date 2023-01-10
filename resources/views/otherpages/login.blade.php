<x-login-layout>
<div class="wrapper">
		<!-- Page Content  -->
		<div id="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 auth-box">
						<div class="proclinic-box-shadow">
							<h3 class="widget-title">Login</h3>
							<form class="widget-form" action="{{ route('checkLogin') }}">
								<!-- form-group -->
								<div class="form-group row">
									<div class="col-sm-12">
										<input name="user" placeholder="Username" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
										 data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
									</div>
								</div>
								<!-- /.form-group -->
								<!-- form-group -->
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" name="pass" placeholder="Password"  class="form-control" data-validation="strength" data-validation-strength="2"
										 data-validation-has-keyup-event="true">
									</div>
								</div>
								<!-- /.form-group -->

								<!-- Login Button -->
								<div class="button-btn-block">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
								</div>
								<!-- /Login Button -->
								<!-- Links -->

								<!-- /Links -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content  -->
	</div>
</x-login-layout>
