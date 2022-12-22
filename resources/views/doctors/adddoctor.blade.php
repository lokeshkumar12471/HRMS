<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Doctor</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Add Doctor</li>
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
                             @if(isset($doctor->id)!="")
							<h3 class="widget-title">Update Doctor</h3>
                            @else
                            <h3 class="widget-title">Add Doctor</h3>
                            @endif
							 <form   @if(isset($doctor->id)!="")
                            action="{{route('doctorupdate',$doctor->id)}}"  @else action="{{route('doctorstore')}}" @endif  enctype="multipart/form-data"  method="POST">
                              @csrf
								<div class="form-row">
                                    <div class="form-group col-md-6">
										<label for="Doctor-name">Doctor Name</label>
										<input type="text" name="doctor_name" class="form-control" placeholder="Doctor name" id="Doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Department</label>
										<select class="form-control" name="department_id" >
											 @foreach ($department as $departments)

											<option value="{{ $departments->id }}">{{ $departments->department_name }}</option>

                                         @endforeach
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="dob">Date Of Birth</label>
										<input type="date" name="doctor_date_of_birth" placeholder="Date of Birth" class="form-control" id="dob">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="specialization">Specialization</label>
										<input type="text" name="specialization" placeholder="Specialization" class="form-control" id="specialization">
									</div>
									<div class="form-group col-md-6">
										<label for="experience">Experience</label>
										<input type="text" name="doctor_experience" placeholder="Experience" class="form-control" id="experience">
									</div>
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" name="doctor_age" placeholder="Age" class="form-control" id="age">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text" name="doctor_phone" placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" name="doctor_email" placeholder="email" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" name="doctor_gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="about-doctor">Doctor Details</label>
										<textarea placeholder="Doctor Details" name="doctor_details" class="form-control" id="about-doctor" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="address">Address</label>
										<textarea placeholder="Address" name="doctor_address" class="form-control" id="address" rows="3"></textarea>
									</div>

									<div class="form-group col-md-12">
										<label for="file">File</label>
										<input type="file" name="doctor_profile" class="form-control" id="file">
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Please Check in doctors list
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
