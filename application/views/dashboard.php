<!-- CSS for Modal Dialog -->
 
<style>
body {
    background: #eee;
    color: #333;
}
h1, p {
    text-align: center;
}
/* Opened CSS Modal */
.btn {
    display: inline-block;
    text-decoration: none;
    margin-right: 10px;
    border-radius: 5px;
    padding: 8px 10px;
    background: #15C5FF;
    color: #FFF !important;
}
 
.btn:hover {
    background: #40C400;
}
 
/* Unopened CSS Modal */
.cssmodal {
    display: flex;
    position: fixed;
    left: 0;
    top: -100%;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
    opacity: 0;
    -webkit-transition: top 0s .5s, opacity .5s 0s;
    transition: top 0s .5s, opacity .5s 0s;
}
 
/* Opened CSS Modal */
.cssmodal:target {
    top: 0;
    opacity: 1;
    -webkit-transition: none;
    transition: none;
}
 
/* CSS Modal content */
.cssmodal figure {
    width: 95%;
    max-width: 600px;
    position: relative;
    padding: 1.5em;
    opacity: 0;
    background-color: #fff;
    -webkit-transition: opacity .5s;
    transition: opacity .5s;
}
 
/* Dialog modal style */
.cssmodal.dialog figure {
    background: #fff;
    border-radius: 5px;
    padding-top: 10px;
}
 
/* Dialog modal h2 style */
.cssmodal.dialog figure h2 {
    margin-top: 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #eee;
}
 
/* CSS Modal content when opened */
.cssmodal:target figure {
    opacity: 1;
}
 
/* style for small x link inside dialog modal */
.cssmodal.dialog .smallclose {
    text-decoration: none;
    position: absolute;
    right: 6px;
    top: 0px;
    font-size: 36px;
}
 
/* veil that covers page when CSS Modal is open */
.cssmodal .veil {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    background-color: rgba(0,0,0,.7);
    content: "";
    cursor: default;
    visibility: hidden;
    -webkit-transition: all .5s;
    transition: all .5s;
}
 
/* big "x" at the upper right corner inside veil */
.cssmodal .veil::before, .cssmodal .veil::after {
    content: "";
    display: block;
    position: fixed;
    width: 50px;
    height: 6;
    background: white;
    top: 50%;
    cursor: pointer;
    text-indent: -1000px;
    z-index: 10;
    top: 30px;
    right: 5px;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transition: all .5s;
    transition: all .5s;
}
 
/* veil style when CSS Modal is open */
.cssmodal:target .veil {
    visibility: visible;
}
 
/* animate veil "x"  when CSS Modal is open */
.cssmodal:target .veil::before, .cssmodal:target .veil::after {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
 
.cssmodal:target .veil::after {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
a {
    color: #00f;
    text-decoration: none;
}
a:hover {
    color: #f00;
}
</style>
 
<!-- End of CSS Modal Dialog -->
<div class="row">
    <div class="col-md-12">
        <!-- <div class="box"> -->
          <a href="<?php echo site_url('LLR');?>">
          <div class="col-lg-4 col-8">
            <div class="box-header">
                <div class="alert alert-warning">
                <div class="alert-container" style="width:100%;">
                <!-- <i class="fa fa-info-circle"></i> -->
                <img src=<?php echo site_url('resources/pictures/earnings.png');?> style="width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                <font size="4"><b> LAPORAN LABA RUGI </b></font>
                </div>
              </div>
            </div>
          </div>
          </a>
       <!--  </div> -->
       <!-- <div class="box"> -->
          <a href="<?php echo site_url('LPK');?>">
          <div class="col-lg-4 col-8">
            <div class="box-header">
                <div class="alert alert-warning">
                <div class="alert-container" style="width:100%;">
                <!-- <i class="fa fa-info-circle"></i> -->
                <img src=<?php echo site_url('resources/pictures/money-bag.png');?>  style="width: 50px;">
                <font size="4"><b> LAPORAN POSISI KEUANGAN </b></font>
                </div>
              </div>
            </div>
          </div>
          </a>
       <!--  </div> -->
       <!-- <div class="box"> -->
          <a href="#example1">
          <div class="col-lg-4 col-8">
            <div class="box-header">
                <div class="alert alert-warning">
                <div class="alert-container" style="width:100%;">
                <!-- <i class="fa fa-info-circle"></i> -->
                <img src=<?php echo site_url('resources/pictures/taxes.png');?> style="width: 50px;">
                <font size="4"><b> PERKIRAAN PAJAK USAHA </b></font>
                </div>
              </div>
            </div>
          </div>
          </a>
       <!--  </div> -->
       <center>
       <img src=<?php echo site_url('resources/pictures/dash.jpg');?> style="width: 70%;">
       </center>
       <!-- Modal Dialog 1 Open -->
 
    <div class="cssmodal" id="example1">
        <a href="#" class="veil"></a>
            <figure style="background: #F39C12">
              <center><img src=<?php echo site_url('resources/pictures/taxes2.png');?> style="width: 20%;"></center>
              <center><h3><b>HAI! INI PERKIRAAN PAJAK KAMU!</b></h3></center><br>
              <?php
              $sql    ="SELECT SUM(total) as total_penjualan from penjualan WHERE id_user=$id_user AND YEAR(tanggal) = YEAR(CURRENT_DATE())";
              $query  = $this->db->query($sql);
              if ($query->num_rows() > 0) {
              foreach ($query->result() as $c) {
              $beban_pajak_tahunan = ($c->total_penjualan*(0.5/100));
              $beban_pajak_bulanan = ($c->total_penjualan*(0.5/100)*1/12);
              ?>
              <p><font size="4"><b>Perkiraan Pajak Bulan Ini : <?php echo "Rp ".number_format($beban_pajak_bulanan, 2, ",", ".");?></b></font></p><br>
              <p><font size="4"><b>Perkiraan Pajak Tahun Ini : <?php echo "Rp ".number_format($beban_pajak_tahunan, 2, ",", ".");?></b></font></p>
              <?php }}?>
              <br>
              <center><a href="#" title="Tutup Modal Box">Tutup</a></center>
            </figure>
    </div>
    </div>
</div>