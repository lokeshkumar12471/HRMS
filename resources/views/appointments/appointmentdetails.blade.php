<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Appointment Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Appointment Details</li>
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
                            <h3 class="widget-title">Appointment Details</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td><strong>Patient ID</strong></td>
                                            <td>{{ $appointment->appointment_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Department</strong></td>
                                            <td>{{ $department->department_name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Doctor Name</strong></td>
                                            <td>{{ $doctor->doctor_name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Appointment Date</strong></td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Time Slot </strong></td>
                                            <td>{{ $appointment->appointment_time_slot }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Token Number </strong></td>
                                            <td>{{ $appointment->appointment_token_number }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Problem</strong></td>
                                            <td>{{ $appointment->appointment_problem }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit
                                    Appointment</button>
                                <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete
                                    Appointment</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Item -->
                </div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>
