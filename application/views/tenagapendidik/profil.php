<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row visible-xs">
		<ol class="breadcrumb">
			<li><a href="#">
				Home
			</a></li>
			<li class="active">Profil Saya</li>
		</ol>
	</div><!--/.row-->

	<div class="main-container">
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-plain">
			<div class="panel-heading">
				<h1>Profil Saya</h1>
			</div>
			<div class="panel-body">
				<div class="profile-data">
					<div class="row">
						<div class="col-sm-6">
							<div class="profile-pic">
								<img src="<?=$this->session->userdata('loginSession')['foto']?>" class="img-circle" alt="Photo">
							</div>
						</div>

					</div>
					<div class="profile-meta">
						<div class="profile-name"><?=$this->session->userdata('loginSession')['nama']?></div>
						<div class="profile-email"><?=$this->session->userdata('loginSession')['email']?></div>
						<div class="profile-phone"><?=$this->session->userdata('loginSession')['no_hp']?></div>
					</div>
				</div>
				<div class="profile-dm-number">
					<table>
						<tr>
							<th><?=$dm['dm'][0]['jumlah']?></th>
							<td>DM</td>
							<td></td>
						</tr>
						<tr>
							<th><?=$dm['dm_solved'][0]['jumlah']?></th>
							<td>DM Solved</td>
							<td><span class="circle circle-green"><i class="fa fa-check"></i></span></td>
						</tr>
					</table>
				</div>
				<a href="<?=base_url()?>edit-profil-pendidik" class="btn btn-normal btn-plonk-green btn-block">Edit Profil</a>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<div class="panel panel-plain">
			<div class="panel-heading">
				<h1>Pertanyaan yang mendapat respon</h1>
			</div>
			<div class="panel-body">
				<?php
				// echo "<pre>";
				// var_dump($pertanyaan);
				// echo "</pre>";
				if ($pertanyaan !== array()) {
					foreach ($pertanyaan as $key => $value) { ?>
						<div class="profil-pertanyaan">
							<div class="p-pertanyaan">
								<?=$value->pertanyaan?>
							</div>
							<?php if ($value->komentar !== NULL) { ?>
								<div class="p-jawaban">
									<div class="media">
										<div class="media-left media-middle">
											<div class="user-photo">
												<img src="<?=base_url().$value->foto_komentator?>" alt="Photo">
											</div>
											<div class="user-nama">
												<?=$value->nama_komentator?>
												<br/>
												<?=tgl_indo(substr($value->tanggal, 0, 10),TRUE)?>
											</div>
										</div>
										<div class="media-body">
											<div class="small">Jawaban Terbaru</div>
											<?=$value->komentar?>
										</div>
									</div>
								</div>
							<?php }else{ ?>
								<div class="p-jawaban">
									<div class="media">
										<div class="media-left media-middle">
											<div class="user-photo">
											</div>
											<div class="user-nama">
												
											</div>
										</div>
										<div class="media-body">
											<div class="small">Jawaban Terbaru</div>
											Pertanyaan anda belum memiliki jawaban
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
				<?php } }else{ ?>
					<div class="profil-pertanyaan">
						<div class="p-pertanyaan">
							Anda belum memiliki kontribusi. Coba lihat dan berikan komentar anda pada beberapa pertanyaan yang ada di beranda.
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>


	</div>






</div>	<!--/.main-->
