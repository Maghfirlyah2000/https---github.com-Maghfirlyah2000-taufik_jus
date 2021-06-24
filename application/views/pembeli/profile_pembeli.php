<?php include '../../template/header_pembeli.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custome Profile UI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<body>
    <Fieldset>
<legend><br><br><b>Profil Pengguna</b></legend>
<form action="" method="post">
<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>PROFIL</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 text-center text-white" style="background-color: #e74a3b">
            <h5>Edit Profil</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="aksi_daftar.php" class="formpendaftaran" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-3 col-form-label">1. Nama Lengkap :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama-lengkap" placeholder="Nama Lengkap" name="nama-lengkap" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tl" class="col-sm-3 col-form-label">2. Jenis Kelamin :</label>
                    <div class="col-sm-9">
                        <td>
                            <label><input type="radio" name="jk" value="L" required /> Laki-laki</label>
                            <label><input type="radio" name="jk" value="p" required /> Perempuan</label>
                        </td>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Username" class="col-sm-3 col-form-label">3. Username :</label>
                    <div class="col-sm-9">
                        <input type="Username" class="form-control" id="Username" name="Username" placeholder="Username" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">4. Password :</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required />
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">5. Alamat :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Masukkan Alamat Lengkap" id="alamat" name="alamat" required></textarea>
                    </div>
                </div>
                <!-- Buttom -->
                <div class=" mt-5 text-center my-3">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    
                        <button type="submit" class="btn btn-warning" id="kirim" name="kirim" value="kirim">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
