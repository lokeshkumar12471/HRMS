<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Appointments</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Appointments List</li>
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
							<h3 class="widget-title">Appointments List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Department ID</th>
											<th>Doctor Name</th>
											<th>Patient Name</th>
											<th>Date Of Birth</th>
											<th>Appointment Date</th>
											<th>Phone</th>
                                            <th>Age</th>
                                            <th>Email</th>
                                            <th>Time Slot</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Token Number</th>
                                            <th>Problem</th>
                                             <th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                            @foreach ($appointment as $appointments)
											<td>{{$appointments->department_id }}</td>
                                            <td>{{ $appointments->doctor_id }}</td>
											<td>{{ $appointments->appointment_name }}</td>
											<td>{{ $appointments->appointment_date_of_birth }}</td>
                                            <td>{{ $appointments->appointment_date }}</td>
											<td>{{ $appointments->appointment_phone }}</td>
                                            <td>{{ $appointments->appointment_age }}</td>
											<td>{{ $appointments->appointment_email }}</td>
											<td>{{ $appointments->appointment_time_slot }}</td>
                                            <td>{{ $appointments->appointment_gender }}</td>
											<td>{{ $appointments->appointment_address }}</td>
											<td>{{ $appointments->appointment_token_number }}</td>
											<td>{{ $appointments->appointment_problem }}</td>
											<td><a href="{{ route('appointmentdetails', $appointments->id) }}" ><button type="button" class="btn btn-danger mt-3 mb-0">View</button></a></td>
                                        </tr>
                                        @endforeach
									</tbody>
                                </table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>
