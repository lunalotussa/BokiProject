<html>
<head>
  <title>Laporan Posisi Keuangan</title>
</head>
<body>
<h3 style="text-align: center;">LAPORAN POSISI KEUANGAN BULANAN</h3>
<h4 style="text-align: center;">Toko <?php echo $nama;?></h4>
<p style="text-align: center;"><b>Per Tanggal <?php echo date("d-m-Y");?></b></p>
<CENTER><a href="<?php echo base_url('index.php/LPK/cetak_bulanan'); ?>">Cetak Data</a></CENTER><br>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 0px solid black;
    padding: 8px;
}
</style>

<table border="0">
<tr>
  <th align="left">*Aset</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<tr>
  <th align="left">*Aset Lancar</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<?php
  $sql    ="SELECT * from aset_lancar WHERE id_user=$id_user";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $a) {
  ?>
<!---start aset lancar-->
<tr style="width: 20%">
  <td></td>
  <td><?php echo $a->jenis;?></td>
  <td></td>
  <td></td>
  <td><?php echo "Rp ".number_format($a->total, 2, ",", "."); ?></td>
  <td></td>
</tr>
<?php
}}?>
<!---end aset lancar start sum aset lancar-->
<?php
    $sql    ="SELECT SUM(total) as total_aset FROM aset_lancar WHERE id_user=$id_user";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $a)
    {
?>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td><b>Total Aset Lancar</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($a->total_aset, 2, ",", "."); ?></b></td>
</tr>

<?php
    $sql    ="SELECT SUM(total) as total_piutang FROM penjualan WHERE id_user=$id_user AND status='Belum Lunas' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $b)
    {
    $total = $a->total_aset + $b->total_piutang;
?>
<tr>
  <td></td>
  <td><b>Total Piutang Dalam Usaha Berjalan</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($b->total_piutang, 2, ",", "."); ?></b></td>
</tr>
<?php }} ?>
<!---start aset tetap--->
<tr>
  <th align="left">*Aset Tetap</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<tr>
  <td></td>
  <td>Keterangan</td>
  <td>Nilai</td>
  <td>Penyusutan</td>
  <td>Total</td>
  <td></td>
</tr>
<?php
    $sql    ="SELECT * FROM aset_tetap WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $a)
    {
?>
<tr>
  <td></td>
  <td><?php echo $a->keterangan;?></td>
  <td><?php echo "Rp ".number_format($a->nilai, 2, ",", "."); ?></td>
  <td><?php echo "Rp ".number_format($a->penyusutan, 2, ",", "."); ?></td>
  <td><?php echo "Rp ".number_format(($a->nilai - $a->penyusutan), 2, ",", "."); ?></td>
  <td></td>
</tr>
<?php } ?>
<!--------end aset tetap & start total aset tetap---------->
<!---end aset lancar start sum aset lancar-->
<?php
    $sql    ="SELECT SUM(nilai-penyusutan) as total_tetap FROM aset_tetap WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $c)
    {
?>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td><b>Total Aset Tetap</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($c->total_tetap, 2, ",", "."); ?></b></td>
</tr>
<?php }?>
<tr>
  <?php $aktiva = $total+$c->total_tetap; ?>
  <td></td>
  <td><b>Total Aset Aktiva</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($aktiva, 2, ",", "."); ?></b></td>
</tr>
<tr>
  <th align="left">*Liabilitas/Hutang</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<!----start hutang---->
<?php
    $sql    ="SELECT * FROM pengeluaran WHERE id_user=$id_user AND status='Belum Lunas' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $a)
    {
?>
<tr>
  <td></td>
  <td><?php echo $a->produk;?></td>
  <td></td>
  <td></td>
  <td><?php echo "Rp ".number_format($a->total, 2, ",", "."); ?></td>
  <td></td>
</tr>
<?php } ?>
<?php
    $sql    ="SELECT SUM(total) as hutang FROM pengeluaran WHERE id_user=$id_user AND status='Belum Lunas' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $d)
    {
?>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td><b>Total Liabilitas</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($d->hutang, 2, ",", "."); ?></b></td>
</tr>
<?php }?>
<!----end hutang---->
<!----start modal---->
<tr>
  <th align="left">*Ekuitas/Modal</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<?php
    $sql    ="SELECT SUM(jumlah) as penambahan FROM modal WHERE id_user=$id_user AND status='Penambahan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $a)
    {
?>
<tr>
  <td></td>
  <td>Total Penambahan Modal</td>
  <td></td>
  <td></td>
  <td><?php echo "Rp ".number_format($a->penambahan, 2, ",", "."); ?></td>
  <td></td>
</tr>
<?php 
    $sql    ="SELECT SUM(jumlah) as pengurangan FROM modal WHERE id_user=$id_user AND status='Pengurangan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
    $query  = $this->db->query($sql);
    foreach ($query->Result() as $b)
    {
?>
<tr>
  <td></td>
  <td>Total Pengurangan Modal</td>
  <td></td>
  <td></td>
  <td><?php echo "Rp ".number_format($b->pengurangan, 2, ",", "."); ?></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td><b>Total Ekuitas</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format(($a->penambahan-$b->pengurangan), 2, ",", ".");?></b></td>
</tr>
<?php }}?>
<!----end modal---->
<tr>
  <?php $pasiva = $d->hutang+($a->penambahan-$b->pengurangan);?>
  <td></td>
  <td><b>Total Pasiva</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b><?php echo "Rp ".number_format($pasiva, 2, ",", "."); ?></b></td>
</tr>
</table>
<?php 
if($aktiva==$pasiva){
?>
<table>
  <tr>
    <td><b>"Yey, pengelolaan keuangan Anda sudah benar, tetap setia ya membukukan keuangan bisnismu!"</b></td>
  </tr>
</table><br>
<?php }else{ ?>
<table>
  <tr>
    <td><b>Selisih : <?php echo "Rp ".number_format($aktiva-$pasiva, 2, ",", "."); ?></b></td>
  </tr>
  <tr>
    <td><b>"Opps, terdapat selisih antara Aktiva (Aset) dan Pasiva (Utang & Modal). Coba periksa kembali input transaksi Anda. Apabila selisih sama dengan jumlah Rugi/Laba, pencatatan keuangan Anda sudah benar."</b></td>
  </tr>
  <tr>
    <td><center><b>"Pencatatan Anda benar apabila selisih di atas = Laba / Rugi Bersih + Beban Pajak"</b></center></td>
  </tr>
</table>
<?php } ?>

</body>
</html>
