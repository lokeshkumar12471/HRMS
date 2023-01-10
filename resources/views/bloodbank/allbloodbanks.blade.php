<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">BloodBanks</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">BloodBanks</li>
						<li class="breadcrumb-item active">BloodBanks List</li>
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
<a href="{{ route('addbloodbank') }}" class="btn btn-danger mt-3 mb-0 text-end">Add</a>
  <?php }?>
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">BloodBanks List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>BloodBank ID</th>
											<th>Blood Group</th>
											<th>Blood Quantity</th>
                                     <?php if(session()->get('roleid') == '3'){ ?>
											<th>Action</th>
                                             <?php } ?>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($bloodbank as $bloodbanks)
										<tr>
											<td>{{$bloodbanks->id }}</td>
                							<td>{{$bloodbanks->bloodgroup }}</td>
											<td>{{ $bloodbanks->bloodquantity }}</td>
                                             <?php if(session()->get('roleid') == '3'){ ?>
											<td><button type="button" class="btn btn-danger mt-3 mb-0 blooddelete" data-id={{ $bloodbanks->id }} ><span class="ti-trash"></span> DELETE</button>
								               <button type="button" class="btn btn-primary mt-3 mb-0 bloodedit" data-toggle="modal" data-id={{ $bloodbanks->id }} data-target="#exampleModal" ><span class="ti-pencil-alt"></span> EDIT</button></td>
                                            <?php } ?>
                                               @endforeach
                                        </tr>
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
        <h5 class="modal-title" id="exampleModalLabel">BloodBanks List</h5>
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
    $('.bloodedit').click(function(){
      var id=$(this).attr('data-id');
     $(".removeData").remove();
      $.ajax({
        type:'GET',
        url:'{{ route('editbloodbank') }}',
       data:{ 'edit_id':id },
        success:function(response){
       $('.modal-body').append('<div class="form-group col-md-6 removeData"><label for="bloodgroup">Blood Group</label><input type="text" class="form-control" name="bloodgroup" placeholder="Blood Group" value="'+response.bloodbank.bloodgroup+'" id="blood-group"></div> <div class="form-group col-md-6 removeData"><label for="bloodquantity">Blood Quantity</label><input type="text" class="form-control" name="bloodgrop" placeholder="Blood Quantity" value="'+response.bloodbank.bloodquantity+'" id="blood-quantity"></div>');
        }
      });
    });
     $('.blooddelete').click(function(){
      var id=$(this).attr('data-id');

      $.ajax({
        type:'GET',
        url:'{{ route('deletebloodbank') }}',
       data:{ 'delete_id':id },
        success:function(response){
            if(response="success")
            {
                alert("deleted successfully");
                window.location.reload();
            }
        }
      });
    });

</script>
