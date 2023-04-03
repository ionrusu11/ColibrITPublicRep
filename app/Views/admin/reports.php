<?= $this->extend('layouts/admin') ;?>
<?= $this->section('content') ;?>

    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
<?= $this->include('admin/header'); ?>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
<?= $this->include('admin/sidebar'); ?>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">

            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All data - Table</h2>
                            <!-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="<?= base_url('/')?>" class="breadcrumb-link">Admin
                                                Panel</a></li>
                                        <!-- <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li> -->
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Basic Table</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Update Status</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($reports)):?>
                                                <?php foreach ($reports as $report):?>
                                                    <tr>
                                                        <td><?= $report['id']; ?></td>
                                                        <td>
                                                            <img src="<?= $report['imgUrl']; ?>" alt="" width=100 height=100>
                                                        </td>
                                                        <td><?= $report['category']; ?></td>
                                                        <td><?= $report['firstname']; ?></td>
                                                        <td><?= $report['lastname']; ?></td>
                                                        <td><?= $report['email']; ?></td>
                                                        <td>
                                                            <form method="post" action="<?= base_url('/operator/update_status')?>">
                                                                <?= csrf_field()?>

                                                                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                                                    <div class="alert alert-danger"> <?= session()->getFlashdata('fail'); ?> </div>
                                                                <?php endif?>

                                                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                                    <div class="alert alert-success"> <?= session()->getFlashdata('success'); ?> </div>
                                                                <?php endif?>

                                                                <input type="hidden" name="id" value="<?= $report['id']; ?>">
                                                                <input type="hidden" name="type" value="admin">

                                                                <select class="form-control" name="status">
                                                                    <option value=4 >Declined</option>
                                                                    <option value=5 >In progress..</option>
                                                                    <option value=6 >Solved</option>
                                                                    <!--                                                                    <option value="4">Gunoi</option>-->
                                                                    <!--                                                                    <option value="5">Altele</option>-->
                                                                    <!--                                                                    <option value="6">Altele</option>-->
                                                                </select>
                                                                <input class="btn btn-primary" type="submit" value="Update!">
                                                            </form>

                                                        </td>
                                                        <td><?= $report['status']; ?></td>
                                                    </tr>
                                                <?php endforeach;?>
                                            <?php else:?>
                                                <p>Empty data</p>
                                            <?php endif;?>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Update Status</th>
                                                <th>Status</th>
                                            </tr>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2023 Admin Panel. All rights reserved. Dashboard by <a href="#COLIBRIT">COLIBRIT</a>.
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->

<?= $this->endSection() ;?>