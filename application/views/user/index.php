<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nama</th>
						<th>Username</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $s){ ?>
                    <tr>
						<td><?php echo $s['nama']; ?></td>
						<td><?php echo $s['username']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$s['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$s['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
