<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit BloodBank</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">BloodBanks</li>
						<li class="breadcrumb-item active">Edit BloodBank</li>
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
							<h3 class="widget-title">Edit BloodBank</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient ID</label>
										<input type="text" value="P654T" class="form-control" placeholder="Patient ID" id="patient-id">
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" id="department">
											<option>Neuro</option>
											<option selected>Ortho</option>
											<option>General</option>
                                            <option>Cardiology</option>
                                             <option>Dentistry</option>
                                              <option>Laboratory</option>
                                               <option>Pulmonology</option>
                                                <option>Gynecology</option>
                                                <option>Gastrology</option>
                                               <option>Neurology</option>
                                                <option>Physical rehabilitation</option>
                                                 <option>Pediatrician</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">Doctor Name</label>
										<input type="text" value="Dr Kiran Sharma" placeholder="Doctor Name" class="form-control" id="doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="bloodbank-date">BloodBank Date</label>
										<input type="date" value="2018-11-12" placeholder="BloodBank Date" class="form-control" id="bloodbank-date">
									</div>
									<div class="form-group col-md-6">
										<label for="time-slot">Time Slot</label>
										<select class="form-control" id="time-slot">
											<option>10AM-11AM</option>
											<option>11AM-12pm</option>
											<option>12PM-01PM</option>
											<option>2PM-3PM</option>
											<option>3PM-4PM</option>
											<option selected>4PM-5PM</option>
											<option>6PM-7PM</option>
											<option>7PM-8PM</option>
											<option>8PM-9PM</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="token-number">Token Number <small>(Auto Generated)</small></label>
										<input type="text" value="58" placeholder="Token Number" class="form-control" id="token-number">
									</div>
									<div class="form-group col-md-12">
										<label for="problem">Problem</label>
										<textarea placeholder="Problem" class="form-control" id="problem" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur convallis egestas aliquet. Nunc ullamcorper massa in magna pulvinar, a eleifend felis condimentum.</textarea>
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
								<strong>Successfully Updated!</strong> BloodBank updated
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

