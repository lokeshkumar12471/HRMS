<x-guest-layout>
    <!-- Page Content -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Room Allotment</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Room Allotments</li>
                <li class="breadcrumb-item active">Add Room Allotment</li>
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
                    <h3 class="widget-title">Add Room Allotment</h3>
                    <form method="post" action="{{ route('storeroomallotment') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="room-number">Room No./Ward.No</label>
                                <input type="text" class="form-control" placeholder="Room Number" id="room-number"
                                    name="roomnumber">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="room-type">Room Type</label>
                                <select class="form-control" id="room-type" name="roomtype">
                                    <option>ICU</option>
                                    <option>General</option>
                                    <option>AC Room</option>
                                    <option>Twin Sharing Room</option>
                                    <option>Single Room</option>
                                    <option>Single Deluxe Room</option>
                                    <option>Super Deluxe Room</option>
                                    <option>Suite</option>
                                    <option>Multibed Ward</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="room-type">Floor</label>
                                <select class="form-control" id="room-type" name="roomfloor">
                                    <option>Ground Floor</option>
                                    <option>1st Floor</option>
                                    <option>2nd Floor</option>
                                    <option>3rd Floor</option>
                                    <option>4th Floor</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="room-rate">Room Rate</label>
                                <input type="text" placeholder="Room Rate" class="form-control" id="room-rate"
                                    name="roomrate">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient Name</label>
                                <input type="text" name="patientname" placeholder="Patient Name" class="form-control"
                                    id="patient-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="allotment-date">Allotment Date</label>
                                <input type="date" name="allotmentdate" placeholder="Allotment Date"
                                    class="form-control" id="allotment-date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="discharge-date">Discharge Date</label>
                                <input type="date" name="dischargedate" placeholder="Discharge Date"
                                    class="form-control" id="discharge-date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor-name">Doctor Name</label>
                                <select class="form-control" id="doctor-name" name="doctor_id">
                                    <option>Select Doctor</option>
                                    @foreach ($roomallotment as $roomallotments)
                                        <option value="{{ $roomallotments->id }}">{{ $roomallotments->doctor_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="total-beds">Total Beds</label>
                                <input type="text" name="totalbeds" placeholder="Total Beds" class="form-control"
                                    id="total-beds">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="occupied-beds">Occupied Beds</label>
                                <input type="text" name="occupiedbeds" placeholder="Occupied Beds"
                                    class="form-control" id="occupied-beds">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="unoccupied-beds">UnOccupied Beds</label>
                                <input type="text" name="unoccupiedbeds" placeholder="UnOccupied Beds"
                                    class="form-control" id="unoccupied-beds">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Allot Room</button>
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
