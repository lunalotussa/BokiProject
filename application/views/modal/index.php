<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Modal Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('modal/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Jumlah</th>
                        <th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($modal as $m){ ?>
                    <tr>
						<td><?php echo $m['tanggal']; ?></td>
						<td><?php echo $m['keterangan']; ?></td>
						<td><?php echo $m['jumlah']; ?></td>
                        <td><?php echo $m['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('modal/edit/'.$m['id_modal']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('modal/remove/'.$m['id_modal']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
