<div class=" bg-white">
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-warning text-center text-white">
            <h4>Edit Data Menu</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">

            <?php
            foreach ($edit_menu as $row) {
            ?>

                <form class="data_menu" action="<?php echo base_url('karyawan/update_menu'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="id_menu" class="col-sm-5 col-form-label">1. ID Menu :
                            <tr>
                                <td><?php echo $row->id_menu; ?></td>
                            </tr>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="kode_minuman" class="col-sm-5 col-form-label">2. Kode Minuman :
                            <tr>
                                <td><?php echo $row->kode_minuman; ?></td>
                            </tr>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="nama_minuman" class="col-sm-5 col-form-label">3. Nama Minuman :
                            <tr>
                                <td><?php echo $row->nama_minuman; ?></td>
                            </tr>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-5 col-form-label">4. Harga :
                            <tr>
                                <td><?php echo $row->harga; ?></td>
                            </tr>
                        </label>
                    </div>
                    <div class="form-group">
                        <select id="id_kategori_jus" class="form-control" name="id_kategori_jus" require>
                            <option value="1" <?php if (($row->id_kategori_jus) == 1) {
                                                    echo "selected";
                                                } ?>>1</option>
                            <option value="2" <?php if (($row->id_kategori_jus) == 2) {
                                                    echo "selected";
                                                } ?>>2</option>
                        </select>
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