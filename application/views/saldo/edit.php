<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Saldo Edit</h3>
            </div>
			<?php echo form_open('saldo/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<?php
                        $sql1 ="SELECT * from saldo WHERE id_user=$id_user";
                        $query1 = $this->db->query($sql1);
                        if ($query1->num_rows() > 0) {
                        foreach ($query1->result() as $row) {
					?>
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $row->tanggal;?>"  class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk" class="control-label">Produk</label>
						<div class="form-group">
							<input type="text" name="produk" value="<?php echo $row->produk;?>" class="form-control" id="produk" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo $row->total;?>"  class="form-control" id="total" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Keterangan</label>
						<div class="form-group">
							<input type="text" name="keterangan" value="<?php echo $row->keterangan;?>" class="form-control" id="keterangan" />
						</div>
					<input type="hidden" name="id_user"value="<?php echo $row->id_user;?>" class="form-control" id="id_user" />
					</div>
				<?php }}?>

				<?php if ($query1->num_rows() == 0) {
				?>
					
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produk" class="control-label">Produk</label>
						<div class="form-group">
							<input type="text" name="produk" class="form-control" id="produk" value="Saldo Awal" readonly="true"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" class="form-control" id="total" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Keterangan</label>
						<div class="form-group">
							<input type="text" name="keterangan" class="form-control" id="keterangan" />
						</div>
					<input type="hidden" name="id_user"value="<?php echo $id_user;?>" class="form-control" id="id_user" />
					</div>

				<?php }?>
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