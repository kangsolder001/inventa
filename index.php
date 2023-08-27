<?php
    include 'koneksi.php';
    $query ="SELECT * FROM barang_kamar;";
    $sql = mysqli_query($conn, $query);
    $no = 0;


?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include 'header.php';  ?>

    <title>inventaweb</title>   
</head>

<body id="page-top">
    <?php include 'menu.php'; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Lantai 1</div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-share" aria-hidden="true"></button></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                           <div class="h5 mb-0 font-weight-bold text-gray-800">Lantai 2</div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-share" aria-hidden="true"></button></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- lantai3-->
                         <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                           <div class="h5 mb-0 font-weight-bold text-gray-800">Lantai 3</div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-share" aria-hidden="true"></button></i>
                                        </div>
                                    </div>
                                </div>
                            </div>            

            </div>
            <!-- End of Main Content -->

            <?php include 'footer.php';?>

<?php include'profil.php';?>
    
</body>

</html>