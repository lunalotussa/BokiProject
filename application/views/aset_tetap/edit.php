<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Aset Tetap Edit</h3>
            </div>
			<?php echo form_open('aset_tetap/edit/'.$aset_tetap['id_aset_tetap']); ?>
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
									$selected = ($value == $aset_tetap['jenis']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $aset_tetap['tanggal']); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai" class="control-label">Nilai</label>
						<div class="form-group">
							<input type="text" name="nilai" value="<?php echo ($this->input->post('nilai') ? $this->input->post('nilai') : $aset_tetap['nilai']); ?>" class="form-control" id="nilai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lama_dimiliki" class="control-label">Lama Dimiliki</label>
						<div class="form-group">
							<input type="text" name="lama_dimiliki" value="<?php echo ($this->input->post('lama_dimiliki') ? $this->input->post('lama_dimiliki') : $aset_tetap['lama_dimiliki']); ?>" class="form-control" id="lama_dimiliki" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $aset_tetap['keterangan']); ?>
							</textarea>
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