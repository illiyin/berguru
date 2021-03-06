<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row visible-xs">
		<ol class="breadcrumb">
			<li><a href="#">
				Home
			</a></li>
			<li class="active">Pertanyaan Detail</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="main-container">
		<?=$this->session->flashdata("jawab");?>
		<div class="row">
			<div class="col-sm-8 col-md-9">
				<div class="panel panel-plain">
					<div class="panel-nav">
						<div class="row">
							<div class="col-sm-6">
								<!-- <a href="mahasiswa-pertanyaan-saya.html" class="panel-link"><i class="fa fa-chevron-left"></i> Detail Pertanyaan</a> -->
								<a href="<?=base_url()?>dashboard-mahasiswa" class="panel-link"><i class="fa fa-chevron-left"></i> Dashboard</a>
							</div>
							<div class="col-sm-6 text-right">
								<?php
								if ($pertanyaan[0]->beku == 'ACTIVE') { ?>
									<a href="<?=base_url()?>pertanyaan-jawab-mahasiswa/<?=$pertanyaan[0]->id?>" class="btn btn-normal btn-success">Bantu Jawab</a>
								<?php }else{?>
									<a class="btn btn-normal btn-success" disabled="" data-toggle="tooltip" data-placement="top" title="Permasalahan dibekukan oleh admin.">Bantu Jawab</a>
								<?php }
								?>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="detper-pertanyaan">
							<?=$pertanyaan[0]->teks?>
						</div>
						<div class="detper-meta">
							<div class="row">
								<div class="col-md-8">
									<div class="td-meta">
										<i class="far fa-clock"></i> <?=date('M, d Y',strtotime($pertanyaan[0]->tanggal))?>
										<i class="fa fa-circle"></i>
										<i class="far fa-comment"></i> <?=$pertanyaan[0]->jumlah_komen?>
										<i class="fa fa-circle"></i>
										<i class="far fa-eye"></i> <?=$pertanyaan[0]->jumlah_dilihat?>
									</div>
								</div>
								<div class="col-md-4 text-right">
									<!-- <span class="btn btn-custom btn-status-green"><i class="fa fa-check-circle"></i> Solved</span> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-plain">
					<div class="panel-body">
						<div class="detper-jawaban-heading">
							<div class="row">
								<div class="col-sm-6">
									<i class="fa fa-unlock"></i> <?=sizeof($jawaban)?> Jawaban
								</div>
								<div class="col-sm-6">

									<?php
									if ($penjawab !== array()) {
										?>
										<span class="text-muted">Penjawab</span>
										<?php 
									}
									foreach ($penjawab as $key => $value) { ?>
										<div class="user-photo">
											<img src="<?=base_url().$value->foto?>" class="img-circle" alt="Photo" title="<?=$value->nama?>">
										</div>
									<?php } ?>

									<?php if ($remaining_penjawab !== 0) { ?>
										<div class="user-more"> <?=$remaining_penjawab?></div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="detper-jawaban-list">
							<?php
							foreach ($jawaban as $key => $value) { ?>
								<div class="detper-jawaban-item">
									<div class="detper-jawaban">
										<?=$value->teks?>
									</div>
									<div class="detper-jawaban-footer">
										<div class="row">
											<div class="col-sm-6 col-md-8 col-lg-4">
												<div class="user-photo">
													<img src="<?=base_url($value->foto)?>" class="img-circle" alt="Photo">
												</div>
												<div class="user-nama">
													<?=$value->siapa?>
												</div>
											</div>
											<div class="col-sm-6 col-md-4 col-lg-8 text-right">
												<span class="text-muted">Review Jawaban</span>
												<div class="rate-result"  data-score="<?=$value->rating?>"></div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>

			<div class="col-sm-4 col-md-3">
				<a href="#"><img src="<?=base_url()?>assets/dashboard/assets/images/iklan.png" alt="Image" class="img-fw"></a>
			</div>
		</div>
	</div>
</div>
<!--/.main-->