<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url('Admin_dashboard') ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox" width="150px">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox" width="150px">
                    </span>
                </a>

                <a href="<?= base_url('Admin_dashboard') ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox" width="150px">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox" width="150px">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>


        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/images/users/company.png" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= sessionId('username') ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->

                    <!-- <a class="dropdown-item" href="<?= base_url() ?>auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> -->

                    <a class="dropdown-item" href="<?= base_url('company-logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?= base_url('Admin_dashboard') ?>">
                        <i data-feather="home"></i>

                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-ecommerce">Companies</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('Admin_Dashboard/company_list') ?>" key="t-products">Company List</a></li>
                        <li><a href="<?= base_url('Admin_Dashboard/job_list') ?>" data-key="t-product-detail">Job Lists</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-ecommerce">Recruiters</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">Recruiter Details</a></li>
                        <li><a href="#" data-key="t-product-detail">Job Details</a></li>
                        <li><a href="#" data-key="t-orders">Job Detial</a></li>
                        <li><a href="#" data-key="t-customers">Assign teams</a></li>
                        <li><a href="#" data-key="t-cart">Candidates Mapped</a></li>
                        <li><a href="#" data-key="t-checkout">Checkout</a></li>
                        <li><a href="#" data-key="t-shops">Shops</a></li>
                        <li><a href="#" data-key="t-add-product">Add Product</a></li>
                    </ul>
                </li> -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-ecommerce">Candidate</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="<?= base_url('Admin_dashboard/candidate_list') ?>" key="t-products">Candidates List</a></li>
                    </ul>
                </li>


            </ul>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Website Data</li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/contact_detail') ?>">
                        <i data-feather="layers"></i>
                        <span>Contact Details</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/social_links') ?>">
                        <i data-feather="layers"></i>
                        <span>Social Links</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/privacy_policy') ?>">
                        <i data-feather="layers"></i>

                        <span>Privacy Policy</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/term_condition') ?>">
                        <i data-feather="layers"></i>
                        <span>Terms & Conditions</span>
                    </a>
                </li>
               
            </ul>


            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Other Information</li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/job_roles') ?>">
                        <i data-feather="layers"></i>
                        <span>Job Roles</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/work_technologies') ?>">
                        <i data-feather="layers"></i>
                        <span>Work Technologies</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('Admin_Dashboard/industries') ?>">
                        <i data-feather="layers"></i>

                        <span>Industries</span>
                    </a>
                </li>

            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>