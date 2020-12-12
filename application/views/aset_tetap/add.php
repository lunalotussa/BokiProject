<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Aset Tetap Add</h3>
            </div>
            <?php echo form_open('aset_tetap/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis</label>
						<div class="form-group">
							<select name="jenis" class="form-control">
								<?php 
								$jenis_values = array(
									'Bangunan'=>'Bangunan',
									'Non Bangunan'=>'Non Bangunan',
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
						<label for="tanggal" class="control-label">Tanggal Perolehan (Tanggal Dibeli/Mulai Dipakai)</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai" class="control-label">Nilai (Harga Saat Membeli)</label>
						<div class="form-group">
							<input type="text" name="nilai" value="<?php echo $this->input->post('nilai'); ?>" class="form-control" id="nilai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lama_dimiliki" class="control-label">Lama Dimiliki</label>
						<div class="form-group">
							<input type="text" name="lama_dimiliki" value="<?php echo $this->input->post('lama_dimiliki'); ?>" class="form-control" id="lama_dimiliki" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan" value="<?php echo $this->input->post('keterangan'); ?>"></textarea>
						</div>
					</div>
					<input type="hidden" name="id_user" value="<?php echo $id_user;?>">
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