<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Form"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Table"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/job-category/*')||Request::is('admin/job-location/*')||Request::is('admin/job-type/*')||Request::is('admin/job-experience/*')||Request::is('admin/job-gender/*')||Request::is('admin/job-salary-range/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Job Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/job-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i> Job Category</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Job Location</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/why-choose/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_why_choose_item') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Why Choose Items"><i class="fas fa-hand-point-right"></i> <span>Why Choose Items</span></a></li>
        </ul>
    </aside>
</div>
