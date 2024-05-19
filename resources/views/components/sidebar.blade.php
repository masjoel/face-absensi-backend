<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Klinik Sehat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}"><i class="fa fa-store"></i></a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item ">
                <a href="{{ route('dashboard') }}" class="nav-link "><i
                        class="fas fa-dashboard"></i><span>Dashboard</span></a>
            </li>
                {{-- <li class="menu-header">Admin only</li> --}}

                {{-- <li class="nav-item {{ Request::is('profil*') ? 'active' : '' }}">
                    <a href="{{ route('profil-bisnis.edit', auth()->user()->perusahaan_id) }}" class="nav-link "><i
                            class="fas fa-home"></i><span>Profil Klinik</span></a>
                </li> --}}
                <li class="nav-item {{ Request::is('doctors*') ? 'active' : '' }}">
                    <a href="{{ route('doctors.index') }}" class="nav-link "><i class="fas fa-user-doctor"></i><span>Doctors</span></a>
                </li>
                <li class="nav-item {{ Request::is('doctor-schedules*') ? 'active' : '' }}">
                    <a href="{{ route('doctor-schedules.index') }}" class="nav-link "><i class="fas fa-calendar-alt"></i><span>Doctor Schedule</span></a>
                </li>
                <li class="nav-item {{ Request::is('patients*') ? 'active' : '' }}">
                    <a href="{{ route('patients.index') }}" class="nav-link "><i class="fas fa-user-doctor"></i><span>Patients</span></a>
                </li>
                <li class="nav-item {{ Request::is('service-medicines*') ? 'active' : '' }}">
                    <a href="{{ route('service-medicines.index') }}" class="nav-link "><i class="fa-solid fa-stethoscope"></i><span>Service and Medicines</span></a>
                </li>
                <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link "><i class="fas fa-users"></i><span>Users</span></a>
                </li>
            <li class="nav-item">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="nav-link "><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="post">@csrf</form>
            </li>
    </aside>
</div>
