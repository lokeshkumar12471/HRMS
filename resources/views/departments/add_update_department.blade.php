<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Department</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Departments</li>
                <li class="breadcrumb-item active">Add Department</li>
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
                    @if (isset($department->id) != '')
                        <h3 class="widget-title">Update Department</h3>
                    @else
                        <h3 class="widget-title">Add Department</h3>
                    @endif
                    <form
                        @if (isset($department->id) != '') action="{{ route('departmentupdate', $department->id) }}"  @else action="{{ route('departmentstore') }}" @endif
                        method="POST"> @csrf <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">Department Name</label>
                                <input type="text"
                                    @if (isset($department->id) != '') value="{{ $department->department_name }}" @endif
                                    name="department_name" class="form-control" placeholder="Department Name"
                                    id="patient-id">
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                @if (isset($department->id) != '')
                                    <button type="submit" class="btn btn-danger mt-3 mb-0">Update</button>
                                @else
                                    <button type="submit" class="btn btn-danger mt-3 mb-0">Submit</button>
                                @endif
                            </div>
                        </div>
                    </form>
                    @if (session()->has('Successfull'))
                        <div class="alert alert-success">{{ session()->get('Successfull') }}</div>
                    @endif
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    <!-- /Main Content -->
</x-guest-layout>
