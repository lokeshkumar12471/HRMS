
<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Payment</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Payments</li>
						<li class="breadcrumb-item active">Add Payment</li>
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
							<h3 class="widget-title">Add Payment</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-id">Patient ID</label>
										<input type="text" class="form-control" placeholder="Patient ID" id="patient-id">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" class="form-control" placeholder="Patient Name" id="patient-name">
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" id="department">
											<option>Neuro</option>
											<option>Ortho</option>
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
										<input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="adminssion-date">Admission Date</label>
										<input type="date" placeholder="Adminssion Date" class="form-control" id="adminssion-date">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="discharge-date">Discharge Date</label>
										<input type="date" placeholder="Discharge Date" class="form-control" id="discharge-date">
                                    </div>
                                    <div class="form-group col-md-12">
										<h4>Services</h4>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="service-name">Service Name</label>
										<input type="text" placeholder="Service Name" class="form-control" id="service-name">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="treatment-cost">Cost of Treatment</label>
										<input type="text" placeholder="Cost of Treatment" class="form-control" id="treatment-cost">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-outline-success"><span class="ti-plus"></span> Add Service</button>
                                    </div>
                                    <div class="form-group col-md-12">
										<h4>Payment</h4>
                                    </div>
                                    <div class="form-group col-md-3">
										<label for="discount">Discount (%)</label>
										<input type="text" placeholder="Discount" class="form-control" id="discount">
                                    </div>
                                    <div class="form-group col-md-3">
										<label for="advance-paid">Advance Paid</label>
										<input type="text" placeholder="Advance Paid" class="form-control" id="advance-paid">
                                    </div>
                                    <div class="form-group col-md-3">
										<label for="payment-type">Payment Type</label>
										<select class="form-control" id="payment-type">
											<option>Check</option>
											<option>Card</option>
											<option>Cash</option>
										</select>
                                    </div>
                                    <div class="form-group col-md-3">
										<label for="card-check">Card/Check No</label>
										<input type="text" placeholder="Card/Check No" class="form-control" id="card-check">
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
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Payment added
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

