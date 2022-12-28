<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Appointment</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Add Appointment</li>
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
							<h3 class="widget-title">Add Appointment</h3>
							<form method="post" action="{{ route('patientstore') }}" enctype="multipart/form-data">
                                @csrf
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" name="department_id" id="department_id">
										   <option>Select Option</option>
                                        @foreach ($department as $departments)
                                        <option value="{{ $departments->id }}">{{ $departments->department_name }}
                                        </option>
                                    @endforeach
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="doctor_id">Doctor Name</label>
                          <select class="form-control" name="doctor_id" id="doctor_id">
											<option>Select Option</option>
                                  @foreach ($doctor as $doctors)
                                        <option value="{{ $doctors->id }}">{{ $doctors->doctor_name }}
                                        </option>
                                    @endforeach
										</select>
                                    	</div>

                                    	<div class="form-group col-md-6">
										<label for="doctor-name">Patient Name</label>
										<input type="text" name="patient_name" placeholder="Patient Name" class="form-control" id="doctor-name">
									</div>

                                    	<div class="form-group col-md-6">
										<label for="patient_date_of_birth">Date Of Birth</label>
										<input type="date" name="patient_date_of_birth" placeholder="date_of_birth" class="form-control" id="doctor-name">
									</div>

									<div class="form-group col-md-6">
										<label for="appointment-date">Appointment Date</label>
										<input type="date" name="patient_appointment_date" placeholder="Appointment Date" class="form-control" id="appointment-date">
									</div>

                                    <div class="form-group col-md-6">
										<label for="patient_date_of_birth">Phone</label>
										<input type="text" name="patient_phone" placeholder="Patient_Phone" class="form-control" id="doctor-name">
									</div>

                                       <div class="form-group col-md-6">
										<label for="patient_date_of_birth">Age</label>
										<input type="text" name="patient_age" placeholder="Patient_Age" class="form-control" id="doctor-name">
									</div>

                                    <div class="form-group col-md-6">
										<label for="patient_date_of_birth">Email</label>
										<input type="email" name="patient_email" placeholder="Patient_Email" class="form-control" id="doctor-name">
									</div>

									<div class="form-group col-md-6">
										<label for="time-slot">Time Slot</label>
										<select class="form-control" name="patient_time_slot" id="time-slot">
                                            <option>Select Time Slot</option>
											<option>10AM-11AM</option>
											<option>11AM-12pm</option>
											<option>12PM-01PM</option>
											<option>2PM-3PM</option>
											<option>3PM-4PM</option>
											<option>4PM-5PM</option>
											<option>6PM-7PM</option>
											<option>7PM-8PM</option>
											<option>8PM-9PM</option>
										</select>
									</div>
                                    <div class="form-group col-md-6">
										<label for="patient_gender">Gender</label>
										<select type="text" name="patient_gender" placeholder="Patient_Gender" class="form-control" id="patient_gender">
									     <option>Select Option</option>
                                        <option>Male</option>
                                          <option>Female</option>
                                           <option>Other</option>
                                           </select>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="patient_address">Address</label>
										<textarea type="text" placeholder="Patient_Address" name="patient_address" class="form-control" id="patient_address"></textarea>
									</div>

                                    <div class="form-group col-md-6">
										<label for="patient_profile">Patient Profile</label>
										<input type="file" placeholder="Patient_Profile" name="patient_profile" class="form-control" id="patient_profile">
									</div>

									<div class="form-group col-md-6">
										<label for="token-number">Token Number <small>(Auto Generated)</small></label>
										<input type="text" name="patient_token_number" placeholder="Token Number" class="form-control" id="token-number">
									</div>
									<div class="form-group col-md-12">
										<label for="patient_problem">Problem</label>
										<textarea placeholder="Problem" name="patient_problem" class="form-control" id="patient_problem" rows="3"></textarea>
									</div>

									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>
