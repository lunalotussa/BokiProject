<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Aset Lancar Listing</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th>Nilai</th>
						<th>Total</th>
                        <th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php
                        $sql    ="SELECT * from aset_lancar WHERE id_user=$id_user";
                        $query  = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $a) {
                    ?>
                    <tr>
						<td><?php echo $a->jenis; ?></td>
						<td><?php echo $a->jumlah; ?></td>
						<td><?php echo $a->nilai; ?></td>
						<td><?php echo $a->total; ?></td>
                        <td><?php echo $a->keterangan; ?></td>
						<td>
                            <a href="<?php echo site_url('aset_lancar/edit/'.$a->id_aset_lancar); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
