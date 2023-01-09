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
                                    <!-- result col -->
                                    <!--<div class="col-xl-12">-->
                                    <!--    <div class="card">-->
                                    <!--        <div class="card-body job_list">-->
                                    <!--            <div class="detail-box d-flex flex-column">-->
                                    <!--                <div class="post_detial row border-bottom bb-0">-->
                                    <!--                    <div class="col-md-7 d-flex flex-column">-->
                                    <!--                        <h5>1 result</h5>-->
                                    <!--                        <p>Sort by: </p>-->
                                    <!--                        <select class="form-control">-->
                                    <!--                            <option value="Recommended">Recommended</option>-->
                                    <!--                            <option value="Most Recen">Most Recent</option>-->
                                    <!--                            <option value="Last Active">Last Active</option>-->
                                    <!--                        </select>-->

                                    <!--                    </div>-->
                                    <!--                    <div class="col-md-5  d-flex res-mt-16">-->
                                    <!--                        <input type="checkbox" id="switch1" switch="none" checked />-->
                                    <!--                        <label for="switch1" data-on-label="On" data-off-label="Off" class="mr-10"></label>-->
                                    <!--                        <p>Get job alerts for this search</p>-->
                                    <!--                    </div>-->


                                    <!--                </div>-->

                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!-- end card body -->
                                    <!--    </div>-->
                                    <!-- end card -->
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

                                                $company = getRowById('tbl_company_registration', 'company_id', $row['company_id']);
                                                $saved_info = getRowByMoreId('tbl_saved_job', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));
                                                $applied_info = getRowByMoreId('tbl_applied_candidate', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));
                                        ?>

                                                <div class="card">
                                                    <div class="card-body job_list">
                                                        <div class="detail-box d-flex flex-column ">
                                                            <div class="post_detial d-flex border-bottom">
                                                                <div class="post_image mr-10">
                                                                    <img src="<?= base_url() ?>uploads/company/<?= $company[0]['logo_image'] ?>" width="60px" alt="Company Logo">
                                                                </div>
                                                                <div class="company_detail">
                                                                    <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>">
                                                                        <h5><?= $row['job_title'] ?></h5>
                                                                    </a>
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <p><?= $company[0]['company_name'] ?></p>
                                                                    </div>
                                                                    <div class="d-flex align-items-center job_boxer">
                                                                        <p><i class="fas fa-industry"></i> <?= $row['industry'] ?></p>
                                                                        <p><i class="fas fa-user-friends"></i> <?= $row['num_of_position'] ?></p>
                                                                        <p><i class="fas fa-map-marker-alt"></i> <?= $row['city'] ?>, <?= $row['state'] ?></p>
                                                                        <p><i class="fas fa-rupee-sign"></i> <?= $row['salary_from'] ?> <?= -$row['salary_to'] ?></p>
                                                                        <p><i class="fas fa-clock"></i> <?= (($row['job_type'] == 0) ? 'Full Time' : '') ?> <?= (($row['job_type'] == 1) ? 'Part Time' : '') ?> <?= (($row['job_type'] == 2) ? 'Part Time' : '') ?></p>
                                                                        <p><i class="fas fa-briefcase"></i> <?= $row['exprience'] ?></p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="jobs_desc py-3">
                                                                <?= substr($row['job_description'], 0, 200) ?>...
                                                            </div>

                                                            <div class="post_detial d-flex border-top res-flex-column py-2">
                                                                <div class="company_detail d-flex align-items-center justify-content-between w-100">
                                                                    <div class="row flex-column">
                                                                        <span> Posted By : <?= $company[0]['company_name'] ?> </span>
                                                                        <span> <?= convertDatedmy($row['create_date']) ?> </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="<?= base_url('candidate/add_save_job/' . sessionId('candidate_id') . '/' . $row['job_id']) ?>" class="btn waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i> Saved' : '<i class="far fa-star"></i> Save')) ?></a>
                                                                        <!--<a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>" class="btn btn-primary text-white waves-effect waves-light">View & Apply <?= ((!empty($applied_info) ? 'Applied' : 'View & Apply')) ?></a>-->
                                                                        <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>" class="btn <?= ((!empty($applied_info) ? 'applied_btn event_none' : 'orange_btn')) ?>  waves-effect waves-light"><?= ((!empty($applied_info) ? '<i class="fas fa-check-circle"></i> Applied' : 'Apply')) ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="company_details d-flex justify-content-end pt-2">
                                                                <a href="" class="mr-10"><i class="fas fa-clipboard-list"></i> Report</a>
                                                                <a href=""><i class="fas fa-ban"></i> Hide</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>

                                        <!-- end card -->


                                    </div>
                                    <!-- end col -->

                                    <!-- end col -->
                                    <!--<div class="col-xl-12">-->
                                    <!--    <div class="card">-->
                                    <!--        <div class="card-body job_list">-->

                                    <!--            <div class="detail-box d-flex flex-column ">-->
                                    <!--                <div class="post_detial d-flex border-bottom">-->
                                    <!--                    <div class="post_image mr-10">-->
                                    <!--                        <img src="<?= base_url() ?>assets/images/hb-fav.png" width="60px" alt="Company Logo">-->
                                    <!--                    </div>-->
                                    <!--                    <div class="company_detail">-->
                                    <!--                        <h5>The Internet Flox</h5>-->
                                    <!--                        <div class="d-flex align-items-center gap-3">-->
                                    <!--                            <p>We help various startups and companies test ideas via rapid implementation and prototyping</p>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="d-flex align-items-center">-->
                                    <!--                            <p><i class="fas fa-user-friends"></i> 1-10 employees</p>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->

                                    <!--                </div>-->
                                    <!--                <div class="post_detial d-flex justify-content-between border-bottom job-title-box res-flex-column">-->
                                    <!--                    <div class="company_detail">-->
                                    <!--                        <h5>Full Stack Engineer</h5>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="company_detail">-->
                                    <!--                        <p>In Office. Rs. 15L - Rs45L. 0.05% - 0.25%</p>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="company_detail d-flex align-items-center res-flex-column">-->
                                    <!--                        <p class="mr-10">5 Months Ago </p>-->
                                    <!--                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mr-10">Save</button>-->
                                    <!--                        <button type="button" class="btn btn-outline-dark waves-effect waves-light res-mt-16">Apply</button>-->
                                    <!--                    </div>-->
                                    <!--                </div>-->
                                    <!--                <div class="company_details d-flex justify-content-end pt-2">-->
                                    <!--                    <a href="" class="mr-10"><i data-feather="flag"></i> Report</a>-->
                                    <!--                    <a href=""><i data-feather="slash"></i> Hide</a>-->

                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!-- end card body -->
                                    <!--    </div>-->
                                    <!-- end card -->
                                    <!--</div>-->
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