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
                <?php if(session()->get('roleid') == '3'){ ?>
<a href="{{ route('patientcreate') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
  <?php }?>
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
                                    <?php if(session()->get('roleid')=='3'){?>
                                    <th>Actions</th>
                                    <?php }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patient as $patients)
                                    <tr>
                                        <td>{{ $patients->id }}</td>
                                        <td>{{ $patients->department_name }}</td>
                                        <td>{{ $patients->doctor_name }}</td>
                                        <td>{{ $patients->patient_name }}</td>
                                        <td>{{ $patients->patient_date_of_birth }}</td>
                                        <td>{{ $patients->patient_age }}</td>
                                        <td>{{ $patients->patient_phone }}</td>
                                        <td>{{ $patients->patient_email }}</td>
                                        <td>{{ $patients->patient_gender }}</td>
                                        <td>{{ $patients->patient_address }}</td>
                                        <td><img src="{{ asset('uploads/patient/' . $patients->patient_profile) }}"
                                                height="100" width="100"></td>

                                                   <?php if(session()->get('roleid') == '3'){ ?>
                                        <td>
                                            <a href="{{ route('patientdetails', $patients->id) }}"><button
                                                    type="button" class="btn btn-primary mt-3 mb-0"><span
                                                        class="ti-pencil-alt"></span>
                                                    History</button></a>
                                                    <button type="button"
                                                class="btn btn-danger mt-3 mb-0 patientdelete"
                                                data-id="{{ $patients->id }}"><span class="ti-trash"></span>
                                                DELETE</button>
                                            <button type="button" class="btn btn-success mt-3 mb-0 editApp"
                                                data-id="{{ $patients->id }}" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <span class="ti-pencil-alt"></span>Edit
                                            </button>

                                          </td>
                                            <?php } ?>
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









    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Patients List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

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

    $('.patientdelete').click(function() {
        var id = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            url: '{{ route('patientdelete') }}',
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
</script>
