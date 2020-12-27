<?php 
$this->load->view("template/css");
$this->load->view("template/head");
$this->load->view("template/sidebar");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<!--  -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-6">
				<!-- Custom Tabs -->
				<div class="card">
					<div class="card-header d-flex p-0">
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="form-group form-inline">
									<label class="col-3" for="kategori">Kategori :</label>
									<select class="form-control col-4" name="kategori" id="kategori">
										<?php foreach($kategori as $i): ?>
										<option value="<?=$i->id_kategori?>"><?=$i->kategori?></option>
										<?php endforeach ?>
									</select>
								</div>
								<table id="tableMenu" class="table table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Harga</th>
											<th>Qty</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody id="bodyMenu">
										
									</tbody>
								</table>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div><!-- /.card-body -->
				</div>
				<!-- ./card -->
			</div>
			<!-- /.col -->

			<!-- Default box -->
			<div class="card col-6">
				<form action="<?=site_url("kasir/transaksi")?>" method="post" class="card-body">
					<input type="hidden" id="counter" value="0">
                    <table id="tableKasir" class="table">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Menu</th></th>
                                <th>Harga</th></th>
                                <th>Qty</th></th>
                                <th>Subtotal</th></th>
                            </tr>
                        </thead>
						<tbody id="bodyKasir">
						
						</tbody>
                    </table>
					<div class="col-12">
						<div class="form-group form-inline float-right">
						  <label for="total">Total :</label>
						  <input type="number" class="form-control" name="total" id="total" value="0" placeholder="0">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->

		</div>
		<!-- /.row -->
		<!-- END CUSTOM TABS -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
$this->load->view("template/footer");
$this->load->view("template/js");
?>
<script>

	function kategori(){
		let kategori = $("#kategori option[value='" + $("#kategori").val() + "']").attr('value');
		let url = "<?=site_url("kasir/filterKategori")?>/"+kategori;
		$.ajax({
			url:url,
			type: "POST",
			success:function(res){
				let html = "";
				let no = 1;
				$.each(res,function(i){
					html += `<tr>
								<td>`+no+`</td>
								<td>`+res[i].nama+`</td>
								<td>Rp `+res[i].harga+`</td>
								<td width="20%"><input type="number" class="form-control" id="qty`+res[i].id_produk+`" value="1"></td>
								<td>
								<a href="javascript:void(0)" class="pilih_menu btn btn-primary"
									data-id="`+res[i].id_produk+`" data-nama="`+res[i].nama+`" data-harga="`+res[i].harga+`" data-idKategori="`+res[i].id_kategori+`" data-kategori="`+res[i].kategori+`">PILIH</a>
								</td>
							</tr>`;
					no++;
					$("#bodyMenu").html(html);
				})
			}
		})
	}

	kategori();

	$("#kategori").change(function(){
		kategori();
	})
	
	var data = [];

	$("#tableKasir").on("click",".btnDelete",function(){
		let counter = $("#counter").val();
		let id = $(this).data("id");
		let subtotal = $(this).data("subtotal");
		let total = $("#total").val();
		let id_produk = $("#id_produk"+counter).val();
		$("#total").val(parseInt(total - subtotal))
		$("#" + id).remove();
	})

	$("#tableMenu").on("click",".pilih_menu", function(){
		let counter = $("#counter").val();
		let id_produk = $(this).data("id");
		let check = data.find(x=>x==id_produk);
		data.push(id_produk);
		counter++;
		let nama = $(this).data("nama");
		let harga = $(this).data("harga");
		let kategori = $(this).data("kategori");
		let idKategori = $(this).data("idKategori");
		let total = $("#total").val();
		let qty = $("#qty"+id_produk).val();
		if (id_produk == check) {
			let qtyInput = $("#qtyInput"+id_produk).val();
			let subInput = $("#subInput"+id_produk).val();
			let resQty = parseInt(qtyInput) + parseInt(qty);
			let resSub = parseInt(subInput) + parseInt(qty * harga);
			$("#qtyText"+id_produk).text(resQty);
			$("#qtyInput"+id_produk).val(resQty);
			$("#subText"+id_produk).text(resSub);
			$("#subInput"+id_produk).val(resSub);
			$("#total").val(parseInt(total) + (qty*harga));
		}else{
			let data = `
				<tr id="data` + counter + `">
					<th>` + counter + `</th>
					<td>` + nama + `</td>
					<input type="hidden" id="id_produk`+counter+`" name="id_produk[]" value="` + id_produk + `">
					<input type="hidden" name="nama[]" value="` + nama + `">
					<td>` + harga +`</td>
					<input type="hidden" name="harga[]" value="` + harga + `">
					<td id="qtyText`+id_produk+`">` + qty + `</td>
					<input id="qtyInput`+id_produk+`" type="hidden" name="qty[]" value="` + qty + `">
					<td id="subText`+id_produk+`">` + (qty * harga) + `</td>
					<input id="subInput`+id_produk+`" type="hidden" name="subtotal[]" value="` + (qty * harga) + `">
					<td><button class="btn btn-sm btn-danger btnDelete" data-subtotal="`+(qty * harga)+`" data-id="data` + counter + `"><i class="fas fa-trash"></i></button></td>
				</tr>`;
			$("#bodyKasir").append(data);
			$("#counter").val(counter);
			$("#total").val(parseInt(total) + (qty * harga));
		}
	})
</script>