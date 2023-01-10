<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">User Management</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">User Management</li>
                <li class="breadcrumb-item active">User List</li>
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
<?php
if(session()->get('roleid')=='3'){?>
<a href="{{ route('add') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
               <?php }?>
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">User List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Birthday</th>
                                    <th>Birth_Place</th>
                                    <th>Gender</th>
                                    <th>Civil Status</th>
                                    <th>Designation</th>
                                    <th>User Role</th>
                                    <th>House No.</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Mobile_Number</th>
                                    <th>Phone_Number</th>
                                    <th>Email_Address</th>
                                    <th>UserName</th>
                                    <th>Password</th>
                                      <?php if(session()->get('roleid') == '3'){ ?>
                                    <th>Actions</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usermanagement as $usermanagements)
                                    <tr>
                                        <td>{{ $usermanagements->department_name }}</td>
                                        <td>{{ $usermanagements->title }}</td>
                                        <td>{{ $usermanagements->firstname }}</td>
                                        <td>{{ $usermanagements->lastname }}</td>
                                        <td>{{ $usermanagements->middlename }}</td>
                                        <td>{{ $usermanagements->birthday }}</td>
                                        <td>{{ $usermanagements->birth_place }}</td>
                                        <td>{{ $usermanagements->gender }}</td>
                                        <td>{{ $usermanagements->civil_status }}</td>
                                        <td>{{ $usermanagements->designation }}</td>
                                        <td>{{ $usermanagements->user_role }}</td>
                                        <td>{{ $usermanagements->house_no }}</td>
                                        <td>{{ $usermanagements->state }}</td>
                                        <td>{{ $usermanagements->city }}</td>
                                        <td>{{ $usermanagements->mobile_number }}</td>
                                        <td>{{ $usermanagements->phone_number }}</td>
                                        <td>{{ $usermanagements->email_address }}</td>
                                        <td>{{ $usermanagements->username }}</td>
                                        <td>{{ $usermanagements->password }}</td>
                                      <?php if(session()->get('roleid') == '3'){ ?><td>
                                            <button type="button" class="btn btn-danger mt-3 mb-0 deleteusermanagement"
                                                data-id="{{ $usermanagements->id }}"><span class="ti-trash"></span>
                                                DELETE</button>
                                            <button type="button" class="btn btn-primary mt-3 mb-0 editusermanagement"
                                                data-toggle="modal" data-target="#exampleModal"
                                                data-id={{ $usermanagements->id }}><span class="ti-pencil-alt"></span>
                                                EDIT</button>
                                                </td>
                                        <?php } ?>
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
    $('.editusermanagement').on('click', function() {
        var id = $(this).attr('data-id');
        $('.removedata').remove();
        $.ajax({
            url: '{{ route('editusermanagement') }}',
            type: "GET",
            data: {
                'editusermanagement': id
            },
            success: function(response) {
                $('.modal-body').append('<form class="removedata"><div class="form-row"><div class="form-group col-md-6"><label for="title">Title</label><select class="form-control" id="title" name="title"><option>Dr</option><option>Mr</option><option>Mrs</option><option>Ms</option></select></div><div class="form-group col-md-6"><label for="firstname">First Name</label><input type="text" placeholder="Enter Your First Name" class="form-control" id="firstname" name="firstname" value="'+response.usermanagement.firstname +'"></div>  <div class="form-group col-md-6"><label for="lastname">Last Name</label><input type="text" name="lastname" placeholder="Enter Your Last Name"class="form-control" id="lastname" value="'+response.usermanagement.lastname+'"></div> <div class="form-group col-md-6"><label for="middlename">Middle Name</label><input type="text" name="middlename" placeholder="Enter Your Middle Name"  class ="form-control"   id= "middlename" value = "'+response.usermanagement.middlename+'" ></div><div class ="form-group col-md-6"><label for ="birthday"> Birthday</label> <input type ="date" name="birthday" placeholder = "Birthday"class = "form-control" id="birthday" value="'+response.usermanagement.birthday+'" ></div> <div class ="form-group col-md-6"><label for="birth-place"> Birth Place </label> <input type="text" name="birth_place" placeholder="birth-place" class="form-control" id="birth-place" value="'+response.usermanagement.birth_place+'"></div> <div class="form-group col-md-6"><label for ="gender">Gender</label> <select class = "form-control" id ="gender" name="gender"><option>Female</option> <option>Male</option> <option>Others</option> </select> </div><div class = "form-group col-md-6"><label for = "civil-status">Civil_Status </label><select class = "form-control" id = "civil-status" name = "civil_status"><option>Divorced</option><option> Legal Seperated</option><option>Married</option><option> Single </option></select></div><div class="form-group col-md-6"><label for="department">Department Name </label><select class = "form-control"id = "department"  name="department_id">@foreach ($usermanagement as $usermanagements)<option value = "{{ $usermanagements->id }}"> {{ $usermanagements->department_name }}</option>@endforeach</select></div><div class = "form-group col-md-6"><label for="designation">Designation</label> <input type = "text" name = "designation" placeholder = "Designation" class = "form-control" id = "designation" value="'+response.usermanagement.designation+'"></div><div class = "form-group col-md-6"><label for = "user-role" > User Role </label> <input type = "text" name="user_role" placeholder="User Role" class ="form-control" id="user-role" value="'+response.usermanagement.user_role+'"></div><div class = "form-group col-md-6"><label for = "house-no" > House No. </label> <input type = "text"  name = "house_no" placeholder = "House No" class = "form-control" id="house-no" value="'+response.usermanagement.house_no+'"></div> <div class = "form-group col-md-6"><label for = "state"> State </label> <input type = "text" name = "state" placeholder = "Enter Your State" class = "form-control" id="state" value="'+response.usermanagement.state+'"></div> <div class="form-group col-md-6"><label for="city">City</label> <input type = "text"name = "city" placeholder = "Enter Your city" class = "form-control" id = "city" value="'+response.usermanagement.city+'"></div> <div class = "form-group col-md-6"> <label for = "mobile-number"> Mobile_Number</label> <input type = "text" name = "mobile_number" placeholder = "Enter Your Mobile Number" class = "form-control" id = "mobile-number" value="'+response.usermanagement.mobile_number+'"></div> <div class = "form-group col-md-6"><label for = "phone-number" > Phone_Number </label> <input type = "text"name = "phone_number"placeholder = "Enter Your Phone Number" class="form-control" id = "phone-number" value="'+response.usermanagement.phone_number+'"></div> <div class = "form-group col-md-6" ><label for = "email-address" > Email_Address </label> <input type = "text" name = "email_address" placeholder = "Enter Your Email Address" class = "form-control" id="email-address" value="'+response.usermanagement.email_address+'"></div> <div class = "form-group col-md-6"><label for="user-name">User_name</label> <input type = "text" name = "username" placeholder="Enter Your User Name" class="form-control" id="user-name" value="'+response.usermanagement.username+'"></div> <div class = "form-group col-md-6"><label for = "password"> Password</label><input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="password" value="'+response.usermanagement.password+'"></div></div>')}
        });
    });
    $('.deleteusermanagement').on('click', function() {
        var id = $(this).attr('data-id');
        $('.removedata').remove();
        $.ajax({
            url: '{{ route('deleteusermanagement') }}',
            type: "GET",
            data: {
                'deleteusermanagement': id
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
