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
											<td>{{$appointments->department_name }}</td>
                                            <td>{{ $appointments->doctor_name }}</td>
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
                                        <td><button type="button" class="btn btn-primary viewApp"  data-id="{{ $appointments->id }}"data-toggle="modal" data-target="#exampleModal">
 View
</button></td>
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
            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
			<!-- /Main Content -->
</x-guest-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$('.viewApp').click(function () {
            var id = $(this).attr("data-id");
 $(".removedata").remove();
            $.ajax({
                type: "GET",
                url: '{{ route('getappointmentbyid')}}',
                data: {'appid': id},
                success:function(response)
                {
              $(".modal-body").append("<table class='table table-striped removedata'><tr><th>Patient ID</th><td>"+response.appointment.appointment_name+"</td></tr><tr><th>Department</th><td>"+response.department.department_name+"</td></tr><tr><th>Doctor Name</th><td>"+response.doctor.doctor_name+"</td></tr><tr><th>Appointment Date</th><td>"+response.appointment.appointment_date+"</td></tr><tr><th>Time Slot</th><td>"+response.appointment.appointment_time_slot+"</td></tr><tr><th>Token Number</th><td>"+response.appointment.appointment_token_number+"</td></tr><tr><th>Problem</th><td>"+response.appointment.appointment_problem+"</td></tr>");
               }

            });
        });
</script>
