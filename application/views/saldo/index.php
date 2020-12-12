<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Saldo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('saldo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Saldo</th>
						<th>Tanggal</th>
						<th>Produk</th>
						<th>Total</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($saldo as $s){ ?>
                    <tr>
						<td><?php echo $s['id_saldo']; ?></td>
						<td><?php echo $s['tanggal']; ?></td>
						<td><?php echo $s['produk']; ?></td>
						<td><?php echo $s['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('saldo/edit/'.$s['id_saldo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('saldo/remove/'.$s['id_saldo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
