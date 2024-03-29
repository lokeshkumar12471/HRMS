<!-- Sidebar -->
<nav id="sidebar" class="proclinic-bg">
    <div class="sidebar-header">
        <a href="#"><img src="{{ asset('images/logo.png') }}" class="logo" alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ route('dashboard') }}" aria-expanded="#">
                <span class="ti-home"></span> Dashboard
            </a>
        </li>
        <?php if(session()->get('roleid')=='3'){?>
        <li>
            <a href="{{ route('allpatients') }}" aria-expanded="#">
                <span class="ti-wheelchair"></span> Patients
            </a>
        </li>
        <?php } ?>
        <?php if(session()->get('roleid')=='3'){?><li>
            <a href="{{ route('alldoctors') }}" aria-expanded="#">
                <span class="ti-user"></span> Doctors
            </a>
        </li>
        <?php } ?>
        <li>
            <a href="{{ route('allappointments') }}" aria-expanded="#">
                <span class="ti-pencil-alt"></span> Appointments
            </a>
        </li>
        <?php if(session()->get('roleid')=='3'||session()->get('roleid')=='2'){?>
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
        <?php }?>
        <?php if(session()->get('roleid')=='3'){?>
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
            <a href="{{ route('allusers') }}" aria-expanded="#">
                <span class="ti-magnet"></span> User Management
            </a>
        </li>
        <li>
            <a href="#nav-administrator" data-toggle="collapse" aria-expanded="false">
                <span class="ti-support"></span> Administrator
            </a>
            <ul class="collapse list-unstyled" id="nav-administrator">
                <li>
                    <a href="{{ route('addroomallotment') }}">Company Information</a>
                </li>
                <li>
                    <a href="{{ route('allrooms') }}">Department Master</a>
                </li>
                <li>
                    <a href="{{ route('roomtype') }}">Designation Master</a>
                </li>
                <li>
                    <a href="{{ route('addroomallotment') }}">Bill Group Name Master</a>
                </li>
                <li>
                    <a href="{{ route('allrooms') }}">Particular Bill Master</a>
                </li>
                <li>
                    <a href="{{ route('roomtype') }}">Complain Master</a>
                </li>
                <li>
                    <a href="{{ route('addroomallotment') }}">Diagnosis Master</a>
                </li>
                <li>
                    <a href="{{ route('allrooms') }}">Surgical Package</a>
                </li>
                <li>
                    <a href="{{ route('roomtype') }}">Insurance Company</a>
                </li>
                <li>
                    <a href="#nav-medicine" data-toggle="collapse" aria-expanded="false">Medicine
                        Management</a>
                </li>
                <ul class="collapse list-unstyled" id="nav-medicine">
                    <li>
                        <a href="{{ route('addroomallotment') }}">Category Master</a>
                    </li>
                    <li>
                        <a href="{{ route('addroomallotment') }}">Drug Name Master</a>
                    </li>
                    <li>
                </ul>
                <a href="{{ route('allrooms') }}">Acknowledge Receipt</a>
        </li>
        <li>
            <a href="{{ route('roomtype') }}">System Parameters</a>
        </li>
    </ul>
    <li>
        <a href="{{ route('roomtype') }}">Backup Database</a>
    </li>
    <li>
        <a href="{{ route('roomtype') }}">System Pages</a>
    </li>
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
        <a href="{{ route('alluserpermission') }}" aria-expanded="#">
            <span class="ti-panel"></span> Permissions
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
    <?php } ?>
    <?php if(session()->get('roleid')=='1') {?>
    <li>
        <a href="{{ route('patient') }}" aria-expanded="#">
            <span class="ti-mobile"></span> Message
        </a>
    </li>
    <?php }?>
    <?php if(session()->get('roleid')=='2') {?>
    <li>
        <a href="{{ route('doctor') }}" aria-expanded="#">
            <span class="ti-mobile"></span> Message
        </a>
    </li>
    <?php }?>
    <li>
        <a href="{{ route('logout') }}" aria-expanded="#">
            <span class="ti-cloud-down"></span> Logout
        </a>
    </li>
    </ul>
</nav>
<!-- /Sidebar -->
