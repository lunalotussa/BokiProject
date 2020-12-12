<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Aset Lancar Edit</h3>
            </div>
			<?php echo form_open('aset_lancar/edit/'.$aset_lancar['id_aset_lancar']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis</label>
						<div class="form-group">
							<!-- <select name="jenis" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_values = array(
									'Kas'=>'Kas',
									'Piutang'=>'Piutang',
									'Perlengkapan'=>'Perlengkapan',
									'Persediaan'=>'Persediaan',
								);

								foreach($jenis_values as $value => $display_text)
								{
									$selected = ($value == $aset_lancar['jenis']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select> -->
							<input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $aset_lancar['jenis']); ?>" class="form-control" id="jenis" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $aset_lancar['jumlah']); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai" class="control-label">Nilai</label>
						<div class="form-group">
							<input type="text" name="nilai" value="<?php echo ($this->input->post('nilai') ? $this->input->post('nilai') : $aset_lancar['nilai']); ?>" class="form-control" id="nilai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo ($this->input->post('total') ? $this->input->post('total') : $aset_lancar['total']); ?>" class="form-control" id="total" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $aset_lancar['keterangan']); ?>
							</textarea>
						</div>
					</div>
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
    </div>
</div>
<script type="text/javascript">
	function myfunction() {
	  var first = document.getElementById("nilai").value;
	  var second = document.getElementById("jumlah").value;
	  var answer = parseFloat(first) * parseFloat(second);

	  var textbox3 = document.getElementById('total');
	  textbox3.value = answer;
	}
</script>