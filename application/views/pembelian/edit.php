<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Pembelian Edit</h3>
            </div>
			<?php echo form_open('pembelian/edit/'.$pembelian['id_pembelian']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $pembelian['tanggal']); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk" class="control-label">Produk</label>
						<div class="form-group">
							<input type="text" name="produk" value="<?php echo ($this->input->post('produk') ? $this->input->post('produk') : $pembelian['produk']); ?>" class="form-control" id="produk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kuantitas" class="control-label">Kuantitas</label>
						<div class="form-group">
							<input type="text" name="kuantitas" value="<?php echo ($this->input->post('kuantitas') ? $this->input->post('kuantitas') : $pembelian['kuantitas']); ?>" class="form-control" id="kuantitas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga_satuan" class="control-label">Harga Satuan</label>
						<div class="form-group">
							<input type="text" name="harga_satuan" value="<?php echo ($this->input->post('harga_satuan') ? $this->input->post('harga_satuan') : $pembelian['harga_satuan']); ?>" class="form-control" id="harga_satuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo ($this->input->post('total') ? $this->input->post('total') : $pembelian['total']); ?>" class="form-control" id="total" readonly/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label"></label>
						<div class="form-group">
							<input type="button" name="button" id="button1" onclick="myfunction()" value="Hitung Total" class="btn btn-primary">
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
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