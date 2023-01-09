<?php include 'includes/header-link.php' ?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/header.php' ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Welcome ! </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Candidate Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex res-flex-column">
                                <h4 class="card-title mb-0 flex-grow-1"><i class="fas fa-user"></i> Your profile can’t be found by recruiters because it’s missing key information</h4>
                                <div class="edit_btn">

                                    <a href=""> 3 steps to complete </a>
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex bb-0 res-flex-column">
                                <h2 class="card-title mb-0 flex-grow-1 f-24"><i class="fas fa-user mr-10"></i> <?= sessionId('cname') ?></h2>
                                <div class="edit_btn">
                                    <i class="fa fa-eye"></i>
                                    <a href="" class="mr-10">View your public profile</a>
                                    <i class="fa fa-edit"></i>
                                    <a href=""> Edit</a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <h5><?= $candidate[0]['job_title'] ?> @ <?= $candidate[0]['job_company'] ?></h5>
                                <h6><?= $candidate[0]['city'] ?></h6> <br><br>
                                <h6>Where are you in your job search?</h6>
                                <p>Keep your job status up-to-date to inform employers of your search.</p>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary orange_btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ready To Interview <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" href="#"><i data-feather="chevrons-right"></i> Ready To Interview</a></li>
                                        <li><a class="dropdown-item" href="#"><i data-feather="check-square"></i> Open to Offers</a></li>
                                        <li><a class="dropdown-item" href="#"><i data-feather="x"></i> Close to Offers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex bb-0">
                                <h4 class="card-title mb-0 flex-grow-1"><b>Recently Applied Jobs</b></h4>
                            </div><!-- end card header -->

                            <div class="card-body skills-box text-center">
                                <h4>It appears you haven’t applied to any jobs</h4>
                                <a href="<?= base_url('candidate/view_jobs') ?>" class="btn  btn-dark  waves-effect waves-light">Browse Jobs</a>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <!-- end col -->
                    <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<div class="rightbar-overlay"></div>
<?php include 'includes/footer-link.php'; ?>

</body>

</html>