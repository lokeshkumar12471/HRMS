<x-guest-layout>
		<!-- Page Content -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Room Type</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Room Types</li>
						<li class="breadcrumb-item active">Add Room Type</li>
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
							<h3 class="widget-title">Add Room Type</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="room-number">Room Number</label>
										<input type="text" class="form-control" placeholder="Room Number" id="room-number">
									</div>
									<div class="form-group col-md-6">
										<label for="room-type">Room Type</label>
										<select class="form-control" id="room-type">
											<option>ICU</option>
											<option>General</option>
											<option>AC Room</option>
                                            <option>Twin Sharing Room</option>
											<option>Single Room</option>
											<option>Single Deluxe Room</option>
                                            <option>Super Deluxe Room</option>
                                            <option>Suite</option>
                                            <option>Multibed Ward</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" placeholder="Patient Name" class="form-control" id="patient-name">
									</div>
									<div class="form-group col-md-6">
										<label for="allot-date">Allotment Date</label>
										<input type="date" placeholder="Allotment Date" class="form-control" id="allot-date">
									</div>
									<div class="form-group col-md-6">
										<label for="discharge-date">Discharge Date</label>
										<input type="date" placeholder="Discharge Date" class="form-control" id="discharge-date">
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">Doctor Name</label>
										<input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
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
										<button type="submit" class="btn btn-primary btn-lg">Allot Room</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Please check in Allotment list
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

