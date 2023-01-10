<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Pharmacy</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Pharmacy</li>
						<li class="breadcrumb-item active">Pharmacy List</li>
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
                        <?php if(session()->get('roleid') == '3'){ ?>
<a href="{{ route('addpharmacy') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
  <?php }?>
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Pharmacy List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Tablet Name</th>
											<th>Drug Name</th>
											<th>Department Name</th>
											<th>Expiry Date</th>
											<th>Inventory Count</th>
											<th>Price</th>
                                             <?php if(session()->get('roleid') == '3'){ ?>
                                            <th>Actions</th>
                                            <?php }?>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($pharmacy as $pharmacies)
                                        <tr>
											<td>{{ $pharmacies->tablet }}</td>
											<td>{{ $pharmacies->drug }}</td>
											<td>{{ $pharmacies->department_name }}</td>
											<td>{{ $pharmacies->expirydate }}</td>
                                            <td>{{ $pharmacies->inventoryname }}</td>
                                            <td>{{ $pharmacies->price }}</td>
											 <?php if(session()->get('roleid') == '3'){ ?><td>
                                                <button type="button" class="btn btn-danger mt-3 mb-0 deletepharmacy" data-id="{{ $pharmacies->id }}"><span class="ti-trash"></span> DELETE</button>
								                <button type="button" class="btn btn-primary mt-3 mb-0 editpharmacy" data-toggle="modal" data-target="#exampleModal" data-id={{ $pharmacies->id }}><span class="ti-pencil-alt"></span> EDIT</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pharmacy List</h5>
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
    $('.editpharmacy').on('click',function(){
     var id=$(this).attr('data-id');
     $('.removedata').remove();
     $.ajax({
        url:'{{ route('editpharmacy') }}',
        type:"get",
        data:{'editpharmacy':id},
         success:function(response){
              $('.modal-body').append('<form class="removedata"><div class="form-group col-md-6"><label for="Tablet Name">Tablet Name</label><input type="text" name="tablet" class="form-control" placeholder="Tablet Name" id="Tablet Name" value="'+response.pharmacy.tablet+'"></div><div class="form-group col-md-6"><label for="Drug Name">Drug Name</label><input type="text" name="drug" placeholder="Drug Name" class="form-control" id="Drug Name" value="'+response.pharmacy.drug+'"></div><div class="form-group col-md-6"><label for="department">Department Name</label><select class="form-control" id="department" name="department_id"><option> Select Option</option selected>@foreach ($pharmacy as $pharmacies)<option value="{{ $pharmacies->id }}">{{ $pharmacies->department_name }}</option>@endforeach</select></div>	<div class="form-group col-md-6"><label for="pharmacy-date">Expiry Date</label><input type="date" name="expirydate" placeholder="Pharmacy Date" class="form-control" id="pharmacy-date" value="'+response.pharmacy.expirydate+'"></div><div class="form-group col-md-6"><label for="Inventory Count">Inventory Count</label><input type="text" name="inventoryname" placeholder="Inventory Count" class="form-control" id="Inventory Count" value="'+response.pharmacy.inventoryname+'"></div><div class="form-group col-md-6"><label for="price">Price</label><input type="text" name="price" placeholder="Price" class="form-control" id="price" value="'+response.pharmacy.price+'"></div></form>')
         }
     });
    });

      $('.deletepharmacy').on('click',function(){
     var id=$(this).attr('data-id');
     $('.removedata').remove();
     $.ajax({
        url:'{{ route('deletepharmacy') }}',
        type:"GET",
        data:{'deletepharmacy':id},
         success:function(response){
            if(response="success"){
                alert("deleted successfully");
                 window.location.reload();
            }
         }
     });
    });
</script>
