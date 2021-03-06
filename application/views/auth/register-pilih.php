	<div class="login-layout">
		<div class="left-side-wrap">
			<div class="logo-header">
				<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/assets/images/group-9.png" alt=""></a>
			</div>
			<div class="login-bg">
				<img src="<?=base_url()?>assets/assets/images/thumbnails/testimoni.png" alt="" style="width: 90%;">
			</div>
			<div class="front-slider">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<p class="quote">
								“Berguru.com sangat membantu saya dalam mengembangkan penelitian studi di Sekolah Dasar, Volunteer Mahasiswa dengan sabar membantu saya dan selalu konsisten!”
							</p>
							<h6 class="author">
								Farida
							</h6>
							<p class="author-pos">
								Guru SDN Dinoyo 2 Malang
							</p>
						</div>

						<div class="item">
							<p class="quote">
								“Berguru.com sangat membantu saya dalam mengembangkan penelitian studi di Sekolah Dasar, Volunteer Mahasiswa dengan sabar membantu saya dan selalu konsisten!”
							</p>
							<h6 class="author">
								Farida
							</h6>
							<p class="author-pos">
								Guru SDN Dinoyo 2 Malang
							</p>
						</div>

						<div class="item">
							<p class="quote">
								“Berguru.com sangat membantu saya dalam mengembangkan penelitian studi di Sekolah Dasar, Volunteer Mahasiswa dengan sabar membantu saya dan selalu konsisten!”
							</p>
							<h6 class="author">
								Farida
							</h6>
							<p class="author-pos">
								Guru SDN Dinoyo 2 Malang
							</p>
						</div>
					</div>

					<!-- Left and right controls -->
				</div>
			</div>
		</div>
		<div class="right-side-wrap">
			<div class="row">
				<div class="col-md-12">
					<div class="have-account pull-right">
						<span>Sudah Mempunyai Akun?</span>
						<a href="<?=base_url()?>login"><span class="fa fa-lock" aria-hidden="true"></span>  Masuk</a>
					</div>				
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="login-box register-box">
						<?=$this->session->flashdata("alert");?>
						<h2>Bagus!<br>Sekarang Pilih Profesi Anda</h2>
						<p class="mb-30">pilih profesi sesuai dengan kemampuan anda</p>

						<form action="<?=base_url()?>register-pilih-proses" method="POST">
							<div class="profesi-box">
								<label class="container-radio">
									<input type="radio" checked="checked" name="profesi" value="pendidik">
									<span class="checkmark">
										<img src="<?=base_url()?>assets/assets/images/icons/teacher.png" alt="">
										<p>pendidik</p>
									</span>
									<span class="check-icon"><i class="fa fa-check"></i></span>
								</label> 
								<span class="word-or">Atau</span>
								<label class="container-radio   student">
									<input type="radio" name="profesi" value="mahasiswa">
									<span class="checkmark" >
										<img src="<?=base_url()?>assets/assets/images/icons/nurse.png" alt="">
										<p>mahasiswa</p>
									</span>
									<span class="check-icon"><i class="fa fa-check"></i></span>
								</label> 
								<br>
								<button type="submit" class="form-control btn btn-login btn-regis">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<footer>
				<div class="row">
					<div class="col-md-5">
						<ul> 
							<li>
								<a href=""><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-facebook"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-google-plus-g"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href=""><i class="fas fa-rss"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-7">
						<p>© 2018 Hak Cipta Dilindungi Undang-Undang</p>
					</div>
				</div>
			</footer>
		</div>
	</div>