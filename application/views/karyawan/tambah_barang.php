<div class="pendaftaran bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Tambah Barang</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-warning text-center text-white">
            <h4>Isi Kolom dengan Benar</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="<?php echo base_url('karyawan/input_barang') ?>" class="form-group" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">1. Tanggal :</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-3 col-form-label">2. Nama Barang :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_beli" class="col-sm-3 col-form-label">3. Harga Beli :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="harga_beli" placeholder="harga beli" name="harga_beli" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-sm-3 col-form-label">4. Stok :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Stok" placeholder="Stok" name="stok" required />
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