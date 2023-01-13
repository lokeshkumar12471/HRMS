<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <?php if(session()->get('roleid')=='3') {?>
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Quick Statistics</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid home">
        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-red">
                    <div class="widget-left">
                        <span class="ti-user"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Patients</h4>
                        <span class="numeric color-red">348</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +20% Increased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-green">
                    <div class="widget-left">
                        <span class="ti-bar-chart"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Appointments</h4>
                        <span class="numeric color-green">1585</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-yellow">
                    <div class="widget-left">
                        <span class="ti-money"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Total Revenue</h4>
                        <span class="numeric color-yellow">$7300</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +10% Increased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments Year by Year</h3>
                    <div id="lineMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title"> Patients Year by Year</h3>
                    <div id="barMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Doctor</th>
                                    <th>Check-Up</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rajesh</td>
                                    <td>Manoj Kumar</td>
                                    <td>Dental</td>
                                    <td>12-10-2018</td>
                                    <td>12:10PM</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Riya</td>
                                    <td>Daniel </td>
                                    <td>Ortho</td>
                                    <td>12-10-2018</td>
                                    <td>1:10PM</td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Siri</td>
                                    <td>Daniel </td>
                                    <td>Ortho</td>
                                    <td>12-10-2018</td>
                                    <td>1:30PM</td>
                                    <td>
                                        <span class="badge badge-danger">Cancelled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rajesh</td>
                                    <td>Manoj Kumar</td>
                                    <td>Dental</td>
                                    <td>12-10-2018</td>
                                    <td>12:10PM</td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Riya</td>
                                    <td>Daniel </td>
                                    <td>Ortho</td>
                                    <td>12-10-2018</td>
                                    <td>1:10PM</td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Siri</td>
                                    <td>Daniel </td>
                                    <td>Ortho</td>
                                    <td>12-10-2018</td>
                                    <td>1:30PM</td>
                                    <td>
                                        <span class="badge badge-danger">Cancelled</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>

        <div class="row">
            <!-- Widget Item -->
            <div class="col-sm-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments Status</h3>
                    <div id="donutMorris" class="chart-home"></div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 progress-status proclinic-box-shadow">
                    <h3 class="widget-title">Doctors Availability</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Speciality</th>
                                    <th>Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rajesh</td>
                                    <td>Dental</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Riya</td>
                                    <td>Ortho</td>
                                    <td>
                                        <span class="badge badge-warning">On Leave</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Siri</td>
                                    <td>Skin</td>
                                    <td>
                                        <span class="badge badge-danger">Not Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rajesh</td>
                                    <td>Dental</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /Widget Item -->

        </div>
    </div>
    <?php } ?>
    <?php if(session()->get('roleid')=='2'){?>
    <!-- Widget Item -->
    <div class="col-md-6">
        <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Doctor Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td><strong>Name</strong></td>
                            <td>{{ $doctor[0]->doctor_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Date Of Birth</strong> </td>
                            <td>{{ $doctor[0]->doctor_date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td><strong>Gender</strong></td>
                            <td>{{ $doctor[0]->doctor_gender }}</td>
                        </tr>
                        <tr>
                            <td><strong>Address</strong></td>
                            <td>{{ $doctor[0]->doctor_address }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone </strong></td>
                            <td>{{ $doctor[0]->doctor_phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{ $doctor[0]->doctor_email }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit
                Doctor</button>
        </div>
    </div>
    <!-- /Widget Item -->
    <?php }?>

    <?php if(session()->get('roleid')=='1'){?>
    <!-- Widget Item -->
    <div class="col-md-6">
        <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Patient Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td><strong>Name</strong></td>
                            <td>{{ $patients[0]->patient_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Date Of Birth</strong> </td>
                            <td>{{ $patients[0]->patient_date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td><strong>Gender</strong></td>
                            <td>{{ $patients[0]->patient_gender }}</td>
                        </tr>
                        <tr>
                            <td><strong>Address</strong></td>
                            <td>{{ $patients[0]->patient_address }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone </strong></td>
                            <td>{{ $patients[0]->patient_phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{ $patients[0]->patient_email }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit
                Patient</button>
        </div>
    </div>
    <!-- /Widget Item -->
    <?php }?>
    <!-- /Main Content -->
</x-guest-layout>
