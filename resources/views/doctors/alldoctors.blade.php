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
                                        <td>{{ $doctors->department_name }}</td>
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
                                            {{-- <a href="{{ route('doctoredit', $doctors->id) }}"><button type="button"
                                                    class="btn btn-success mt-3 mb-0"><span class="ti-pencil-alt"></span>
                                                    EDIT</button></a> --}}
<button type="button" class="btn btn-success mt-3 mb-0 editApp" data-id="{{ $doctors->id }}" data-toggle="modal" data-target="#exampleModal">
<span class="ti-pencil-alt"></span>Edit
</button>
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




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctors List</h5>
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

   $('.editApp').click(function(){
    var id=$(this).attr('data-id');
     $(".removedata").remove();
   $.ajax({
      type:'GET',
   url: '{{ route('getdoctorbyid')}}',
      data:{ 'editapp':id },
      success:function(response){
         $('.modal-body').append('<div class="form-group col-md-6 removedata"><label for="Doctor-name">Doctor Name</label><input type="text" name="doctor_name" value="'+response.doctor.doctor_name+'"/><div class="form-group col-md-6 removedata"><label for="dob">Date Of Birth</label><input type="date" name="doctor_date_of_birth" value="'+response.doctor.doctor_date_of_birth+'"/><div class="form-group col-md-6 removedata"><label for="specialization">Specialization</label><input type="text" name="specialization" value="'+response.doctor.specialization+'"/><div class="form-group col-md-6 removedata"><label for="experience">Experience</label><input type="text" name="doctor_experience" value="'+response.doctor.doctor_experience+'"/><div class="form-group col-md-6 removedata"><label for="age">Age</label><input type="text" name="doctor_age" value="'+response.doctor.doctor_age+'"/><div class="form-group col-md-6 removedata"><label for="phone">Phone</label><input type="text" name="doctor_phone" value="'+response.doctor.doctor_phone+'"/><div class="form-group col-md-6 removedata"><label for="email">Email</label><input type="text" name="doctor_email" value="'+response.doctor.doctor_email+'"/><div class="form-group col-md-6 removedata"><label for="about-doctor">Doctor Details</label><input type="text" name="doctor_details" value="'+response.doctor.doctor_details+'"/><div class="form-group col-md-6 removedata"><label for="address">Address</label><input type="text" name="doctor_address" value="'+response.doctor.doctor_address+'"/><div class="form-group col-md-6 removedata"><label for="file">File</label><input type="file" name="doctor_profile" value="'+response.doctor.doctor_profile+'"/>' );
            }
   });
   });
</script>
