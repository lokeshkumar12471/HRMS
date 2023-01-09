<x-guest-layout>
    <!-- Page Content -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add New User</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">User Management</li>
                <li class="breadcrumb-item active">Add New User</li>
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
                    <h3 class="widget-title">Add New User</h3>
                    <form method="post" action="{{ route('addnewuser') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <select class="form-control" id="title" name="title">
                                    <option>Dr</option>
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Ms</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" placeholder="Enter Your First Name" class="form-control"
                                    id="firstname" name="firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" placeholder="Enter Your Last Name"
                                    class="form-control" id="lastname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="middlename">Middle Name </label>
                                <input type="text" name="middlename" placeholder="Enter Your Middle Name"
                                    class="form-control" id="middlename">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birthday">Birthday</label>
                                <input type="date" name="birthday" placeholder="Birthday" class="form-control"
                                    id="birthday">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birth-place">Birth Place</label>
                                <input type="text" name="birth_place" placeholder="birth-place" class="form-control"
                                    id="birth-place">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option>Female</option>
                                    <option>Male</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="civil-status">Civil_Status</label>
                                <select class="form-control" id="civil-status" name="civil_status">
                                    <option>Divorced</option>
                                    <option>Legal Seperated</option>
                                    <option>Married</option>
                                    <option>Single</option>
                                </select>
                            </div>



                            <div class="form-group col-md-6">
                                <label for="department">Department Name</label>
                                <select class="form-control" id="department" name="department_id">
                                    @foreach ($usermanagement as $usermanagements)
                                        <option value="{{ $usermanagements->id }}">
                                            {{ $usermanagements->department_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" placeholder="Designation" class="form-control"
                                    id="designation">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="user-role">User Role</label>
                                <input type="text" name="user_role" placeholder="User Role" class="form-control"
                                    id="user-role">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="house-no">House No.</label>
                                <input type="text" name="house_no" placeholder="House No" class="form-control"
                                    id="house-no">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="state">State</label>
                                <input type="text" name="state" placeholder="Enter Your State"
                                    class="form-control" id="state">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input type="text" name="city" placeholder="Enter Your city"
                                    class="form-control" id="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile-number">Mobile_Number</label>
                                <input type="text" name="mobile_number" placeholder="Enter Your Mobile Number"
                                    class="form-control" id="mobile-number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone-number">Phone_Number</label>
                                <input type="text" name="phone_number" placeholder="Enter Your Phone Number"
                                    class="form-control" id="phone-number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email-address">Email_Address</label>
                                <input type="text" name="email_address" placeholder="Enter Your Email Address"
                                    class="form-control" id="email-address">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="user-name">User_name</label>
                                <input type="text" name="username" placeholder="Enter Your User Name"
                                    class="form-control" id="user-name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Enter Your Password"
                                    class="form-control" id="password">
                            </div>

                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Add New User</button>
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
