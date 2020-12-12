<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Hutang Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('utang/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tanggal</th>
						<th>Keterangan Hutang</th>
						<th>Jumlah</th>
						<th>Jatuh Tempo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($utang as $u){ ?>
                    <tr>
						<td><?php echo $u['tanggal']; ?></td>
						<td><?php echo $u['utang']; ?></td>
						<td><?php echo $u['jumlah']; ?></td>
						<td><?php echo $u['jatuh_tempo']; ?></td>
						<td>
                            <a href="<?php echo site_url('utang/edit/'.$u['id_utang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('utang/remove/'.$u['id_utang']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
