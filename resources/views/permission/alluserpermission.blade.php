<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">All User Permission</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">All User Permission</li>
                <li class="breadcrumb-item active">All User Permission List</li>
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
                <a href="{{ route('permission') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">All User Permission List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Permission_Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permission as $permissions)
                                    <tr>
                                        <td>{{ $permissions->name }}</td>
                                        <td>{{ $permissions->permissionname }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger mt-3 mb-0 deleteuserpermission"
                                                data-id="{{ $permissions->id }}"><span class="ti-trash"></span>
                                                DELETE</button>
                                            <button type="button" class="btn btn-primary mt-3 mb-0 edituserpermission"
                                                data-toggle="modal" data-target="#exampleModal"
                                                data-id={{ $permissions->id }}><span class="ti-pencil-alt"></span>
                                                EDIT</button>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Users List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $('.edituserpermission').on('click', function() {
                var id = $(this).attr('data-id');
                $('.removedata').remove();
                $.ajax({
                        url: '{{ route('edituserpermission') }}',
                        type: "GET",
                        data: {
                            'edituserpermission': id
                        },
                        success: function(response) {
                            $('.modal-body').append('<form class="removedata"><div class="form-row"><div class="form-group col-md-6"><label for="role-id">Role_id</label><select class="form-control" id="role-id" name="role_id">@foreach ($permission as $permissions)<option value="{{ $permissions->id }}">{{ $permissions->name }}</option>@endforeach;</select></div> <div class="form-group col-md-6"><label for="permission-name">Permission_Name</label><input type="text" name="permissionname" placeholder="Permission Name"class="form-control" id="permission-name" value="'+response.permission.permissionname+'"></div></div></form>')
                        }

                });
            });

            $('.deleteuserpermission').on('click', function() {
                var id = $(this).attr('data-id');
                $('.removedata').remove();
                $.ajax({
                    url: '{{ route('deleteuserpermission') }}',
                    type: "GET",
                    data: {
                        'deleteuserpermission': id
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
