<div class="col-lg-8 <?=$order?> feature_area">

  <h2 class="section-title text-letter-spacing-sm my-0 text-dark colour-primary text-uppercase d-flex bd-highlight">
    <div class="flex-grow-1 bd-highlight"><?=$listTitle?></div>
  </h2>
  <hr class="mt-2" />

  <a onclick="window.history.back()" class="bd-highlight d-flex justify-content-end"><u><i class="fa fa-chevron-left"></i> Kembali</u></a>

  <div class="navbar">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('profil/web_kelurahan');?>">Gambaran Umum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('profil/web_kelurahan/masalah');?>">Masalah dan Potensi SDM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('profil/web_kelurahan/lembaga');?>">Lembaga</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sarana dan Prasarana</a>
        <div class="dropdown-menu">
         <a class="dropdown-item" href="<?=base_url('profil/web_kelurahan/potensi_sarpras');?>">Potensi Sarana dan Prasarana</a>
         <a class="dropdown-item" href="<?=base_url('profil/web_kelurahan/kesehatan_sarpras');?>">Kesehatan</a>
         <a class="dropdown-item" href="<?=base_url('profil/web_kelurahan/pendidikan_sarpras');?>">Pendidikan</a>
         <a class="dropdown-item" href="#">Hiburan dan Wisata</a>
         <a class="dropdown-item active" href="<?=base_url('profil/web_kelurahan/kebersihan_sarpras');?>">Kebersihan</a>
       </div>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?=base_url('profil/web_kelurahan/tempat_strategis');?>">Tempat Strategis</a>
    </li>
  </ul>
</div>

<div id="menu-kebersihan">
  <div class="row">
    <div class="col rounded-lg" style="
    background-color: #4B7447;
    padding-left: 15px;
    box-shadow: 6px 6px 4px grey;
    margin-top: 15px;
    ">
    <h4 class="tulisan-menu" style="
    font-size: 16pt;
    color: white;
    padding: 8px;
    font-weight: bold;
    ">Prasarana dan Sarana Kebersihan</h4> 
  </div>
</div>
<div class="row">
  <div class="col isi-kebersihan">
    <h5>Tempat Pembuangan Sampah (TPS)</h5>
    <p>Jumlah:</p>
    <br>
    <h5>Gerobak Sampah</h5>
    <p>Jumlah:</p>
    <br>
    <h5>Tempat Pengelolaan Sampah</h5>
    <p>Jumlah:</p>
    <br>
    <h5>Pengelolaan Sampah Lingkungan/RT</h5>
    <p>Jumlah:</p>
    <br>
    <h5>Pengelolaan Sampah Lainnya</h5>
    <p>Jumlah:</p>
  </div>
</div>

<!-- div Menu -->    
</div>

<!-- div Pembatas -->   
</div>