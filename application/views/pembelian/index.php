<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Pembelian Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pembelian/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tanggal</th>
						<th>Produk</th>
						<th>Kuantitas</th>
						<th>Harga Satuan</th>
						<th>Total</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pembelian as $p){ ?>
                    <tr>
						<td><?php echo $p['tanggal']; ?></td>
						<td><?php echo $p['produk']; ?></td>
						<td><?php echo $p['kuantitas']; ?></td>
						<td><?php echo $p['harga_satuan']; ?></td>
						<td><?php echo $p['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('pembelian/edit/'.$p['id_pembelian']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pembelian/remove/'.$p['id_pembelian']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
