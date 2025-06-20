<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Dashboard Section -->
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Management Section -->
                <li class="nav-header">Management</li>

                <!-- Student Management -->
                <li class="nav-item">
                    <a href="/admin/students" class="nav-link">
                        <i class="fa fa-graduation-cap nav-icon"></i>
                        <p>Students</p>
                    </a>
                </li>

                <!-- Course Management -->
                <li class="nav-item">
                    <a href="/admin/sections" class="nav-link">
                        <i class="fa fa-book nav-icon"></i>
                        <p>Sections</p>
                    </a>
                </li>

                <!-- Case Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Cases
                            <i class="fas fa-angle-left right"></i> <!-- Dropdown Icon -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/cases/all.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Cases</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/cases/create.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create New Case</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Referral Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-share-alt"></i>
                        <p>
                            Referrals
                            <i class="fas fa-angle-left right"></i> <!-- Dropdown Icon -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/referrals/all.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Referral List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/referrals/pending.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Referrals</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Appointment Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Appointments
                            <i class="fas fa-angle-left right"></i> <!-- Dropdown Icon -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/appointments/create.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Schedule Appointment</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Reports Section -->
                <li class="nav-header">Reports</li>

                <!-- Case Reports -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Case Reports
                            <i class="fas fa-angle-left right"></i> <!-- Dropdown Icon -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/reports/cases.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Case Statistics</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/reports/referrals.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Referral Trends</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Counselor Reports -->
                <li class="nav-item">
                    <a href="pages/reports/counselors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Counselor Reports</p>
                    </a>
                </li>

                <!-- Admin Access Section -->
                <li class="nav-header">Admin Access</li>

                <!-- Admin Management -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Admin Access
                            <i class="fas fa-angle-left right"></i> <!-- Dropdown Icon -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/admin/users.html" class="nav-link">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/admin/access-logs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Access Logs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Settings Section -->
                <li class="nav-header">Settings</li>

                <!-- System Settings -->
                <li class="nav-item">
                    <a href="pages/settings/system.html" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>System Settings</p>
                    </a>
                </li>

                <!-- Notification Settings -->
                <li class="nav-item">
                    <a href="pages/settings/notification.html" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>Notification Settings</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="logout.html" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>