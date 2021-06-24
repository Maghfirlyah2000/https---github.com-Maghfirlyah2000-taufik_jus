<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Barang Habis</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambahdata text-right">
                <a href="<?php echo base_url('karyawan/tambah_barang') ?>" type="button" class="btn btn-danger">+ Data Barang</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama_Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama_Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>

                    <?php
                    foreach ($db_habis as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->nama_barang; ?></td>
                                <td><?php echo $row->harga_beli; ?></td>
                                <td><?php echo $row->stok; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('karyawan/edit_baranghabis/' . $row->id_barang); ?>">&nbsp;</a></td>
                                    <td><a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('karyawan/hapus_barang/' . $row->id_barang); ?>">&nbsp;</a></td>
                                    
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