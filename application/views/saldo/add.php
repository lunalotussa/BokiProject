<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Saldo Add</h3>
            </div>
            <?php echo form_open('saldo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk" class="control-label">Produk</label>
						<div class="form-group">
							<input type="text" name="produk" value="<?php echo $this->input->post('produk'); ?>" class="form-control" id="produk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" />
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