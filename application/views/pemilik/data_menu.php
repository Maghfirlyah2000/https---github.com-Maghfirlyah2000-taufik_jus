<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Menu Taufik Juice</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambah_menu text-right">
                <a href="<?php echo base_url('pemilik/tambah_menu') ?>" type="button" class="btn btn-danger">+ Data Menu</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Minuman</th>
                            <th>Nama Minuman</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Minuman</th>
                        <th>Nama Minuman</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>

                    <?php
                    foreach ($data_menu as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row->kode_minuman; ?></td>
                                <td><?php echo $row->nama_minuman; ?></td>
                                <td><?php echo $row->harga; ?></td>
                                <td><?php echo $row->id_kategori_jus; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('pemilik/edit_menu/' . $row->id_menu); ?>">&nbsp;</a></td>
                                    <td><a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('pemilik/hapus_menu/' . $row->id_menu); ?>">&nbsp;</a></td>
                                    
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