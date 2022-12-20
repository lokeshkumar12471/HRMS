<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit Patient</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Edit Patient</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Edit Patient</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" value="Daniel Smith" class="form-control" placeholder="Patient name" id="patient-name">
									</div>
									<div class="form-group col-md-6">
										<label for="dob">Date Of Birth</label>
										<input type="date" value="1989-10-10" placeholder="Date of Birth" class="form-control" id="dob">
									</div>
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" value="30" placeholder="Age" class="form-control" id="age">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text" value="12345 67890" placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" value="email@email.com" placeholder="email" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" id="gender">
											<option selected>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label for="exampleFormControlTextarea1">Address</label>
										<textarea placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3">Koramangala Banglore, India</textarea>
									</div>
									<div class="form-group col-md-12">
										<label for="file">File</label>
										<input type="file" class="form-control" id="file">
									</div>

									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Update</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Updated!</strong> Please add payment now
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>
