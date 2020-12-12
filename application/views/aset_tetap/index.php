<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Aset Tetap Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('aset_tetap/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Jenis</th>
						<th>Tanggal</th>
						<th>Nilai</th>
						<th>Penyusutan</th>
						<th>Lama Dimiliki</th>
						<th>Akumulasi</th>
                        <th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php
                        $sql    ="SELECT * from aset_tetap WHERE id_user=$id_user";
                        $query  = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $a) {
                    ?>
                    <tr>
						<td><?php echo $a->jenis; ?></td>
						<td><?php echo $a->tanggal; ?></td>
						<td><?php echo $a->nilai; ?></td>
						<td><?php echo $a->penyusutan; ?></td>
						<td><?php echo $a->lama_dimiliki; ?></td>
						<td><?php echo $a->akumulasi; ?></td>
                        <td><?php echo $a->keterangan; ?></td>
						<td>
                            <a href="<?php echo site_url('aset_tetap/edit/'.$a->id_aset_tetap); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('aset_tetap/remove/'.$a->id_aset_tetap); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
