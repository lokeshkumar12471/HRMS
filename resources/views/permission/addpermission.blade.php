<x-guest-layout>
    <!-- Page Content -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add New User Permission</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">User Permission</li>
                <li class="breadcrumb-item active">Add New User Permission</li>
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
                    <h3 class="widget-title">Add New User Permission</h3>
                    <form method="post" action="{{ route('addnewuserpermission') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role-id">Role_id</label>
                                <select class="form-control" id="role-id" name="role_id">
                                    @foreach ($permission as $permissions)
                                        <option value="{{ $permissions->id }}">{{ $permissions->name }}</option>
                                    @endforeach;
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="permission-name">Permission_Name</label>
                                <input type="text" name="permissionname" placeholder="Permission Name"
                                    class="form-control" id="permission-name">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Add New User Permission</button>
                        </div>
                </div>
                </form>
                <!-- Alerts-->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully Done!</strong> Please check in Allotment list
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- /Alerts-->
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
    </div>
    <!-- /Main Content -->
</x-guest-layout>
