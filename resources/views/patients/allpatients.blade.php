<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Patients</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">All Patients</li>
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
							<h3 class="widget-title">Patients List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Patient ID</th>
                                            <th>Department Name</th>
                                            <th>Doctor Name</th>
											<th>Patient Name</th>
                                            <th>Patient (DOB)</th>
											<th>Age</th>
											<th>Phone</th>
											<th>Email</th>
                                            <th>Gender</th>
                                            <th>Address</th>
											<th>Patient Profile</th>
                                            <th>Actions</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($patient as $patients)
										<tr>
											<td>{{ $patients->id }}</td>
                                            <td>{{ $patients->department_id }}</td>
                                            <td>{{ $patients->doctor_id }}</td>
											<td>{{ $patients->patient_name }}</td>
                                            <td>{{ $patients->patient_date_of_birth }}</td>
                                            <td>{{ $patients->patient_age }}</td>
                                            <td>{{ $patients->patient_phone }}</td>
                                            <td>{{ $patients->patient_email }}</td>
                                            <td>{{ $patients->patient_gender }}</td>
                                            <td>{{ $patients->patient_address }}</td>
                                            <td><img src="{{asset('uploads/patient/' . $patients->patient_profile) }}" height="100" width="100"></td>
											<td>
                                                   <a href="{{ route('patientdetails', $patients->id) }}"><button type="button"
                                                    class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span>
                                                    History</button></a><a href="{{ route('patientdelete',  $patients->id) }}"><button type="button"
                                                    class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span>
                                                    DELETE</button></a>
                                            <a href="{{ route('patientedit', $patients->id) }}"><button type="button"
                                                    class="btn btn-success mt-3 mb-0"><span class="ti-pencil-alt"></span>
                                                    EDIT</button></a>
                                        </td>
                                            @endforeach
										</tr>
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
