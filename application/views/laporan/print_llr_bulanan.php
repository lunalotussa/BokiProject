<html>
<head>
  <title>Laporan Laba Rugi</title>
</head>
<body>
<h3 style="text-align: center;">LAPORAN LABA RUGI BULANAN</h3>
<h4 style="text-align: center;">Toko <?php echo $nama;?></h4>
<p style="text-align: center;"><b>Untuk Periode Yang Berakhir Pada Bulan <?php echo date("F Y") . "<br>";?></b></p>

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
  <?php
  $sql    ="SELECT SUM(total) as total_penjualan from penjualan WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $a) {
  ?>
  <th align="left">*Penjualan</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo "Rp ".number_format($a->total_penjualan, 2, ",", "."); ?></th>
</tr>
 <?php }} ?>
<tr>
  <th align="left"></th>
  <th><b>(-HPP)</b></th>

  <!--select aset lancar-->
  <?php
  $sql    ="SELECT * from aset_lancar WHERE id_user=$id_user AND jenis='Persediaan'";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $b) {
    $nilai_aset  = $b->nilai;
    $jumlah_aset = $b->jumlah;
  ?>
  <th></th><?php }} ?>

  <!--sum total pengeluaran-->
  <?php
  $sql1   ="SELECT COUNT(total) as jumlah_persediaan from pengeluaran WHERE id_user=$id_user AND jenis='Persediaan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query1  = $this->db->query($sql1);
  if ($query1->num_rows() > 0) {
  foreach ($query1->result() as $z) {
    $jumlah_persediaan = $z->jumlah_persediaan;
    if ($jumlah_persediaan==0) {
        $total_pengeluaran = 0;
    }else{
        $sql    ="SELECT SUM(total) as total_pengeluaran from pengeluaran WHERE id_user=$id_user AND jenis='Persediaan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
        $query  = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $b) {
          $total_pengeluaran = $b->total_pengeluaran;
      }}
    }
  }}
  ?>
  <th></th>

  <!--sum qty pengeluaran-->
  <?php
  $sql1   ="SELECT COUNT(total) as jumlah_persediaan from pengeluaran WHERE id_user=$id_user AND jenis='Persediaan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query1  = $this->db->query($sql1);
  if ($query1->num_rows() > 0) {
  foreach ($query1->result() as $x) {
    $jumlah_persediaan = $x->jumlah_persediaan;
    if ($jumlah_persediaan==0) {
        $qty_pengeluaran = 0;
    }else{
        $sql    ="SELECT SUM(kuantitas) as qty_pengeluaran from pengeluaran WHERE id_user=$id_user AND jenis='Persediaan' AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
        $query  = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $e) {
          $qty_pengeluaran = $e->qty_pengeluaran;
      }}
    }
  }}
  ?>
  <th></th>

  <!--sum qty penjualan + hitung hpp -->
  <?php
  $sql    ="SELECT SUM(kuantitas) as qty_penjualan from penjualan WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $b) {
    $qty_penjualan = $b->qty_penjualan;
    if ($jumlah_persediaan==0) {
      $hpp=0;
    }else{
    $hpp = (($nilai_aset+$total_pengeluaran)/($jumlah_aset+$qty_pengeluaran))*$qty_penjualan;
    }
    $laba_kotor = ($a->total_penjualan-$hpp);
  ?>
  <th><?php echo "Rp ".number_format($hpp, 2, ",", "."); ?></th><?php }} ?>
</tr>
<tr>
  <td align="left"></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ -</td>
</tr>
<tr>
  <th align="left">*Laba Kotor</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo "Rp ".number_format($laba_kotor, 2, ",", ".");?></th>
</tr>
<!--beban usaha-->
<tr style="width: 20%">
  <th align="left">*Beban Usaha</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
<?php
  $sql    ="SELECT * from pengeluaran WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND jenis='Beban' AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $a) {
  ?>
<tr>
  <td></td>
  <td align="left"><?php echo $a->produk;?></td>
  <td></td>
  <td></td>
  <td><?php echo "Rp ".number_format($a->total, 2, ",", ".");?></td>
  <td></td>
</tr>
<?php }} ?>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>
<!----total beban usaha-->
<?php
  $sql    ="SELECT SUM(total) as total_beban from pengeluaran WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND jenis='Beban' AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $a) {
  $beban_usaha = $a->total_beban;
  ?>
<tr style="width: 20%">
  <th></th>
  <th align="left">*Total Beban Usaha</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo "Rp ".number_format($beban_usaha, 2, ",", ".");?></th>
</tr>
<?php }} ?>
<!----beban lain-lain--->
<tr style="width: 20%">
  <th align="left">*Beban Lain-Lain</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>

<!----sum aset tetap bagunan--->
<?php
  $sql    ="SELECT SUM(penyusutan) as total_bagunan from aset_tetap WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND jenis='Bangunan' AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $a) {
?>
<tr style="width: 20%">
  <th></th>
  <th align="left">Total Penyusutan Aset Tetap (Bangunan)</th>
  <th></th>
  <th></th>
  <th align="left"><?php echo "Rp ".number_format($a->total_bagunan, 2, ",", ".");?></th>
  <th></th>
</tr>
<?php }}?>

<!----sum aset tetap non bagunan--->
<?php
  $sql    ="SELECT SUM(penyusutan) as total_nonbagunan from aset_tetap WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND jenis='Non Bangunan' AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $b) {
?>
<tr style="width: 20%">
  <th></th>
  <th align="left">Total Penyusutan Aset Tetap (Non Bangunan)</th>
  <th></th>
  <th></th>
  <th align="left"><?php echo "Rp ".number_format($b->total_nonbagunan, 2, ",", ".");?></th>
  <th></th>
</tr>
<?php }}?>

<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td>________________ +</td>
  <td></td>
</tr>

<!----sum beban operasi--->
<?php $beban_operasi = ($a->total_bagunan+$b->total_nonbagunan);?>
<tr style="width: 20%">
  <th></th>
  <th align="left">*Total Beban Operasi</th>
  <th></th>
  <th></th>
  <th align="left"><?php echo "Rp ".number_format($beban_operasi, 2, ",", ".");?></th>
  <th></th>
</tr>

<!----beban PAJAK--->
<?php
  $sql    ="SELECT SUM(total) as total_penjualan from penjualan WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE()) AND MONTH(tanggal) = MONTH(CURRENT_DATE())";
  $query  = $this->db->query($sql);
  if ($query->num_rows() > 0) {
  foreach ($query->result() as $c) {
?>
<?php $beban_pajak_tahunan = ($c->total_penjualan*(0.5/100));?>
<tr style="width: 20%">
  <th align="left">*Beban Pajak</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo "Rp ".number_format($beban_pajak_tahunan, 2, ",", ".");?></th>
</tr>
<?php }}?>
<!-----Laba Bersih----->
<tr style="width: 20%">
  <th align="left">*Laba Bersih</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo "Rp ".number_format(($laba_kotor-$beban_usaha-$beban_operasi-$beban_pajak_tahunan), 2, ",", ".");?></th>
</tr>
</table>

</body>
</html>
