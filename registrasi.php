<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-device=1.0" />
    <title>SPK Pemilihan Mahasiswa Berprestasi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.js"></script>
</head>
    <main class="container py-5">
        <form class="card mb-3" method="post" action="tambah_alternatif.php">
            <h2 class="card-header py-5 text-center">FORM REGISTRASI</h2>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input class="form-control" name="nip" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control" name="nama" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" name="username" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" name="password" type="password" />
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Kelas</label>
                        <input class="form-control" name="pangkat" type="text" />
                    </div>
                    <!-- <div class="col">
                        <label class="form-label">Golongan</label>
                        <input class="form-control" name="golongan" type="text" />
                    </div>
                </div> -->
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">Tanggal Lahir</label>
                        <input class="form-control" name="tgl_lahir" type="date" />
                    </div>
                </div>
                <!-- <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Jabatan 1</label>
                        <input class="form-control" name="jabatan_1" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">Jabatan 2</label>
                        <input class="form-control" name="jabatan_2" type="text" />
                    </div>
                </div> -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="text" />
                </div>
                <div class="mb-3">
                    <div class="col">
                        <label class="form-label">No HP</label>
                        <input class="form-control" name="hp_1" type="text" />
                    </div>
                    <!-- <div class="col">
                        <label class="form-label">No HP 2</label>
                        <input class="form-control" name="hp_2" type="text" />
                    </div>
                </div> -->
                <!-- <div class="mb-3">
                    <label class="form-label">No NPWP</label>
                    <input class="form-control" name="npwp" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input class="form-control" name="nik" type="text" />
                </div> -->
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat_1"></textarea>
                </div>
                <!-- <div class="mb-3">
                    <label class="form-label">Alamat 2</label>
                    <textarea class="form-control" name="alamat_2"></textarea>
                </div> -->
                <button type="submit" class="btn btn-primary" style="width: 100%;"><i class="bi bi-save-fill"></i>
                    Simpan</button>
            </div>
        </form>
                        <?php


                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
    ?>

    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    $('document').ready(function() {
        $('.table').DataTable({
            responsive: true,
            columnDefs: [{
                responsivePriority: 1,
                targets: 1
            }, ]
        })
    })
    </script>
</body>

</html>