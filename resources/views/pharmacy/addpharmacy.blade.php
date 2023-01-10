<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Pharmacy</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Pharmacy</li>
						<li class="breadcrumb-item active">Add Pharmacy</li>
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
							<h3 class="widget-title">Add Pharmacy</h3>
							<form method="post" action="{{route('pharmacy')}}">
                               @csrf
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Tablet Name">Tablet Name</label>
										<input type="text" name="tablet" class="form-control" placeholder="Tablet Name" id="Tablet Name">
									</div>

									<div class="form-group col-md-6">
										<label for="Drug Name">Drug Name</label>
										<input type="text" name="drug" placeholder="Drug Name" class="form-control" id="Drug Name">
									</div>
                                    	<div class="form-group col-md-6">
										<label for="department">Department Name</label>
										<select class="form-control" id="department" name="department_id">
                                            <option> Select Option</option selected>
                                            @foreach ($pharmacy as $pharmacies)
                                           <option value="{{ $pharmacies->id }}">{{ $pharmacies->department_name }}</option>
                                            @endforeach
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="pharmacy-date">Expiry Date</label>
										<input type="date" name="expirydate" placeholder="Pharmacy Date" class="form-control" id="pharmacy-date">
									</div>
									<div class="form-group col-md-6">
										<label for="Inventory Count">Inventory Count</label>
                                    	<input type="text" name="inventoryname" placeholder="Inventory Count" class="form-control" id="Inventory Count">
									</div>
									<div class="form-group col-md-6">
										<label for="price">Price</label>
										<input type="text" name="price" placeholder="Price" class="form-control" id="price">
									</div>

									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Pharmacy token Generated
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
