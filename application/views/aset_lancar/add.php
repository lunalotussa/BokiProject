<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Aset Lancar Add</h3>
            </div>
            <?php echo form_open('aset_lancar/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis</label>
						<div class="form-group">
							<select name="jenis" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_values = array(
									'Kas'=>'Kas Awal',
									'Perlengkapan'=>'Perlengkapan Awal',
									'Persediaan'=>'Persediaan Awal',
								);

								foreach($jenis_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('jenis')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai" class="control-label">Nilai</label>
						<div class="form-group">
							<input type="text" name="nilai" value="<?php echo $this->input->post('nilai'); ?>" class="form-control" id="nilai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan" value="<?php echo $this->input->post('keterangan'); ?>"></textarea>
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