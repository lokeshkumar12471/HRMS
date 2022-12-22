<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Departments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Departments</li>
                <li class="breadcrumb-item active">Departments List</li>
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
                <a href="{{ route('departmentcreate') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Departments List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Department ID</th>
                                    <th>Department Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($department as $departments)
                                    <td>{{ $departments->id }}</td>
                                    <td>{{ $departments->department_name }}</td>
                                    <td><a href="{{ route('departmentdelete', $departments->id) }}"><button
                                                type="button" class="btn btn-danger mt-3 mb-0"><span
                                                    class="ti-trash"></span> DELETE</button></a>
                                        <a href="{{ route('departmentedit', $departments->id) }}"><button type="button"
                                                class="btn btn-success mt-3 mb-0"><span class="ti-trash"></span>
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
