<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Penjualan Edit</h3>
            </div>
			<?php echo form_open('penjualan/edit/'.$penjualan['id_penjulan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-3">
						<label for="date" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $penjualan['tanggal']); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="date" class="control-label">Tanggal Jatuh Tempo (Isi Jika Hutang)</label>
						<div class="form-group">
							<input type="date" name="tanggal_japo" value="<?php echo ($this->input->post('tanggal_japo') ? $this->input->post('tanggal_japo') : $penjualan['tanggal_japo']); ?>" class="form-control" id="tanggal_japo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk" class="control-label">Produk</label>
						<div class="form-group">
							<input type="text" name="produk" value="<?php echo ($this->input->post('produk') ? $this->input->post('produk') : $penjualan['produk']); ?>" class="form-control" id="produk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kuantitas" class="control-label">Kuantitas</label>
						<div class="form-group">
							<input type="text" name="kuantitas" value="<?php echo ($this->input->post('kuantitas') ? $this->input->post('kuantitas') : $penjualan['kuantitas']); ?>" class="form-control" id="kuantitas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga_satuan" class="control-label">Harga Satuan</label>
						<div class="form-group">
							<input type="text" name="harga_satuan" value="<?php echo ($this->input->post('harga_satuan') ? $this->input->post('harga_satuan') : $penjualan['harga_satuan']); ?>" class="form-control" id="harga_satuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo ($this->input->post('total') ? $this->input->post('total') : $penjualan['total']); ?>" class="form-control" id="total" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis" class="control-label">Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<?php 
								$jenis_values = array(
									'Lunas'=>'Lunas',
									'Belum Lunas'=>'Belum Lunas',
								);

								foreach($jenis_values as $value => $display_text)
								{
									$selected = ($value == $penjualan['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $penjualan['keterangan']); ?>
							</textarea>
						</div>
					</div>
					<input type="hidden" name="id_user" value="<?php echo $id_user;?>">
				</div>
			</div>
			<div class="box-footer">
				<input type="button" name="button" id="button1" onclick="myfunction()" value="Hitung Total" class="btn btn-primary">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>

		<div class="alert alert-warning">
				<div class="alert-container" style="width:100%;">
					<i class="fa fa-info-circle"></i>&nbsp;
				    <b> CATATAN : </b>
				    <br>
				    1. Isi Produk, Kuantitas, Harga Satuan, dan Keterangan <br>
				    2. Pilih status "Lunas" atau "Belum Lunas" <br>
				    3. Isikan Tanggal Jatuh Tempo jika "Belum Lunas" dan isikan Tanggal saja jika sudah "Lunas"<br>
				    4. Untuk menampilkan "Harga Total" klik tombol biru "Hitung Total" setelah mengisi Harga Satuan & Kuantitas <br>
				    5. Jangan lupa klik "Save" untuk menyimpan
				</div>
			</div>

    </div>
</div>
<script type="text/javascript">
	function myfunction() {
	  var first = document.getElementById("kuantitas").value;
	  var second = document.getElementById("harga_satuan").value;
	  var answer = parseFloat(first) * parseFloat(second);

	  var textbox3 = document.getElementById('total');
	  textbox3.value = answer;
	}
</script>