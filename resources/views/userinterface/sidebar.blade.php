<!-- Sidebar -->
<nav id="sidebar" class="proclinic-bg">
    <div class="sidebar-header">
        <a href="index-2.html"><img src="{{ asset('images/logo.png') }}" class="logo" alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ route('dashboard') }}" aria-expanded="#">
                <span class="ti-home"></span> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('allpatients') }}" aria-expanded="#">
                <span class="ti-wheelchair"></span> Patients
            </a>
        </li>
        <li>
            <a href="{{ route('alldoctors') }}" aria-expanded="#">
                <span class="ti-user"></span> Doctors
            </a>
        </li>
        <li>
            <a href="{{ route('allappointments') }}" aria-expanded="#">
                <span class="ti-pencil-alt"></span> Appointments
            </a>
        </li>
        <li>
            <a href="{{ route('allbloodbanks') }}" aria-expanded="#">
                <span class="ti-medall"></span> BloodBanks
            </a>
        </li>
        <li>
            <a href="{{ route('allpharmacies') }}" aria-expanded="#">
                <span class="ti-write"></span> Pharmacy
            </a>
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
                <span class="ti-key"></span> User Management
            </a>
            <ul class="collapse list-unstyled" id="nav-rooms">
                <li>
                    <a href="{{ route('addroomallotment') }}">Add New User</a>
                </li>
                <li>
                    <a href="{{ route('allrooms') }}">User Master List</a>
                </li>
                <li>
                    <a href="{{ route('roomtype') }}">User Roles</a>
                </li>
            </ul>
        </li>
           <li>
            <a href="{{ route('allrooms') }}" aria-expanded="#">
                <span class="ti-key"></span> Room Allotments
            </a>
        </li>
        <li>
            <a href="{{ route('alldepartments') }}" aria-expanded="#">
                <span class="ti-folder"></span> Departments
            </a>
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
