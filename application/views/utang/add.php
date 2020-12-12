<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Hutang Add</h3>
            </div>
            <?php echo form_open('utang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="utang" class="control-label">Keterangan Hutang</label>
						<div class="form-group">
							<input type="text" name="utang" value="<?php echo $this->input->post('utang'); ?>" class="form-control" id="utang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jatuh_tempo" class="control-label">Jatuh Tempo</label>
						<div class="form-group">
							<input type="date" name="jatuh_tempo" value="<?php echo $this->input->post('jatuh_tempo'); ?>" class="form-control" id="jatuh_tempo" />
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