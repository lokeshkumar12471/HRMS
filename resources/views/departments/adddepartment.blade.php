<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Department</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Departments</li>
						<li class="breadcrumb-item active">Add Department</li>
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
							<h3 class="widget-title">Add Department</h3>
							<form method="post" action="{{ route('store') }}">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Department Name</label>
										<input type="text"  name="department_name" class="form-control" placeholder="Department Name" id="patient-id">
									</div>

									<div class="form-group col-md-12 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>
