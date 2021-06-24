<!-- Pendaftaran -->
<div class="container-fluid">

<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">TRANSAKSI</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d', time()) ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="no_nota">No Nota</label>
                                <input type="text" class="form-control" name="no_nota" id="no_nota"  readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="id_transaksi">ID Transaksi</label>
                                <input type="text" class="form-control" name="id_transaksi" id="id_transaksi" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nama_pembeli">Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nama_minuman">Nama Minuman</label>
                                <input class="form-control" id="nama_minuman" required>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="qty">QTY</label>
                                <input type="number" class="form-control" min="1" name="qty" id="qty" required>
                            </div>
                        </div>
                        <input type="hidden" id="harga">
                        <input type="hidden" id="nama_minuman">
                        <input type="hidden" name="no" id="no" value="1">
                        <div class="col-md-2">
                            <div class="form-group">
                                <br>
                                <a href="<?php echo base_url('Karyawan/tambah_transaksi')?>" class="btn btn-danger" id="tambah">Tambah</a>
                            </div>
                        </div>          
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div id="list">
                                <div class="col-md-4">
                                    <label>Nama_Minuman</label>
                                </div>
                            </div>
                                <div class="col-md-2">
                                    <label>Harga</label>
                                </div>
                                <div class="col-md-2">
                                    <label>QTY</label>
                                </div>
                                <div class="col-md-3">
                                    <label>Subtotal</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 text-center" style="float: right;">
                        <div class="row">
                            <span >Total</span>
                            <input type="text" id="stotal" name="total" class="form-control" value="0" readonly>
                        </div>
                        <br>
                        <div class="row">
                            <span>Bayar</span>
                            <input type="text" id="bayar" name="bayar" class="form-control" required>
                        </div>
                        <br>
                        <div class="row">
                            <span>Kembalian</span>
                            <input type="text" name="kembalian" id="kembalian" value="0" class="form-control" readonly>
                        </div>
                        <br>
                        <button type="submit" name="simpan" class="btn btn-danger"> Simpan</button>
                    </div>
            </form>
            <br>
            <table class="table table-bordered" id="transaksi">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>No Nota</td>
                            <td>ID Transaksi</td>
                            
                            <td>Nama Pembeli</td>
                            <td>Tanggal</td>
                            <td>Total Pembelian</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                            foreach ($transaksi as $row) {
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row->no_nota ?></td>
                            <td><?= $row->kd_transaksi ?></td>
                            <td><?= $row->nama_pembeli ?></td>
                            <td><?= $row->tgl_penjualan ?></td>
                            <td><?= $row->total_pembelian ?></td>
                            <td>
                                <a href="delete_transaksi.php?id=<?=$data['no_nota']?>" onClick="return confirm('Hapus Data ?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                            }   
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- /page content -->
<script>

function del(no){
    var stotal = parseInt($('#jumlah'+no).val());
    var alltotal = parseInt($('#stotal').val());
    var newtotal = alltotal - stotal;

    $('#stotal').val(newtotal);
    $('#row'+no).remove();
}

$(window).ready(function(){
    $('#transaksi').DataTable();
    $('#transaksi_filter').hide();
    $('#nama_minuman').select2({
        ajax : {
            url : 'nama_minuman.php',
            type : 'POST',
            dataType : 'JSON',
            data : function(params){
                return{
                    data : params.term
                };
            },
            processResults : function(data){
                var results = [];

                $.each(data, function(index, item){
                    results.push({
                        id : item.nama_minuman,
                        text : item.nama_minuman
                });
                return {
                    results : results
                };
            }
        }
    }).on('select2:select', function (evt) {
         var nm = $("#nama_minuman option:selected").text();
         $.ajax({
            type : 'POST',
            url : 'hargaminuman.php',
            data : { data : nm },
            dataType : 'JSON',
            success : function(res){
                $('#harga').val(res[0].harga);
                $('#nama_minuman').val(res[0].nama_minuman);
            }
        })
    });

    $('#tambah').on('click', function(){
        var no = $('#no').val();
        var stotal = parseInt($('#stotal').val());

        var nama_minuman = $('#nama_minuman option:selected').text();
        var harga = $('#harga').val();
        var qty = $('#qty').val();
        var nama_minuman = $('#nama_minuman').val();
        var subtotal = parseInt(harga) * parseInt(qty);

        var list = '<div class="row" id="row'+ no +'" style="margin-bottom:10px;">'
                        +'<div class="col-md-4">'
                            +'<input class="form-control" name="nama_minuman[]" id="nama'+ no +'" readonly>'
                            +'<input type="hidden" name="nama_minuman[]" id="nama_minuman'+ no +'">'
                        +'</div>'
                        +'<div class="col-md-2">'
                            +'<input type="text" class="form-control" name="harga[]" id="harga'+ no +'" readonly>'
                        +'</div>'
                        +'<div class="col-md-2">'
                            +'<input type="text" class="form-control" name="qty[]" id="qty'+ no +'" readonly>'
                        +'</div>'
                        +'<div class="col-md-3">'
                            +'<input type="text" class="form-control" name="stotal[]" id="jumlah'+ no +'" readonly>'
                        +'</div>'
                        +'<div class="col-md-1">'
                            +'<a class="btn btn-sm btn-danger" onClick="del('+no+')"> X </a>'
                        +'</div>'
                    +'</div>';
        $('#list').append(list);

        stotal += parseInt(subtotal);

        $('#stotal').val(stotal);
        $('#nama_minuman'+no).val(nama_minuman);
        $('#harga'+no).val(harga);
        $('#nama_minuman'+no).val(nama_minuman);
        $('#qty'+no).val(qty);
        $('#jumlah'+no).val(subtotal);

        var no = (no-1) + 2;
        $('#no').val(no);
    })

    $('#bayar').on('keyup', function(){
        var total = parseInt($('#stotal').val());
        var bayar = parseInt($(this).val());
        var kembalian = bayar - total;

        if (kembalian)
        {
            $('#kembalian').val(kembalian);
        }
        else
        {
            $('#kembalian').val(0);
        }
    })
})
</script>