<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Modal Edit</h3>
            </div>
			<?php echo form_open('modal/edit/'.$modal['id_modal']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $modal['tanggal']); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<input type="text" name="keterangan" value="<?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $modal['keterangan']); ?>" class="form-control" id="keterangan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $modal['jumlah']); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis" class="control-label">Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<?php 
								$jenis_values = array(
									'Penambahan'=>'Penambahan',
									'Pengurangan'=>'Pengurangan',
								);

								foreach($jenis_values as $value => $display_text)
								{
									$selected = ($value == $modal['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
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