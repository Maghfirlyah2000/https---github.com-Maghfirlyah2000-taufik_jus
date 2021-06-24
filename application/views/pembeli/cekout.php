<?php include '../../template/header_pembeli.php'; ?>

<br>
<br>
<section>
		<div class="container">
		<div class="row">
         <div class="col-sm-12">
         <!--panel-->
         <div class="panel panel-default" style="background: #ffffff; margin: 10px; padding: 10px; box-shadow: 0px 0px 2px #aab2bd; text-align: left;">
              <div class="panel-heading">
                   <h3 class="panel-title">
                   <i class="fa fa-shopping-cart fa-fw"></i> Shopping Cart (harga belum termasuk ongkir)</h3>
              </div>
              <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                <tbody>

                    <tr>
                        <td style="background-color: yellow"><b>Total Pembelian</b></td>
                        <td style="background-color: yellow"><h2></h2></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="keranjang.php" class="btn btn-link">Lihat Detail</a>
                        </td>
                    </tr>

                </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>

</div>
</div>
</section>

<section>
         <div class="container">
              <div class="row">
              <div class="col-lg-12">
              <div class="panel panel-default" style="background: #ffffff; margin: 10px; padding: 10px; box-shadow: 0px 0px 2px #aab2bd; text-align: left;">
              <div class="panel-heading" >
                   <h3 class="panel-title" >
                   <i class="fa fa-map-marker fa-fw"></i> Alamat Pengiriman</h3>
              </div>
              <div class="panel-body">
              <p>
              <b>
              <br></p>
              <p>
              <a href="gantialamat.php" class="btn btn-link">Ganti Alamat Pengiriman</a>
              </p>
              </div>
              </div>

              </div>
              </div>
         </div>
</section>

<section>
         <div class="container">
              <div class="row">
              <div class="col-lg-12">
              <div class="panel panel-default" style="background: #ffffff; margin: 10px; padding: 10px; box-shadow: 0px 0px 2px #aab2bd; text-align: left;">
              <div class="panel-heading">
                   <h3 class="panel-title">
                   <i class="fa fa-gift fa-fw"></i> Pilih Pengiriman</h3>
              </div>
              <div class="panel-body">
              <form action="cekpembelian.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-3 col-xs-12">Kurir Pengiriman</label>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <select name="ongkir" class="form-control" required>
                                        <option value="">Pilih</option>
                                         </select>
                                        </div>
                            </div>
                            <p>
                            
                            </p>
                            <hr>
                            <button type="submit" name="simpan" class="btn btn-success btn-lg btn-block">Lanjutkan Pembelian</button>
                        </form>
              </div>
              </div>
              
              </div>
              </div>
         </div>
</section>
