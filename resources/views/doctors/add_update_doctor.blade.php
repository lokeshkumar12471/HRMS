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
                    @if (isset($doctor->id) != '')
                        <h3 class="widget-title">Update Doctor</h3>
                    @else
                        <h3 class="widget-title">Add Doctor</h3>
                    @endif
                    <form
                        @if (isset($doctor->id) != '') action="{{ route('doctorupdate', $doctor->id) }}"  @else action="{{ route('doctorstore') }}" @endif
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Doctor-name">Doctor Name</label>
                                <input type="text" name="doctor_name"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_name }}" @endif
                                    class="form-control" placeholder="Doctor name" id="Doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Department Name</label>
                                <select class="form-control" name="department_id">
                                    <option value="">Select Option</option>
                                    @foreach ($department as $departments)
                                        <option value="{{ $departments->id }}">{{ $departments->department_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" name="doctor_date_of_birth"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_date_of_birth }}" @endif
                                    placeholder="Date of Birth" class="form-control" id="dob">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="specialization">Specialization</label>
                                <input type="text" name="specialization"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->specialization }}" @endif
                                    placeholder="Specialization" class="form-control" id="specialization">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="experience">Experience</label>
                                <input type="text" name="doctor_experience"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_experience }}" @endif
                                    placeholder="Experience" class="form-control" id="experience">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" name="doctor_age"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_age }}" @endif
                                    placeholder="Age" class="form-control" id="age">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="doctor_phone"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_phone }}" @endif
                                    placeholder="Phone" class="form-control" id="phone">


                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="doctor_email"
                                    @if (isset($doctor->id) != '') value="{{ $doctor->doctor_email }}" @endif
                                    placeholder="email" class="form-control" id="Email">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="doctor_gender" id="gender">
                                    @if (isset($doctor->id) != '')
                                        value="{{ $doctor->doctor_gender }}"
                                    @endif
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="about-doctor">Doctor Details</label>
                                <textarea placeholder="Doctor Details" name="doctor_details" class="form-control" id="about-doctor" rows="3">
                                    @if (isset($doctor->id) != '')
{{ $doctor->doctor_details }}
@endif
</textarea>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea placeholder="Address" name="doctor_address" class="form-control" id="address" rows="3"> @if (isset($doctor->id) != '')
{{ $doctor->doctor_address }}
@endif </textarea>

                            </div>

                            <div class="form-group col-md-12">
                                <label for="file">File</label>
                                <input type="file" name="doctor_profile" class="form-control" id="file"
                                    @if (isset($doctor->id) != '') >
                                    <img src="{{ asset('uploads/doctor/' . $doctor->doctor_profile) }}"
                                                height="100" width="100"> @endif
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
