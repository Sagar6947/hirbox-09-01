<?php include 'template/headerlink.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper" class="layout_wrapper_gray">

    <?php include 'template/header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-sm-0 font-size-18">Jobs</h4>
                                <p class="mt-1">Showing <?= $company_count ?> Jobs</p>
                            </div>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">


                    <?php
                    if (!empty($get_jobs)) {
                        foreach ($get_jobs as $row) {
                            $get_company = getRowById('tbl_company_registration', 'company_id', $row['company_id']);
                    ?>

                            <div class="col-xl-3 col-xxl-3  col-md-3 col-sm-6">
                                <div class="card">
                                    <div class="jobs2 card-body">
                                        <div class="text-center">
                                            <span class="admin_job_image_wrapper">
                                                <?php
                                                if (!empty($get_company[0]['logo_image'])) {
                                                ?>
                                                    <img src="<?= base_url() ?>uploads/company/<?= $get_company[0]['logo_image'] ?>" alt="company logo">
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="<?= base_url() ?>assets/images/default_company.png" alt="company logo">
                                                <?php
                                                }
                                                ?>
                                            </span>
                                            <h4 class="fs-20 mb-0"><?= $row['job_title'] ?></h4>
                                            <span class="job_company_title mb-3 d-block"><?= $get_company[0]['company_name'] ?></span>
                                        </div>
                                        <div class="text-center">
                                            <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i><?= $row['city'] ?>, <?= $row['country'] ?></span>
                                            <span><i class="fa fa-rupee me-2"></i> ₹ <?= $row['salary_from'] ?> - <?= $row['salary_to'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    <?php
                        }
                    }
                    ?>

                </div><!-- end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'template/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'template/footerlink.php'; ?>

</body>



</html>