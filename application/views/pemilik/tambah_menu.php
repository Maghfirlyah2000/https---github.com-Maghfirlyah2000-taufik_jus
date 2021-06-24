<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Tambah Menu Juice</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-warning text-center text-white">
            <h4>Isi Kolom dengan Benar</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="<?php echo base_url('pemilik/input_menu') ?>" class="form-group" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="kode_minuman" class="col-sm-3 col-form-label">1. Kode Minuman :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kode_minuman" placeholder="Kode Minuman" name="kode_minuman" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_minuman" class="col-sm-3 col-form-label">2. Nama Minuman :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_minuman" placeholder="Nama Minuman" name="nama_minuman" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-3 col-form-label">3. Harga :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_kategori_jus" class="col-sm-3 col-form-label">4. Kategori :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="id_kategori_jus" name="id_kategori_jus" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
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