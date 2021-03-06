<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row visible-xs">
		<ol class="breadcrumb">
			<li><a href="#">
				Home
			</a></li>
			<li class="active">Kelola Pesan Info</li>
		</ol>
	</div><!--/.row-->
	<div class="main-container mr-1">
		<?=$this->session->flashdata("alert");?>
	</div>
	<div class="panel panel-plain main-container">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-6">
					<h1>Kelola Pesan Info</h1>
					<p>klik sesuai kolom untuk melakukan penyortiran</p>
				</div>
				<div class="col-sm-8 col-md-3">
					<form class="" action="index.html" method="post">
						<div class="form-group">
							<div class="input-group plain-group">
								<input type="text" name="" value="" placeholder="Cari Pesan" class="form-control dt-search">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-4 col-md-3">
					<a href="#modal-addpesan" class="btn btn-success btn-normal btn-block" role="button" data-toggle="modal">Pesan Baru</a>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table datatable mid-v no-head">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($pesan_info as $key => $value) { 
							$subyek_teks = explode("|", $value->teks);
							?>

							<tr>
								<td>
									<input type="checkbox" class="styled-checkbox" name="check" value="1" id="check-1">
									<label for="check-1"></label>
								</td>
								<td>
									<div class="media mid-v">
										<div class="media-left media-middle">
											<div class="user-photo">
												<img src="<?=base_url().$value->foto?>" alt="Photo">
											</div>
										</div>
										<div class="media-body">
											<?=$value->nama?>
										</div>
									</div>
								</td>
								<td>
									<div class="td-pesan">
										<span class="btn btn-pesan-label btn-default"><?=$subyek_teks[0]?></span>
										<?=$subyek_teks[1]?>
									</div>
								</td>
								<td class="td-right">
									<div class="dropdown td-menu">
										<a href="#" class="dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<i class="bgicon icon-menu"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="">
											<li><a href="#" data-toggle="modal" data-target="#js-edit-pesan" data-id="<?=$value->id?>">Edit</a></li>
											<li role="separator" class="divider"></li>
											<li><a href="<?=base_url()?>delete-pesan-info/<?=$value->id?>">Hapus</a></li>
										</ul>
									</div>
								</td>
							</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>






</div>	<!--/.main-->

<!-- Modal Tambah -->
<div class="modal fade" id="modal-addpesan" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form class="input-55" action="<?=base_url()?>submit-kirim-pesan-admin" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Buat Pesan Baru</h4>
					<h5 class="modal-subtitle">Kirim sebuah pesan kepadanya</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Nama / Email Penerima</label>
								<!-- <select class="penerima" id="penerima"></select> -->
								<select class="js-example-basic-single form-control" id="penerima" name="penerima[]" style="width: 100%;" multiple="multiple"></select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Subyek Pesan</label>
								<input type="text" class="form-control" placeholder="Subyek" name="subyek">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Isi Pesan</label>
								<textarea class="form-control" placeholder="Tulis Pesan Anda" name="isi_pesan"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="pull-left btn btn-normal btn-plonk-red" data-dismiss="modal">Close</button>
					<div class="pull-right">
						<button type="button" class="btn btn-ikon btn-plonk-green"><i class="fa fa-paperclip"></i></button>
						<button type="submit" class="btn btn-normal btn-success">Kirim Pesan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="js-edit-pesan" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form class="input-55" action="<?=base_url()?>submit-update-pesan-info" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Edit Pesan</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Nama / Email penerima</label>
								<input type="hidden" id="id-pesan-info" name="id_pesan_info" readonly="">
								<input type="hidden" id="id-pengguna" name="id_pengguna" readonly="">
								<input type="text" class="form-control" id="nama-penerima-pesan-info" readonly="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Subyek Pesan</label>
								<input type="text" class="form-control" placeholder="Subyek" name="subyek" id="subyek-pesan-info">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Isi Pesan</label>
								<textarea class="form-control" placeholder="Tulis Pesan Anda" name="isi_pesan" id="isi-pesan-info"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="pull-left btn btn-normal btn-plonk-red" data-dismiss="modal">Close</button>
					<div class="pull-right">
						<button type="button" class="btn btn-ikon btn-plonk-green"><i class="fa fa-paperclip"></i></button>
						<button type="submit" class="btn btn-normal btn-success">Kirim Pesan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	// initialization untuk select2
	$(document).ready(function() {	
		$("#penerima").select2({
			ajax: {
				url: '<?=base_url()?>Admin/cariNama/',
				dataType: 'json',
				delay: 1000,
				data: function (term, page) {
					return {
					term: term, // search term
					page: 10
				};
			},
			processResults: function (data, page) {
				// console.log(data);
				return {
					results: data
				};
			},
			cache: true
		},
		escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
		minimumInputLength: 1
	});

    $('#js-edit-pesan').on('show.bs.modal', function (event) {
    	var button = $(event.relatedTarget);
    	var id_pesan_info = button.data('id');
    	$.get(
    		"<?=base_url()?>get-pesan-info/"+id_pesan_info,
    		function (res) {
    			res = JSON.parse(res);
    			$("#id-pesan-info").val(res[0].id_direct_message)
    			$("#id-pengguna").val(res[0].id_pengguna)
    			$("#nama-penerima-pesan-info").val(res[0].nama_pengguna)
    			$("#subyek-pesan-info").val(res[0].subyek)
    			$("#isi-pesan-info").val(res[0].isi_pesan)
    		}
    		)
    })
});
</script>

<script type="text/javascript">
	
</script>
<style type="text/css">
.select2-selection.select2-selection--multiple{
	min-height: 55px;
}
</style>