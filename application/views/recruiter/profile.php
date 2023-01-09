<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Company Profile | Hirebox</title>



    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Edit Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate"></span>
                                            <h4 class="mb-3 color-red">
                                                <span>Anu Thakur</span>
                                            </h4>

                                        </div>


                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Jobs Mapped</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Jobs Accepted</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Live Positions</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Details</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Name</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="Name" value="Anu Thakur">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="title">Contact Person First Name</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="COntact Person First Name" value="Rahul">
                                                </div> -->

                                                <div class="mb-3">
                                                    <label class="control-label">Country of Residence</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Country of Residence</option>
                                                        <option value="" selected>India</option>
                                                        <option value="">US</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Email Id</label>
                                                    <input id="price" type="text" class="form-control" placeholder="Email" value="anu@gmail.com">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="control-label">Phone No</label>
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Contact Number" value="+91 9090909090">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Skype</label>
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Skype" value="skype">
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select State</option>
                                                        <option value="" selected>Maharashtra</option>
                                                        <option value="">Madhya Pradesh</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Current Location (City) </label>
                                                    <input name="city" type="text" class="form-control" placeholder="City" value="Mumbai">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <label class="control-label">Domain (Choose the one that Fall in Your area of Expertise)</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Domain (Choose the one that Fall in Your area of Expertise)</option>
                                                        <option value="">Accounting / Corporate Finance</option>
                                                        <option value="">Administrative / Generalist</option>
                                                        <option value="">Advertising / Event Management / PR</option>
                                                        <option value="">Aerospace</option>
                                                        <option value="">Agriculture / Dairy / Fishing</option>
                                                        <option value="">Architecture / Interior Design</option>
                                                        <option value="">Automotive / ancillaries</option>
                                                        <option value="">Banking / Financial Services / Insurance </option>
                                                        <option value="">BPO / KPO / ITES / CRM / Transcription</option>
                                                        <option value="">Broadcasting</option>
                                                        <option value="">Chemical / Polymer / Plastic / Rubber</option>
                                                        <option value="" selected>E-commerce</option>
                                                        <option value="">Education</option>
                                                        <option value="">Data Entry</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Country (First Prefrence)</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Country</option>
                                                        <option value="">India</option>
                                                        <option value="" selected>USA</option>
                                                        <option value="">UK</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Country (Second Prefrence)</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Country</option>
                                                        <option value="">India</option>
                                                        <option value="">USA</option>
                                                        <option value="" selected>UK</option>
                                                    </select>
                                                </div>



                                            </div>

                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">No of People</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Size of Organization</option>
                                                        <option value="">Self Employed</option>
                                                        <option value="">2-10 Employees</option>
                                                        <option value="">11-50 Employees</option>
                                                        <option value="">51-200 Employees</option>
                                                        <option value="">201-500 Employees</option>
                                                        <option value="">501 + Employees</option>

                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Designation</label>
                                                    <input name="designation" type="text" class="form-control" placeholder="Designation" value="HR Manager">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Firm Type</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Firm Type</option>
                                                        <option value="">Permanent Hiring</option>
                                                        <option value="">Contract Staffing </option>
                                                        <option value="">Executive Search</option>
                                                        <option value="">Only Payrolling</option>
                                                    </select>
                                                </div>



                                            </div>

                                        </div>









                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                            <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->

                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- end main content-->






    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

</body>

</html>