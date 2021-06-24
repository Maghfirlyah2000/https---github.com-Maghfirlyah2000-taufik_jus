<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Daftar Kartu Pelanggan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-warning text-center text-white">
            <h4>Isi Kolom dengan Benar</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="<?php echo base_url('karyawan/input_pelanggan') ?>" class="form-group" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">1. Nama :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-3 col-form-label">2. Jenis Kelamin :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="jenkel" name="jenkel" required>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">3. Alamat :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-3 col-form-label">3. No.Telp :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telp" placeholder="No.Telp" name="telp" required />
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5">
                    <div class="kelompok mt-5 text-center my-3">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary" id="kirim" name="kirim" value="kirim">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>