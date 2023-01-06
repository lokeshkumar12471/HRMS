<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Allotments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Allotments</li>
                <li class="breadcrumb-item active">All Allotments</li>
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
                    <h3 class="widget-title">Allotments List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Room Allotment Id</th>
                                    <th>Room Allotment No.</th>
                                    <th>Room Type</th>
                                    <th>Floor</th>
                                    <th>Room Rate</th>
                                    <th>Patient Name</th>
                                    <th>Allotment Date</th>
                                    <th>Discharge Date</th>
                                    <th>Doctor Name</th>
                                    <th>Total Beds</th>
                                    <th>Occupied Beds</th>
                                    <th>UnOccupied Beds</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomallotment as $roomallotments)
                                    <tr>
                                        <td>{{ $roomallotments->id }}</td>
                                        <td>{{ $roomallotments->roomnumber }}</td>
                                        <td>{{ $roomallotments->roomtype }}</td>
                                        <td>{{ $roomallotments->roomfloor }}</td>
                                        <td>{{ $roomallotments->roomrate }}</td>
                                        <td>{{ $roomallotments->patientname }}</td>
                                        <td>{{ $roomallotments->allotmentdate }}</td>
                                        <td>{{ $roomallotments->dischargedate }}</td>
                                        <td>{{ $roomallotments->doctor_name }}</td>
                                        <td>{{ $roomallotments->totalbeds }}</td>
                                        <td>{{ $roomallotments->occupiedbeds }}</td>
                                        <td>{{ $roomallotments->unoccupiedbeds }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-danger mt-3 mb-0 deleteroomallotment"><span
                                                    class="ti-trash"></span>
                                                DELETE</button>
                                            <button type="button"
                                                class="btn btn-success mt-3 mb-0 editroomallotment"><span
                                                    class="ti-pencil-alt"></span>
                                                EDIT</button>
                                            <button type="button"
                                                class="btn btn-primary mt-3 mb-0 viewroomallotment"><span
                                                    class="ti-pencil-alt"></span>
                                                View</button>
                                        </td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $('.editApp').click(function() {
        var id = $(this).attr('data-id');
        $(".removedata").remove();

        $.ajax({
            type: 'GET',
            url: '{{ route('getpatientbyid') }}',
            data: {
                'editapp': id
            },
            success: function(response) {
                $('.modal-body').append(
                    '<div class="form-group col-md-6 removedata"><label for="patient-name">Patient Name</label><input type="text" name="patient_name" value="' +
                    response.patient.patient_name +
                    '"/><div class="form-group col-md-6 removedata"><label for="dob">Date Of Birth</label><input type="date" name="patient_date_of_birth" value="' +
                    response.patient.patient_date_of_birth +
                    '"/><div class="form-group col-md-6 removedata"><label for="age">Age</label><input type="text" name="patient_age" value="' +
                    response.patient.patient_age +
                    '"/><div class="form-group col-md-6 removedata"><label for="phone">Phone</label><input type="text" name="patient_phone" value="' +
                    response.patient.patient_phone +
                    '"/><div class="form-group col-md-6 removedata"><label for="email">Email</label><input type="text" name="patient_email" value="' +
                    response.patient.patient_email +
                    '"/><div class="form-group col-md-6 removedata"><label for="address">Address</label><input type="text" name="patient_address" value="' +
                    response.patient.patient_address +
                    '"/><div class="form-group col-md-6 removedata"><label for="file">File</label><input type="file" name="patient_profile" value="' +
                    response.patient.patient_profile + '"/>');
            }
        });
    });

    $('.deleteroomallotment').click(function() {
        var id = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            url: '{{ route('deleteroomallotment') }}',
            data: {
                'delete_id': id
            },
            success: function(response) {
                if (response = "success") {
                    alert("deleted successfully");
                    window.location.reload();
                }
            }
        });
    });

    $('.viewroomallotment').click(function() {
        var id = $(this).attr("data-id");
        $(".removedata").remove();
        $.ajax({
            type: "GET",
            url: '{{ route('getroomallotmentid') }}',
            data: {
                'appid': id
            },
            success: function(response) {
                $(".modal-body").append(
                    "<table class='table table-striped removedata'><tr><th>Patient ID</th><td>" +
                    response.appointment.appointment_name +
                    "</td></tr><tr><th>Department</th><td>" + response.department
                    .department_name + "</td></tr><tr><th>Doctor Name</th><td>" + response
                    .doctor.doctor_name + "</td></tr><tr><th>Appointment Date</th><td>" +
                    response.appointment.appointment_date +
                    "</td></tr><tr><th>Time Slot</th><td>" + response.appointment
                    .appointment_time_slot + "</td></tr><tr><th>Token Number</th><td>" +
                    response.appointment.appointment_token_number +
                    "</td></tr><tr><th>Problem</th><td>" + response.appointment
                    .appointment_problem + "</td></tr>");
            }

        });
    });
</script>
