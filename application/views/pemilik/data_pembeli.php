<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan Taufik Juice</h1>
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
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
                        </tr>
                    </tfoot>

                    <?php
                    foreach ($data_pembeli as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->jenkel; ?></td>
                                <td><?php echo $row->tanggal_lahir; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td><?php echo $row->telp; ?></td>
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