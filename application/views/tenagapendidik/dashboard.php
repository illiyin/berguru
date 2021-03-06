<style type="text/css">
	.none{
		display: none !important
	}
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row visible-xs">
		<ol class="breadcrumb">
			<li><a href="#">
				Home
			</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->


	<div class="main-container">
		<?=$this->session->flashdata('alert')?>
		
		<div class="content-filter-top">
			<div class="row">
				<div class="col-sm-7">
					<div class="big-filter">
						<div class="dropdown">
							<a href="#" data-toggle="dropdown"><span id="selected-drowpdown-pertanyaan"> </span> <i class="fa fa-chevron-down"></i></a>
							<ul class="dropdown-menu" id="dropdown-pertanyaan">
								<li><a href="#" class="per-solved-unsolved" onclick="pertanyaan('all')" id="dropdown-semua-pertanyaan">Semua Pertanyaan</a></li>
								<li><a href="#" class="per-solved-unsolved" onclick="pertanyaan('solved')" id="dropdown-solved">Solved</a></li>
								<li><a href="#" class="per-solved-unsolved" onclick="pertanyaan('unsolved')" id="dropdown-unsolved">Unsolved</a></li>
							</ul>
						</div>
					</div>
					<p class="text-muted">Solusi tanpa batas dan mudah dalam diskusi yang menyenangkan</p>
				</div>
				<div class="col-sm-5">
					<div class="content-filter-search">
						<form>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<input type="text" class="form-control" placeholder="Ketik tanpa tekan enter untuk mencari materi" id="search-bar-pertanyaan">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="content-filter-cat scrollablex" data-mcs-axis="x">
			<div class="cfc-list owl-carousel category-carousel">
				<div class="cfc-item item" id="all" onclick="kategori(this.id)">
					<div class="panel panel-plain">
						<div class="panel-body">
							<div class="bgicon icon-lists"></div>
							<h3>Semua</h3>
						</div>
					</div>
				</div>
				<?php
				foreach ($kategori as $key => $value) { ?>
				<div class="cfc-item item" id="<?=$value->id?>" onclick="kategori(this.id)">
					<div class="panel panel-plain">
						<div class="panel-body">
							<div class="bgicon <?=$value->icon?>"></div>
							<h3><?=$value->nama?></h3>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-md-9">
				<div class="content-list" id="pertanyaanByKategori">
					<!-- KONTEN -->
				</div>
			</div>

			<div class="col-sm-4 col-md-3">
				<div class="rightbar">
					
					<div class="panel panel-plain panel-loker">
						<div class="panel-heading">
							Lowongan Pekerjaan
						</div>
						<div class="panel-body">
							<ul class="loker-list">
								<?php 
								if ($lowongan !== array()) {
									foreach ($lowongan as $key => $value) { ?>
									<li>
										<a href="#" class="link-disabled">
											<div class="title"><?=$value->nama?></div>
										</a>
										<div class="meta">
											<span class="instansi"><?=$value->instansi?></span>
											<span class="lokasi"><i class="fa fa-map-marker-alt"></i><?=$value->lokasi?></span>
										</div>
									</li>
								<?php } ?>
							</ul>
							<div class="list-more">
								<a href="<?=base_url()?>karir-pendidik" class="btn btn-more btn-normal btn-plonk-blue">Muat Lebih <span class="hidden-md hidden-sm">Banyak</span></a>
							</div>
						</div>
								<?php }else{ ?>
								<h6 class="title text-center"> Data lowongan masih kosong</h6>
							</ul>
						</div>
								<?php }?>
					</div>

					<div class="panel panel-plain panel-materi">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-8">
									Materi Menarik
								</div>
								<div class="col-xs-4">
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" id="select-materi-menarik" data-selected=""></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#" id="materi-semua" class="child-select-materi" onclick="materi('semua',this)">Semua</a></li>
											<li><a href="#" id="materi-bulan_lalu" class="child-select-materi" onclick="materi('bulan_lalu',this)">Bulan Lalu</a></li>
											<li><a href="#" id="materi-bulan" class="child-select-materi" onclick="materi('bulan',this)">Bulan ini</a></li>
											<li><a href="#" id="materi-hari" class="child-select-materi" onclick="materi('hari',this)">Hari ini</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<ul class="materi-list" id="materi-menarik">
							</ul>
						</div>
					</div>
				</div>
				<a href="#"><img src="<?=base_url()?>assets/dashboard/assets/images/iklan.png" alt="Image" class="img-fw"></a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$(document).ready(function(){
		pertanyaan('all')
		kategori('all')
		$("#search-bar-pertanyaan").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$(".content-item").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
		$(".child-select-materi").click(function(e) {
		    e.preventDefault();
		});
		$('.category-carousel').owlCarousel({
		    // items: 3,
		    loop: true,
		    margin: 30,
		    nav: true,
		    dots: false,
		    navText: ['<span class="bgicon icon-arrow-left"></span>','<span class="bgicon icon-arrow-right"></span>'],
		    responsive:{
		            0:{
		                items:3
		            },
		            630:{
		                items:4
		            },
		            995:{
		                items:5
		            },
		            1200:{
		                items:7
		            }
		    }
		 });
	});

	/*
	* function untuk menampilkan dan update waktu (9 menit yang lalu) kiriman dari server
	*/
	function timeAgo() {
		var templates = {
			prefix: "",
			suffix: " yang lalu",
			seconds: "beberapa detik",
			minute: "1 menit",
			minutes: "%d menit",
			hour: "1 jam",
			hours: "%d jam",
			day: "1 hari",
			days: "%d hari",
			month: "1 bulan",
			months: "%d bulan",
			year: "1 tahun",
			years: "%d tahun"
		};
		var template = function(t, n) {
			return templates[t] && templates[t].replace(/%d/i, Math.abs(Math.round(n)));
		};

		var timer = function(time) {
			if (!time)
				return;
			time = time.replace(/\.\d+/, ""); // remove milliseconds
			time = time.replace(/-/, "/").replace(/-/, "/");
			time = time.replace(/T/, " ").replace(/Z/, " UTC");
			time = time.replace(/([\+\-]\d\d)\:?(\d\d)/, " $1$2"); // -04:00 -> -0400
			time = new Date(time * 1000 || time);

			var now = new Date();
			var seconds = ((now.getTime() - time) * .001) >> 0;
			var minutes = seconds / 60;
			var hours = minutes / 60;
			var days = hours / 24;
			var years = days / 365;

			return templates.prefix + (
				seconds < 45 && template('seconds', seconds) ||
				seconds < 90 && template('minute', 1) ||
				minutes < 45 && template('minutes', minutes) ||
				minutes < 90 && template('hour', 1) ||
				hours < 24 && template('hours', hours) ||
				hours < 42 && template('day', 1) ||
				days < 30 && template('days', days) ||
				days < 45 && template('month', 1) ||
				days < 365 && template('months', days / 30) ||
				years < 1.5 && template('year', 1) ||
				template('years', years)
				) + templates.suffix;
		};

		var elements = document.getElementsByClassName('timeago');
		for (var i in elements) {
			var $this = elements[i];
			if (typeof $this === 'object') {
				$this.innerHTML = "<span class='bgicon bgicon-clock'></span> " + timer($this.getAttribute('title') || $this.getAttribute('datetime'));
			}
		}
		// update time every minute
		setTimeout(timeAgo, 60000);
	};

	/*
	* function untuk set HTML teks di selected dropdown status pertanyaan solved, unsolved atau semua
	*/
	function pertanyaan(argument) {
		var before = $("#selected-drowpdown-pertanyaan").html()
		if (before == 'Semua Pertanyaan') {
			$("#dropdown-pertanyaan").removeClass("none")
		}else if (before == 'Solved') {
			$("#dropdown-pertanyaan").removeClass("none")
		}else if (before == 'Unsolved') {
			$("#dropdown-pertanyaan").removeClass("none")
		}

		$(".per-solved-unsolved").removeClass('none')

		if (argument == 'all') {
			$("#selected-drowpdown-pertanyaan").html("Semua Pertanyaan");
			$("#dropdown-semua-pertanyaan").addClass("none")
		}else if (argument == 'solved') {
			$("#selected-drowpdown-pertanyaan").html("Solved");
			$("#dropdown-solved").addClass("none")
		}else if (argument == 'unsolved') {
			$("#selected-drowpdown-pertanyaan").html("Unsolved");
			$("#dropdown-unsolved").addClass("none")
		}
		if (before !== " ") {
			getDataPertanyaan()
		}
	}

	/*
	* funtion untuk kirim request pertanyaan biar jadi penl-panel kecil, termasuk komponennya
	*/
	function kategori(argument) {
		$(".cfc-item").removeClass("active")
		$("#"+argument).addClass("active")
		getDataPertanyaan()
	}

	/*
	* function untuk get data pertanyaan berdsarkan status dan kategori yang dipilih
	*/
	function getDataPertanyaan() {
		var status_pertanyaan = $("#selected-drowpdown-pertanyaan").html()
		var kategori_pertanyaan = $(".cfc-item.active").attr('id')
		$.get("<?=base_url()?>get-permasalahan-by-kategori-pendidik",{kategori:kategori_pertanyaan,status:status_pertanyaan},function(data){
			data = JSON.parse(data);
			// console.log(data)
			var elementToRender = '';
			if (data.permasalahan.length != 0) {
				for (var i = data.permasalahan.length - 1; i >= 0; i--) {
					elementToRender += 
					"<div class='panel panel-plain content-item'>"+
							"<div class='panel-body'>"+
								"<div class='ci-heading'>"+
									"<div class='row'>"+
										"<div class='col-xs-9 col-md-8 col-lg-9'>"+
											"<div class='user-photo'>"+
												"<img src='<?=base_url()?>"+data.permasalahan[i].foto+"' class='img-circle' alt='Photo'>"+
											"</div>"+
											"<div class='user-nama'>"+
												data.permasalahan[i].nama_pengguna +
												"<div class='user-last-online'>"+
													"<i class='far fa-clock'></i>"+
													"<span class='timeago' title='"+data.permasalahan[i].tanggal+"'></span>"+
												"</div>"+
											"</div>";
											if (data.permasalahan[i].status == "SOLVED") {
											elementToRender += 
											"<div class='btn btn-custom btn-status-green'>"+
												"<i class='fa fa-check-circle'></i> Solved"+
											"</div>";
											}else{
											elementToRender += 
											"<div class='btn btn-custom btn-status-red'>"+
												"<i class='fa fa-times'></i> Unsolved"+
											"</div>";
											}
										elementToRender += 
										"</div>"+
										"<div class='col-xs-3 col-md-4 col-lg-3 angka-container'>"+
											"<div class='ci-angka'>"+
												"<div class='number'>"+data.permasalahan[i].jumlah_dilihat+"</div>"+
												"<div class='text'>Dilihat</div>"+
											"</div>"+
											"<div class='ci-angka'>"+
												"<div class='number'>"+data.permasalahan[i].jumlah_komen+"</div>"+
												"<div class='text'>Jawaban</div>"+
											"</div>"+
										"</div>"+
									"</div>"+
								"</div>"+
								"<h3 class='ci-title'>"+
									data.permasalahan[i].teks+
								"</h3>"+
								"<div class='ci-footer'>"+
									"<div class='row'>"+
										"<div class='col-xs-12 col-md-8 col-lg-9'>";
											if (data.permasalahan[i].komentator.length > 0) {
												elementToRender +=
												"<span class='text-muted'>Penjawab</span>";
											}
											for (j in data.permasalahan[i].komentator) {
											elementToRender += 
											"<div class='user-photo'>"+
												"<img src='<?=base_url()?>"+data.permasalahan[i].komentator[j].foto+"' class='img-circle' alt='Photo' title='"+data.permasalahan[i].komentator[j].nama+"'>"+
											"</div>";
											}
											if(data.permasalahan[i].remaining_penjawab !== 0){
											elementToRender +=
												"<div class='user-more'>"+data.permasalahan[i].remaining_penjawab+"+</div>";
											}
											
											elementToRender +=
										"</div>"+
									"</div>"+
								"</div>"+
							"</div>"+
						"</div>";
				}
				timeAgo();
			}else{
				elementToRender += 
					'<div class="panel panel-plain content-item">'+
						'<div class="panel-body">'+
							'<div class="row">'+
								'<div class="col">'+
									'<h3 class="ci-title text-center">Belum ada pertanyaan di kategori yang anda tentukan</h3>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>';
			}
			$("#pertanyaanByKategori").html(elementToRender);
			timeAgo();
		});
	}

	/*
	* funtoin untuk menampilkan materi disertai sorting harian bulan. saya copas dari halaman home untuk kategori sortingnya
	*/

	// function untuk menmapilkan materi disertai sorting per hari dan perbulan
	function materi(argument) {
		$('#select-materi-menarik').html($('#materi-'+argument).html()+'<i class="fa fa-chevron-down"></i>')
		$('#select-materi-menarik').data('selected',argument)

		$.get("<?=base_url()?>get-materi",{limit : 7, jangka_waktu:$('#select-materi-menarik').data('selected')},function( res ) {
			res = JSON.parse(res)
			elementToRender = ''
			$('#materi-menarik').html(elementToRender);
			if (res.data.length === 0) {
				elementToRender += 
					'<h6 class="title text-center"> Data materi masih kosong untuk kategori yang anda pilih</h6>'
			}else{
				for (var i = 0; i < res.data.length; i++) {
					elementToRender += 
						'<li>'+
							'<div class="materi-ikon materi-blue hidden-sm"><i class="fa fa-flask"></i></div>'+
							'<div class="materi-data">'+
								'<a href="#" class="link-disabled">'+
									'<div class="title">'+res.data[i].nama+'</div>'+
								'</a>'+
								'<div class="meta">'+
									'<span class="author">'+res.data[i].siapa_terakhir_edit+'</span>'+
									'<span class="downloaded"><i class="fa fa-cloud-download-alt"></i> '+res.data[i].jumlah_diunduh+'</span>'+
								'</div>'+
							'</div>'+
						'</li>'
				}
				elementToRender += 
					'<div class="list-more">'+
						'<a href="<?=base_url()?>materi-pendidik" class="btn btn-more btn-normal btn-plonk-blue">Muat Lebih <span class="hidden-md hidden-sm">Banyak</span></a>'+
					'</div>'
			}
			$('#materi-menarik').html(elementToRender);
			$(".link-disabled").click(function(e) {
				e.preventDefault();
			});
		});

	}

	materi('semua')
</script>