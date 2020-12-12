<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Pengeluaran Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pengeluaran/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                        <th>Jenis</th>
                        <th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php
                        $sql    ="SELECT * from pengeluaran WHERE id_user=$id_user";
                        $query  = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $p) {
                    ?>
                    <tr>
						<td><?php echo $p->tanggal; ?></td>
						<td><?php echo $p->produk; ?></td>
						<td><?php echo $p->kuantitas; ?></td>
						<td><?php echo $p->harga_satuan; ?></td>
						<td><?php echo $p->total; ?></td>
                        <td><?php echo $p->jenis; ?></td>
                        <td><?php echo $p->status; ?></td>
						<td>
                            <a href="<?php echo site_url('pengeluaran/edit/'.$p->id_pengeluaran); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pengeluaran/remove/'.$p->id_pengeluaran); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
