<x-guest-layout>
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Room Allotments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Room Allotments</li>
                <li class="breadcrumb-item active">All Allotments</li>
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
                    <h3 class="widget-title">Room Allotments List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Room Allotment Id</th>
                                    <th>Room Allotment No.</th>
                                    <th>Room Type</th>
                                    <th>Floor</th>
                                    <th>Room Rate</th>
                                    <th>Patient Name</th>
                                    <th>Allotment Date</th>
                                    <th>Discharge Date</th>
                                    <th>Doctor Name</th>
                                    <th>Total Beds</th>
                                    <th>Occupied Beds</th>
                                    <th>UnOccupied Beds</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomallotment as $roomallotments)
                                    <tr>
                                        <td>{{ $roomallotments->id }}</td>
                                        <td>{{ $roomallotments->roomnumber }}</td>
                                        <td>{{ $roomallotments->roomtype }}</td>
                                        <td>{{ $roomallotments->roomfloor }}</td>
                                        <td>{{ $roomallotments->roomrate }}</td>
                                        <td>{{ $roomallotments->patientname }}</td>
                                        <td>{{ $roomallotments->allotmentdate }}</td>
                                        <td>{{ $roomallotments->dischargedate }}</td>
                                        <td>{{ $roomallotments->doctor_name }}</td>
                                        <td>{{ $roomallotments->totalbeds }}</td>
                                        <td>{{ $roomallotments->occupiedbeds }}</td>
                                        <td>{{ $roomallotments->unoccupiedbeds }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-danger mt-3 mb-0 deleteroomallotment" data-id="{{ $roomallotments->id }}" data-toggle="modal" data-target="#exampleModal"><span
                                                    class="ti-trash"></span>
                                                DELETE</button>
                                            <button type="button"
                                                class="btn btn-success mt-3 mb-0 editroomallotment" data-id="{{ $roomallotments->id }}" data-toggle="modal" data-target="#exampleModal"><span
                                                    class="ti-pencil-alt"></span>
                                                EDIT</button>
                                            <button type="button"
                                                class="btn btn-primary mt-3 mb-0 viewroomallotment" data-id="{{ $roomallotments->id }}" data-toggle="modal" data-target="#exampleModal"><span
                                                    class="ti-pencil-alt"></span>
                                                View</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Room Allotment List</h5>
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
    $('.editroomallotment').click(function() {
        var id = $(this).attr('data-id');
        $(".removedata").remove();

        $.ajax({
            type: 'GET',
            url: '{{ route('editroomallotment') }}',
            data: {
                'edit_id': id
            },
            success: function(response) {
                $('.modal-body').append('<div class="form-row removedata"><div class="form-group col-md-6"><label for="room-number">Room No./Ward.No</label><input type="text" class="form-control" placeholder="Room Number" id="room-number" name="roomnumber" value="'+response.roomallotment.roomnumber+'"></div> <div class="form-group col-md-6"><label for="room-type">Room Type</label><select class="form-control" id="room-type" name="roomtype" value="'+response.roomallotment.roomtype+'"><option>ICU</option><option>General</option><option>AC Room</option><option>Twin Sharing Room</option> <option>Single Room</option> <option>Single Deluxe Room</option> <option>Super Deluxe Room</option>  <option>Suite</option><option>Multibed Ward</option> </select></div><div class="form-group col-md-6"><label for="room-type">Floor</label><select class="form-control" id="room-type" name="roomfloor" value="'+response.roomallotment.roomfloor+'"><option>Ground Floor</option><option>1st Floor</option><option>2nd Floor</option><option>3rd Floor</option><option>4th Floor</option></select></div>  <div class="form-group col-md-6"><label for="room-rate">Room Rate</label><input type="text" placeholder="Room Rate" class="form-control" id="room-rate"name="roomrate" value="'+response.roomallotment.roomrate+'"></div><div class="form-group col-md-6"><label for="patient-name">Patient Name</label><input type="text" name="patientname" placeholder="Patient Name" class="form-control"id="patient-name" value="'+response.roomallotment.patientname+'"></div>  <div class="form-group col-md-6"><label for="allotment-date">Allotment Date</label><input type="date" name="allotmentdate" placeholder="Allotment Date"class="form-control" id="allotment-date" value="'+response.roomallotment.allotmentdate+'"></div>   <div class="form-group col-md-6"><label for="discharge-date">Discharge Date</label><input type="date" name="dischargedate" placeholder="Discharge Date"class="form-control" id="discharge-date" value="'+response.roomallotment.dischargedate+'"></div>    <div class="form-group col-md-6"><label for="doctor-name">Doctor Name</label><select class="form-control" id="doctor-name" name="doctor_id"><option>Select Doctor</option>@foreach ($roomallotment as $roomallotments)<option value="{{ $roomallotments->id }}">{{ $roomallotments->doctor_name }}</option>@endforeach</select></div><div class="form-group col-md-6"> <label for="total-beds">Total Beds</label><input type="text" name="totalbeds" placeholder="Total Beds" class="form-control"id="total-beds" value="'+response.roomallotment.totalbeds+'"></div><div class="form-group col-md-6"><label for="occupied-beds">Occupied Beds</label><input type="text" name="occupiedbeds" placeholder="Occupied Beds"class="form-control" id="occupied-beds" value="'+response.roomallotment.occupiedbeds+'"></div><div class="form-group col-md-6"><label for="unoccupied-beds">UnOccupied Beds</label><input type="text" name="unoccupiedbeds" placeholder="UnOccupied Beds"class="form-control" value="'+response.roomallotment.unoccupiedbeds+'" id="unoccupied-beds"> </div></div>');}});
    });
    $('.deleteroomallotment').click(function() {
        var id = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            url: '{{ route('deleteroomallotment') }}',
            data: {
                'delete_id': id
            },
            success: function(response) {
                if (response = "success") {
                    alert("deleted successfully");
                    window.location.reload();
                }
            }
        });
    });

    $('.viewroomallotment').click(function() {
        var id = $(this).attr("data-id");
        $(".removedata").remove();
        $.ajax({
            type: "GET",
            url: '{{ route('getroomallotmentid') }}',
            data: {
                'viewroomallotment': id
            },
            success: function(response) {
                $(".modal-body").append(
                   '<table id="tableId" class="table table-bordered table-striped removedata"><tr><th>Room Allotment Id</th><td>'+response.roomallotment.id+'</td></tr><tr><th>Room Allotment No.</th><td>'+response.roomallotment.roomnumber+'</td></tr><tr><th>Room Type</th><td>'+response.roomallotment.roomtype+'</td></tr><tr><th>Floor</th><td>'+response.roomallotment.roomfloor+'</td></tr><tr><th>Room Rate</th><td>'+response.roomallotment.roomrate+'</td></tr><tr><th>Patient Name</th><td>'+response.roomallotment.patientname+'</td></tr><tr><th>Allotment Date</th><td>'+response.roomallotment.allotmentdate+'<td></tr><tr><th>Discharge Date</th><td>'+response.roomallotment.dischargedate+'</td></tr><tr><th>Doctor Name</th><td>'+response.roomallotment.doctor_name+'</td></tr><tr><th>Total Beds</th><td>'+response.roomallotment.totalbeds+'</td></tr><tr><th>Occupied Beds</th><td>'+response.roomallotment.occupiedbeds+'</td></tr><tr><th>UnOccupied Beds</th><td>'+response.roomallotment.unoccupiedbeds+'</td></tr></table>');
            }

        });
    });
</script>
