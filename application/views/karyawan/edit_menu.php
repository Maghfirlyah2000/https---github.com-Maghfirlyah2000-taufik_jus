<div class=" bg-white">
    <div class="row">
        <div class="col-sm-12 text-center my-3">
            <h2>Data Menu Taufik Juice</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-warning text-center text-white">
            <h4>Edit Menu</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php
            foreach ($edit_menu as $row) {
            ?>

                <form action="<?php echo base_url('karyawan/update_menu'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="id_menu" class="col-sm-3 col-form-label">1. Id Menu :</label>
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" id="id_menu" name="id_menu" value="<?php echo $row->id_menu; ?>">
                            <input type="text" class="form-control" id="id_menu" name="id_menu" value="<?php echo $row->id_menu; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_minuman" class="col-sm-3 col-form-label">2. Kode Minuman :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kode_minuman" name="kode_minuman" value="<?php echo $row->kode_minuman; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_minuman" class="col-sm-3 col-form-label">3. Nama Minuman :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" value="<?php echo $row->nama_minuman; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">4. Harga :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row->harga; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kategori_jus" class="col-sm-3 col-form-label">5. Kategori Jus :</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="id_kategori_jus" name="id_kategori_jus" value="<?php echo $row->id_kategori_jus; ?>">
                                <option value="1" <?php if (($row->id_kategori_jus) == '1') {
                                                        echo "selected";
                                                    } ?>>Original</option>
                                <option value="2" <?php if (($row->id_kategori_jus) == '2') {
                                                        echo "selected";
                                                    } ?>>MIX</option>
                            </select>
                        </div>
                    </div>


                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5 text-center">
                        <button type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>