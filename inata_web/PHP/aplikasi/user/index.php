<?php
include "../function.php";
$user =  getAll("SELECT * FROM tbl_user order by id_user desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>Data User</h3>
            <div class="col-md-12">
                <div class="mb-2">
                    <a href="tambah.php" type="button" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>User</th>
                                    <th>Nama Lengkap</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($user as $dUser) :
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><img src="../assest/img/<?= $dUser['foto_user'] ?>" class="rounded-circle img-thumbnail" style="width:70px"></td>
                                    <td><?=$dUser['nama_user'];?></td>
                                    <td><?=$dUser['nm_lengkap_user'];?></td>
                                    <td><?=$dUser['role_user'];?></td>
                                    <td><?=$dUser['status_user'];?></td>
                                    <td>
                                        <a href="rubah.php?id=<?=$dUser['id_user']?>"type="button" class="btn btn-sm btn-dark">Edit</a>
                                        <a href="hapus.php?id=<?=$dUser['id_user']?>"onclick="return confirm('Yakin Hapus Data:<?=$dUser['nama_user']?>')"type="button"class="btn btn-sm btn-danger">Hapus</a>

                                    </td>
                                </tr> 
                                <?php endforeach;?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>