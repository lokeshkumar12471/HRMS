<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Doctors</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Doctors</li>
                <li class="breadcrumb-item active">All Doctors</li>
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
                <a href="{{ route('doctorcreate') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Doctors List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Doctor ID</th>
                                    <th>Doctor Name</th>
                                    <th>Department Name</th>
                                    <th>Doctor (DOB)</th>
                                    <th>Specialization</th>
                                    <th>Experience <small>(in Years)</small></th>
                                    <th>Doctor Age</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Doctor Details</th>
                                    <th>Doctor Address</th>
                                    <th>Doctor Profile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctor as $doctors)
                                    <tr>
                                        <td>{{ $doctors->id }}</td>
                                        <td>{{ $doctors->doctor_name }}</td>
                                        <td>{{ $doctors->department_id }}</td>
                                        <td>{{ $doctors->doctor_date_of_birth }}</td>
                                        <td>{{ $doctors->specialization }}</td>
                                        <td>{{ $doctors->doctor_experience }}</td>
                                        <td>{{ $doctors->doctor_age }}</td>
                                        <td>{{ $doctors->doctor_phone }}</td>
                                        <td>{{ $doctors->doctor_email }}</td>
                                        <td>{{ $doctors->doctor_gender }}</td>
                                        <td>{{ $doctors->doctor_details }}</td>
                                        <td>{{ $doctors->doctor_address }}</td>
                                        <td><img src="{{ asset('uploads/doctor/' . $doctors->doctor_profile) }}"
                                                height="100" width="100"></td>

                                        <td><a href="{{ route('doctordelete', $doctors->id) }}"><button type="button"
                                                    class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span>
                                                    DELETE</button></a>
                                            <a href="{{ route('doctoredit', $doctors->id) }}"><button type="button"
                                                    class="btn btn-success mt-3 mb-0"><span class="ti-pencil-alt"></span>
                                                    EDIT</button></a>
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
