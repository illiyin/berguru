<script type="text/javascript">
	$( document ).ready(function() {
		$("#search-bar-karir").on("change", function() {
			var value = $(this).val().toLowerCase()
			console.log(value)
			$(".content-item").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		})
	})
</script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row visible-xs">
		<ol class="breadcrumb">
			<li>
				<a href="#">
					Home
				</a>
			</li>
			<li class="active">Karir</li>
		</ol>
	</div>
	<div class="main-container">
		<?=$this->session->flashdata("karir")?>
		<div class="content-filter-top">
			<div class="big-filter">
        
				<div class="dropdown">
					<a href="#">Daftar Lowongan Kerja</a>
				</div>
				
			</div>
			<p class="text-muted">Solusi tanpa batas dan mudah dalam diskusi yang menyenangkan</p>
		</div>
		<div class="row">
			<div class="col-sm-8 col-md-9">
				<div class="content-filter-search">
					<div class="row">
						<div class="col-sm-12 col-lg-8">
							<form action="#" class="input-55">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker-alt"></i></span>
									<!-- <input type="text" class="form-control" placeholder="Cari lokasi" id="search-bar-karir"> -->
									<select name="lokasi" class="form-control" id="search-bar-karir" >
										<option value="" selected="">- Pilih Kota / Kabupaten -</option>
										<?php 
										foreach ($lokasi_lowongan as $key => $value) { ?>
											<option value="<?=$value->lokasi?>"><?=$value->lokasi?></option>
										<?php }
										?>
									</select>
								</div>
							</form>
						</div>
						<div class="col-sm-3 col-md-push-6 col-lg-push-0 col-lg-1 atau">Atau</div>
						<div class="col-sm-9 col-md-4 col-md-push-5 col-lg-push-0 col-lg-3">
							<a href="<?=base_url()?>karir-tambah-mahasiswa" class="btn btn-55 btn-success btn-block">Tambah Lowongan</a>
						</div>
					</div>
				</div>
				<div class="content-filter-bottom">
					<div class="row">
						<div class="col-xs-5">
							<h4>Daftar Lowongan</h4>
						</div>
						<div class="col-xs-7 text-right">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown">Harian <i class="fa fa-chevron-down"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Mingguan</a></li>
									<li><a href="#">Bulanan</a></li>
								</ul>
							</div>
							<!--
							<div class="dropdown">
								<a href="#" data-toggle="dropdown">Kategori <i class="fa fa-chevron-down"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Kategori A</a></li>
									<li><a href="#">Kategori B</a></li>
								</ul>
							</div>
							-->
						</div>
					</div>
				</div>
				<div class="content-list">
					<?php 
					if ($lowongan !==array()) {
						foreach ($lowongan as $key => $value) { ?>
							<div class="panel panel-plain content-item">
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-8">
											<h3 class="ci-title mh-56"><?=$value->nama?></h3>
											<div class="ci-instansi"><?=$value->instansi?></div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 ci-right">
											<div class="ci-lokasi">
												<i class="fa fa-map-marker-alt"></i> <?=$value->lokasi?>
											</div>
											<a href="tel:<?=$value->kontak?>" class="btn btn-normal btn-plonk-red"><i class="fa fa-flip-horizontal fa-phone"></i> <?=$value->kontak?></a>
										</div>
									</div>
								</div>
							</div>
						<?php }
					}else{ ?>
						<div class="panel panel-plain content-item">
							<div class="panel-body">
								<div class="row">
									<h3>Belum ada data lowongan</h3>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
			<div class="col-sm-4 col-md-3">
				<a href="#"><img src="<?=base_url()?>assets/dashboard/assets/images/iklan.png" alt="Image" class="img-fw"></a>
			</div>
		</div>
	</div>
</div>	<!--/.main-->

<style type="text/css">
.select2-container .select2-selection--single {
	height: 55px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
	top: 25%;
}
.select2-container .select2-selection--single .select2-selection__rendered {
	padding-top: 13px;
}
</style>
