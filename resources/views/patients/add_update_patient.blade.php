<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            @if (isset($patient->id) != '')
                <h3 class="block-title">Update Patient</h3>
            @else
                <h3 class="block-title">Add Patient</h3>
            @endif
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Patients</li>
                @if (isset($patient->id) != '')
                    <li class="breadcrumb-item active">Update Patient</li>
                @else
                    <li class="breadcrumb-item active">Add Patient</li>
                @endif
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
                    @if (isset($patient->id) != '')
                        <h3 class="widget-title">Update Patient</h3>
                    @else
                        <h3 class="widget-title">Add Patient</h3>
                    @endif
                    <form
                        @if (isset($patient->id) != '') action="{{ route('patientupdate', $patient->id) }}" @else action="{{ route('patientstore') }}" @endif
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="department_id">Department_Name</label>
                                <select name="department_id" class="form-control" id="dept">
                                    @if ($patient->id != '')
                                        <option value="{{ $department->id }}" style="background-color:grey">
                                            {{ $department->department_name }} </option>
                                    @endif
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Doctor Name</label>
                                <select name="doctor_id" class="form-control doctors" id="doctor_id">
                                    @if ($patient->id != '')
                                        <option value="{{ $doctor->id }}"style="background-color:grey">
                                            {{ $doctor->doctor_name }} </option>
                                    @endif

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient Name</label>
                                <input type="text" name="patient_name"
                                    @if ($patient->id != '') value="{{ $patient->patient_name }}" class="form-control" placeholder="Patient name" id="patient-name" @endif>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" name="patient_date_of_birth"
                                    @if (isset($patient->id) != '') value="{{ $patient->patient_date_of_birth }}" @endif
                                    placeholder="Date of Birth" class="form-control" id="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" name="patient_age"
                                    @if (isset($patient->id) != '') value="{{ $patient->patient_age }}" @endif
                                    placeholder="Age" class="form-control" id="age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="patient_phone"
                                    @if (isset($patient->id) != '') value="{{ $patient->patient_phone }}" @endif
                                    placeholder="Phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="patient_email"
                                    @if (isset($patient->id) != '') value="{{ $patient->patient_email }}" @endif
                                    placeholder="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select name="patient_gender" class="form-control" id="gender">
                                    @if (isset($patient->id) != '')
                                        value="{{ $patient->patient_gender }}"
                                    @endif
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea name="patient_address"
                                    @if (isset($patient->id) != '') placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $patient->patient_address }}</textarea> @endif
                                    </div>
                            <div class="form-group col-md-12">
                                <label for="file">File</label>
                                <input type="file" name="patient_profile" class="form-control" id="file">
                                @if (isset($patient->id) != '')
<img src="{{ asset('uploads/patient/' . $patient->patient_profile) }}"
                                        name="patient_profile" width="100" heigth="100">
@endif
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                @if (isset($patient->id) != '')
<button type="submit" class="btn btn-primary btn-lg">Update</button>
@else
<button type="submit" class="btn btn-primary btn-lg">Submit</button>
@endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $('#dept').change(function() {
        var id = $(this).val();
        $(".removedata").remove();
        $.ajax({
            type: "GET",
            url: '{{ route('getpatientbydept') }}',
            data: {
                'deptid': id
            },
            success: function(response) {
                for (const items of response.Doctor) {
                    $(".doctors").append("<option value='" + items.id + "' class='removedata'>" +
                        items.doctor_name + "</option>");
                }
            }

        });
    });
</script>
