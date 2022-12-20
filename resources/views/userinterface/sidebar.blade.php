<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="index-2.html"><img src="images/logo.png" class="logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="#">
						<span class="ti-home"></span> Dashboard
					</a>
				</li>
				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="{{ route('addpatient') }}">Add Patient</a>
						</li>
						<li>
							<a href="{{ route('allpatients') }}">All Patients</a>
						</li>
						<li>
							<a href="{{ route('patientdetails') }}">Patient Details</a>
						</li>
						<li>
							<a href="{{ route('editpatient') }}">Edit Patient</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Doctors
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="{{ route('adddoctor') }}">Add Doctor</a>
						</li>
						<li>
							<a href="{{ route('alldoctors') }}">All Doctors</a>
						</li>
						<li>
							<a href="{{ route('doctordetails') }}">Doctor Details</a>
						</li>
						<li>
							<a href="{{ route('editdoctor') }}">Edit Doctor</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						<li>
							<a href="{{ route('addappointment') }}">Add Appointment</a>
						</li>
						<li>
							<a href="{{ route('allappointments') }}">All Appointments</a>
						</li>
						<li>
							<a href="{{ route('appointmentdetails') }}">Appointment Details</a>
						</li>
						<li>
							<a href="{{ route('editappointment') }}">Edit Appointment</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-money"></span> Payments
					</a>
					<ul class="collapse list-unstyled" id="nav-payment">
						<li>
							<a href="{{ route('addpayment') }}">Add Payment</a>
						</li>
						<li>
							<a href="{{ route('allpayments') }}">All Payments</a>
						</li>
						<li>
							<a href="{{ route('paymentinvoice') }}">Payment Invoice</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-rooms" data-toggle="collapse" aria-expanded="false">
						<span class="ti-key"></span> Room Allotments
					</a>
					<ul class="collapse list-unstyled" id="nav-rooms">
						<li>
							<a href="{{ route('addroomallotment') }}">Add Room Allotment</a>
						</li>
						<li>
							<a href="{{ route('allrooms') }}">All Rooms</a>
						</li>
						<li>
							<a href="{{ route('editroomallotment') }}">Edit Room Allotment</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
						<span class="ti-file"></span> Other Pages
					</a>
					<ul class="collapse list-unstyled" id="nav-pages">
						<li>
							<a href="{{ route('login') }}">Login </a>
						</li>
						<li>
							<a href="{{ route('signup') }}">Sign Up</a>
						</li>
						<li>
							<a href="{{ route('invoice') }}">Invoice</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /Sidebar -->
