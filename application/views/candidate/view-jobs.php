<?php include 'includes/header-link.php' ?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/header.php' ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!--<div class="row">-->
                <!--    <div class="col-xl-12">-->
                <!--        <div class="card">-->
                <!--            <div class="card-header align-items-center d-flex res-flex-column">-->
                <!--                <h4 class="card-title mb-0 flex-grow-1"><i class="fas fa-user"></i> Your profile can’t be found by recruiters because it’s missing key information</h4>-->
                <!--                <div class="edit_btn">-->

                <!--                    <a href=""> 3 steps to complete </a>-->
                <!--                    <i class="fas fa-angle-right"></i>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!-- end card -->
                <!--    </div>-->
                <!--</div>-->

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 f-24">Search for jobs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">View Jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-bs-toggle="tab" href="#browse-all" role="tab">
                                    <span class="d-block d-sm-none">All</span>
                                    <span class="d-none d-sm-block">Browse All</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#saved" role="tab">
                                    <span class="d-block d-sm-none">Saved</span>
                                    <span class="d-none d-sm-block">Saved <span>0</span> </span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#hidden" role="tab">
                                    <span class="d-block d-sm-none">Hidden</span>
                                    <span class="d-none d-sm-block">Hidden</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="browse-all" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body job_list">
                                                <div class="detail-box d-flex flex-column">
                                                    <div class="post_detial row border-bottom bb-0">
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_role" list="datalistOptions" id="exampleDataList" placeholder="Role">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_industry" list="datalistOptions" id="exampleDataList" placeholder="Industry">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_country" list="datalistOptions" id="exampleDataList" placeholder="Country">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_city" list="datalistOptions" id="exampleDataList" placeholder="City">
                                                        </div>
                                                        <!-- <div class="col-md-2">
                                                            <button type="button" class="btn btn-danger btn-primary waves-effect waves-light full-time-btn">
                                                                <i class="bx bx-x font-size-16 align-middle me-2"></i> Full Time
                                                            </button>
                                                        </div> -->
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-primary btn-primary waves-effect waves-light orange_btn">
                                                                Search Job
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <!-- <div class="company_details text-center">
                                                        <p class="siklls_para"><b>filter</b></p>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    <!--</div>-->
                                    <!-- end col -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4 text-primary">Search by filter</h4>

                                                <div class="mt-4 pt-3">
                                                    <h5 class="font-size-14 mb-3">Job type</h5>
                                                    <div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                Full Time
                                                            </label>
                                                        </div>

                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                Part Time
                                                            </label>
                                                        </div>

                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                Remote
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-3">
                                                    <h5 class="font-size-14 mb-3">Posted</h5>
                                                    <div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                1 month ago
                                                            </label>
                                                        </div>

                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                3 month ago
                                                            </label>
                                                        </div>

                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                6 month ago
                                                            </label>
                                                        </div>

                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                            <label class="form-check-label" for="productratingCheck1">
                                                                1 year ago
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-9">

                                        <!--Start Card-->


                                        <!-- end card -->


                                        <!--Start Card-->

                                        <?php
                                        if ($job_list) {
                                            foreach ($job_list as $row) {

                                                job($row, 'admin');
                                            }
                                        }
                                        ?>

                                        <!-- end card -->


                                    </div>
                                    <!-- end col -->

                                    <!-- end col -->
                                    
                                    <!-- end col -->
                                    <!-- end col -->
                                    <!-- end col -->
                                </div>
                            </div>
                            <!-- tab 2 saved -->
                            <div class="tab-pane" id="saved" role="tabpanel"></div>
                            <!-- tab 3 hidden -->
                            <div class="tab-pane" id="hidden" role="tabpanel"></div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer-link.php'; ?>

</body>



</html>