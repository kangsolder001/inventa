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
                   

                        <div class="card shadow mb-4">
                             <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Lantai 1</h6>
                                </div>
                                <div class="card-body">
                                    <p>Ubah jika ada barang yang rusak atau tambahkan barang jika ada barang baru.Segera laporkan pihak sarpras jika ada barang yang rusak atau tidak lengkap</p>
                                    <a href="kelola.php" type="button" class="btn btn-outline-primary mb-3">
                                    <i class="fa fa-plus fa-lg">Tambah Data</i></a>

                                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800"></h1>
                                        <a href="print1.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Print</a>
                                    </div>

                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>No.</center></th>
                                        <th><center>Kamar</center></th>
                                        <th>Loker</th>
                                        <th>Gantungan baju</th>
                                        <th>Gantungan tas</th>
                                        <th>Stopkontak</th>
                                        <th>Gorden++</th>
                                        <th>Cermin</th>
                                        <th>Lampu putih</th>
                                        <th>Lampu kuning</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_assoc($sql)) {    
                                    ?>
                                      <tr>
                                        <td><center><?php echo ++$no; ?></center></td>
                                        <td><center>
                                            <?php echo $result['Kamar']; ?> 
                                            </center></td>
                                        <td><?php echo $result['Loker']; ?> </td>
                                        <td><?php echo $result['Gantungan_baju']; ?>    </td>
                                        <td><?php echo $result['Gantungan_tas']; ?> </td>
                                        <td><?php echo $result['Stopkontak']; ?>    </td>
                                        <td><?php echo $result['Gorden']; ?>    </td>
                                        <td><?php echo $result['Cermin']; ?>    </td>
                                        <td><?php echo $result['Lampu_putih']; ?>   </td>
                                        <td><?php echo $result['Lampu_kuning']; ?>  </td>
                                        <td>
                                            <a href="kelola.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-success btn-sm">
                                               <i class="fa fa-pen" aria-hidden="true"></i></a>

                                                
                                            <a href="proses.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-danger btn-sm" onClick="return confirm('Anda Yakin Ingin Menghapus?')">
                                                <i class="fa fa-trash"></i></a></td>
                                      </tr>
                                      <?php
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                    
                                </div>
                                  
                                </div>
                            </div>

                        </div>

                    </div>

                <?php include'footer.php';?>
    <?php include'profil.php';?>
    
</body>

</html>