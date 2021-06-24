<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Histori Penjualan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nomor Nota</th>
                            <th>Grand Total</th>
                            <th>Pelanggan</th>
                            <th>Keterangan</th>
                            <th>Kasir</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nomor Nota</th>
                        <th>Grand Total</th>
                        <th>Pelanggan</th>
                        <th>Keterangan</th>
                        <th>Kasir</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>

                    <?php
                    foreach ($histori_penjualan as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row->nama_minuman; ?></td>
                                <td><?php echo $row->harga; ?></td>
                                <td><?php echo $row->kategori_jus; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('karyawan/edit_menu' . $row->id_minuman); ?>">&nbsp;</a></td>
                                    <td><a style="color:black" onclick="return confirm('Yakin Hapus?')" class="fas fa-trash-alt" href="<?php echo base_url('karyawan/hapus_menu' . $row->id_minuman); ?>">&nbsp;</a></td>
                                    
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