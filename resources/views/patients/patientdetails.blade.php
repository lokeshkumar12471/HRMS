<x-guest-layout>
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Patient Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Patient Details</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Details</h3>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>


										<tr>
											<td><strong>Name</strong></td>
											<td>{{$patients->patient_name}}</td>
										</tr>
										<tr>
											<td><strong>Date Of Birth</strong> </td>
												<td>{{$patients->patient_date_of_birth}}</td>
										</tr>
										<tr>
											<td><strong>Gender</strong></td>
											<td>{{ $patients->patient_gender }}</td>
										</tr>
										<tr>
											<td><strong>Address</strong></td>
											<td>{{ $patients->patient_address }}</td>
										</tr>
										<tr>
											<td><strong>Phone </strong></td>
											<td>{{ $patients->patient_phone }}</td>
										</tr>
										<tr>
											<td><strong>Email</strong></td>
											<td>{{ $patients->patient_email }}</td>
                                        </tr>

									</tbody>
								</table>
							</div>
                            <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit Patient</button>
                            <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete Patient</button>
                            <button type="button" class="btn btn-info mb-3"><span class="ti-arrow-down"></span> Download File</button>
						</div>
					</div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Visits</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Doctor Name</th>
											<th>Cost</th>
											<th>Visit Date</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Resheduled</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>$26</td>
											<td>12-10-2018</td>
											<td>Operation</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>$46</td>
											<td>45-10-2018</td>
											<td>Fever</td>
										</tr>
										<tr>
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Ortho</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>26</td>
											<td>12-10-2018</td>
											<td>General Check-up</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>46</td>
											<td>45-10-2018</td>
											<td>Injury</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                    <!-- /Widget Item -->
                     <!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Payment Transactions</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Date</th>
											<th>Cost</th>
											<th>Discount</th>
											<th>Payment Type</th>
											<th>Invoive</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>12-03-2018</td>
											<td>$300</td>
											<td>15%</td>
											<td>Check</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$130</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-danger">Cancelled</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Cash</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Insurance</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
										</tr>
									</tbody>
								</table>

								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
</x-guest-layout>




