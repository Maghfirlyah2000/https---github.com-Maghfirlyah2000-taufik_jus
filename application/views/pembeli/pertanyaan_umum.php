<?php include '../../template/header_pembeli.php'; ?>

<!-- Pertanyaan Umum collapse -->
<br>
<br>
<section class="pertanyaanumum" id="pertanyaan_umum">
	<div class="container">
		<div class="col-sm-12 text-center">
			<h2>Pertanyaan umum</h2>
			<hr>
		</div>
		<div class="accordion" id="bagian1">
			<div class="card">
				<div class="card-header bg-light" id="header1">
					<button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse1">
						<h5>1. Apakah Saya Harus Membuat Akun Untuk Berbelanja Di Taufikjus.com?</h5>
					</button>
				</div>

				<div id="collapse1" class="collapse show" aria-labelledby="header1" data-parent=#bagian1>
					<div class="card-body">
						<p>Ya. Memiliki akun akan mempermudah proses belanja karena tidak perlu untuk menulis data pribadi dan alamat setiap kali Anda berbelanja.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-light" id="header2">
				<button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse2">
					<h5>2. Bagaimana Saya Bisa Mendapatkan Akun Taufikjus.Com?</h5>
				</button>
			</div>

			<div id="collapse2" class="collapse" aria-labelledby="header2" data-parent=#bagian1>
				<div class="card-body">
					<p> Anda dapat melakukan registrasi dengan mengklik tautan "Log in / Sign up”. Lalu isi identitas lengkap Anda pada bagian. Mohon pastikan bahwa identitas yang Anda isi adalah benar, kemudian tekan tombol "Create an Account". Setelahnya, Anda memiliki akun Taufik jus.</p>
				</div>
			</div>
		</div>

		<div class="card">
            <div class="card-header bg-light" id="header3">
            	<button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse3">
            		<h5>3. Bagaimana Saya Mendapatkan Reward Coin?</h5>
            	</button>
            </div>

            <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent=#bagian1>
            	<div class="card-body">
            		<p> Dengan setiap melakukan pembelian di Taufik Jus, anda akan mendapatkan 1 reward coin.</p>
            	</div>
            </div>
        </div>

        <div class="card">
        	<div class="card-header bg-light" id="header4">
        		<button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse4">
        			<h5>4. Bagaimana Saya Dapat Menggunakan Reward Coin?</h5>
        		</button>
        	</div>

        	<div id="collapse4" class="collapse" aria-labelledby="header4" data-parent=#bagian1>
        		<div class="card-body">
        			<p> Dengan melakukan minimal 10 kali pembelian jus, maka anda akan mendapat 1 jus dengan gratis. Caranya adalah tunjukkan Reward Coin yang anda miliki kepada kasir gerai yang bertugas, maka anda akan mendapatkan 1 gelas jus yang anda inginkan dengan gratis.</p>
        		</div>
        	</div>
        </div>

    </div>
</section>
<!-- Akhir Pertanyaan Umum -->

<?php include '../../template/footer_pembeli.php'; ?>