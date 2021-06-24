<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kasbon Karyawan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="tambahkasbon text-right">
                <a href="<?php echo base_url('karyawan/input_kasbon') ?>" type="button" class="btn btn-danger">+ kasbon</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>tanggal</th>
                            <th>Jumlah Kasbon</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>No</th>
                            <th>tanggal</th>
                            <th>Jumlah Kasbon</th>
                            <th>Edit</th>
                        </tr>
                </tfoot>

                    <?php
                    foreach ($casbon as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->jumlah_kasbon; ?></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('karyawan/edit_kasbon' . $row->id_kasbon); ?>">&nbsp;</a>
                                </td>
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