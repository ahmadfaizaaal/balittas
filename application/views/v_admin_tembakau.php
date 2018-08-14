<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Balittas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>/bootstrap/css/style.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>/bootstrap/css/styleadmin.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>/bootstrap/css/simple-sidebar.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url() ?>/bootstrap/img/Logo-Kementerian-Pertanian.png" rel="shortcut icon"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <!-- <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">                   
                    <a href="#home" class="navbar-brand halaman">
                        <img src="<?php echo base_url();?>/item img/logobalittas.png" width="270" style="margin-right:-90px; padding-right: 25px;">
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar" aria-expanded="false" style="margin-top:25px; margin-right: -20px;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="margin:-5px 0px 0px 0px; width:280px; background-color:#fece00;">
                                <div class="container-fluid">
                                    <div class="col-sm-6 col-lg-6">
                                        <li><a href="<?php echo base_url();?>admin/tembakau" class="halaman">Tembakau</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#JarakPagar" class="halaman">Jarak Pagar</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#JarakKepyar" class="halaman">Jarak Kepyar</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Kapas" class="halaman">Kapas</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Kapuk" class="halaman">Kapuk</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <li><a href="#Kenaf" class="halaman">Kenaf</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Rami" class="halaman">Rami</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Rosela" class="halaman">Rosela</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Tebu" class="halaman">Tebu</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                        <li><a href="#Wijen" class="halaman">Wijen</a></li>
                                        <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li> <a href="#login" data-toggle="modal" data-target="#login-modal" class="halaman">Welcome Admin</a></li>
                        <li> <a href="index.html#layanan" class="halaman">Logout</a></li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="bar" style="margin-top:5px; margin-left: -60px; margin-right: -60px; border:0;">
                    <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="background-color:#57bb82;">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#Welcome" class="halaman">Tembakau</a></li>
                                <li><a href="#JarakPagar" class="halaman">Jarak Pagar</a></li>
                                <li><a href="#JarakKepyar" class="halaman">Jarak Kepyar</a></li>
                                <li><a href="#Kapas" class="halaman">Kapas</a></li>
                                <li><a href="#Kapuk" class="halaman">Kapuk</a></li>
                                <li><a href="#Kenaf" class="halaman">Kenaf</a></li>
                                <li><a href="#Rami" class="halaman">Rami</a></li>
                                <li><a href="#Rosela" class="halaman">Rosela</a></li>
                                <li><a href="#Tebu" class="halaman">Tebu</a></li>
                                <li><a href="#Wijen" class="halaman">Wijen</a></li>
                            </ul>
                        </li>
                        <li> <a href="#login" data-toggle="modal" data-target="#login-modal" class="halaman">Welcome Admin</a></li>
                        <li> <a href="index.html#layanan" class="halaman">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>     -->

<!-- DATA VARIETAS -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px; margin-top: 100px;">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Varietas</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahtembakau" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Nama Varietas</th>                                
                                <th>Spesifikasi</th>                              
                                <th>Tanggal Pelepasan</th>                              
                                <th>File Gambar</th>
                                <th>File SK</th>                                
                                <th>Tanggal Upload</th>                                
                                <th>Waktu Upload</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;                                          
                            foreach ($varietas_tembakau as $row) {                                
                         ?>
                            <tr>                                 
                                <?php 
                                    $atr = array();
                                    $ket = array();
                                    $count1 = 0;   
                                    $count2 = 0;                                                                    
                                    foreach ($detail_varietas as $value) {  
                                        if ($row['id_varietas']==$value['id_varietas']) {
                                            $atr[$count1] = $value['nama_atribut'];
                                            $ket[$count2] = $value['detail_value'];                             

                                        $count1++;   
                                        $count2++;                                      
                                        }

                                    }

                                    $id = $row['id_varietas'];                                     
                                    $nama = $row['nama_varietas'];
                                    $gmbr = $row['file_gambar'];
                                    $sk = $row['file_SK'];
                                    $tgl = $row['tanggal_pelepasan'];
                                    $nar = $row['narasi'];
                                    $idDes = $row['id_deskripsi_varietas'];

                                                                                            
                                 ?>                                 
                                <td><?php echo $no; ?></td>                                
                                <td><?php echo "$row[nama_varietas]"; ?></td>                              
                                <td>
                                <script>                                   
                                    window['atr' + <?php echo $no; ?>] = [
                                    <?php
                                        for ($i=0; $i < $count1-1; $i++) {                                              
                                            echo '"'.$atr[$i].'",';
                                         }
                                         echo '"'.$atr[$count1-1].'"'; 
                                    ?>                                    
                                    ];                                    
                                    window['val' + <?php echo $no; ?>] = [
                                    <?php
                                        for ($i=0; $i < $count2-1; $i++) {                                              
                                            echo '"'.$ket[$i].'",';
                                         }
                                         echo '"'.$ket[$count2-1].'"'; 
                                    ?> 
                                    ];
                                    
                                </script>
                                    <a href="#spesifikasi" style="font-weight: unset;" onclick="modal_detail('<?php echo "$id"; ?>','<?php echo "$nar"; ?>',window['atr' + <?php echo $no; ?>],window['val' + <?php echo $no; ?>], '<?php echo "$idDes"; ?>')">                                    
                                        <button class="btn btn-warning">Spesifikasi</button>
                                    </a>
                                </td>       
                                <td><?php echo "$row[tanggal_pelepasan]"; ?></td>                         
                                <td><?php echo "$row[file_gambar]"; ?></td>
                                <td><?php echo "$row[file_SK]"; ?></td>
                                <td><?php echo "$row[tanggal_upload]"; ?></td>
                                <td><?php echo "$row[waktu_upload]"; ?></td>
                                <td>                                                                   
                                    <a href="#edittembakau" class="edit" onclick="modal_edit_varietas('<?php echo "$id"; ?>','<?php echo "$nama"; ?>','<?php echo "$gmbr"; ?>','<?php echo "$sk"; ?>','<?php echo "$tgl"; ?>','<?php echo "$nar"; ?>');"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>                                                                     
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal('<?php echo "$id"; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php                                 

                                $no++;

                                }

                                date_default_timezone_set('Asia/Jakarta');
                                // $tgl = date('d/m/Y'); $wkt = date('H:i');
                                // echo "$tgl";
                                // echo "<br>";
                                // echo "$wkt";

                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- DATA LEAFLET -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Leaflet</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahleaflet" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Nama Leaflet</th>
                                <th>File gambar 1</th>
                                <th>File gambar 2</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;                                                    
                            foreach ($leaflet as $row) {
                         ?>
                            <tr>                                
                                <td><?php echo $no;?></td>
                                <td><?php echo "$row[nama_leaflet]"; ?></td>
                                <!-- <td><?php echo "$row[file]"; ?></td> -->
                                <?php 
                                    for ($i=($no-1); $i <(count($leaflet)); $i++) { 
                                        if ($i==0) {
                                            echo "<td>".$gambarleaflet[$i]->file."</td>";
                                            echo "<td>".$gambarleaflet[$i+1]->file."</td>";

                                            $idimg1 = $gambarleaflet[$i]->id_gambar;
                                            $idimg2 = $gambarleaflet[$i+1]->id_gambar;
                                            $leaflet1 = $gambarleaflet[$i]->file;
                                            $leaflet2 = $gambarleaflet[$i+1]->file;
                                            break;
                                        }else{                                            
                                            echo "<td>".$gambarleaflet[$i*2]->file."</td>";
                                            echo "<td>".$gambarleaflet[($i*2)+1]->file."</td>";

                                            $idimg1 = $gambarleaflet[$i*2]->id_gambar;
                                            $idimg2 = $gambarleaflet[($i*2)+1]->id_gambar;
                                            $leaflet1 = $gambarleaflet[$i*2]->file;
                                            $leaflet2 = $gambarleaflet[($i*2)+1]->file;
                                            break;                               
                                        }
                                    }
                                    $idleaflet = $row['id_leaflet'];
                                    $nama = $row['nama_leaflet'];
                                 ?>
                                <td>                               
                                     <a href="#editleaflet" class="edit" onclick="modal_edit_leaflet('<?php echo "$idleaflet"; ?>','<?php echo "$nama"; ?>','<?php echo "$idimg1"; ?>','<?php echo "$idimg2"; ?>','<?php echo "$leaflet1"; ?>','<?php echo "$leaflet2"; ?>');"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_leaflet('<?php echo $idleaflet; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- DATA TEKNOLOGI BUDIDAYA -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Teknologi Budidaya</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahteknologi" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Teknologi Budidaya</th>
                                <th>Deskripsi</th>                                                            
                                <th>File Gambar</th>                                                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($teknologi as $tek) {       
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$tek[jenis_teknologi_budidaya]"; ?></td>
                                <td><?php echo "$tek[deskripsi]"; ?></td>                                
                                <td><?php echo "$tek[gambar_tekno]"; ?></td>                                
                                <td>
                                    <a href="#editteknologi" class="edit" onclick="modal_edit_teknologi('<?php echo $tek['id_teknologi_budidaya']; ?>','<?php echo $tek['jenis_teknologi_budidaya']; ?>','<?php echo $tek['deskripsi']; ?>','<?php echo $tek['gambar_tekno']; ?>');">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_teknologi('<?php echo $tek['id_teknologi_budidaya']; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- DATA AGRIBISNIS -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Agribisnis</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahagribisnis" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Jenis Agribisnsis</th>
                                <th>Narasi</th>                                                              
                                <th>File Gambar</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;                            
                            foreach ($agribisnis as $agr) {                                               
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$agr[jenis_agribisnis]"; ?></td>                                
                                <td><?php echo "$agr[deskripsi_agribisnis]"; ?></td>
                                <td><?php echo "$agr[gambar_agribisnis]"; ?></td>
                                <td>
                                     <a href="#editagribisnis" class="edit" onclick="modal_edit_agribisnis('<?php echo $agr['id_agribisnis']; ?>','<?php echo $agr['jenis_agribisnis']; ?>','<?php echo $agr['deskripsi_agribisnis']; ?>','<?php echo $agr['gambar_agribisnis']; ?>');">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_agribisnis('<?php echo $agr['id_agribisnis']; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- DATA BENIH -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Benih</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahbenih" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Nama Benih</th>
                                <th>Stok Sampai</th>                                                            
                                <th>Jumlah Stok (gram)</th>                                                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($benih as $ben) {       
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$ben[nama_benih]"; ?></td>
                                <td><?php echo "$ben[stok_sampai]"; ?></td>                                
                                <td><?php echo "$ben[jumlah_stok]"; ?></td>                                
                                <td>
                                    <a href="#editbenih" class="edit" onclick="modal_edit_benih('<?php echo $ben['id_benih']; ?>','<?php echo $ben['nama_benih']; ?>','<?php echo $ben['stok_sampai']; ?>','<?php echo $ben['jumlah_stok']; ?>');">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_benih('<?php echo $ben['id_benih']; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- DATA DISTIBUSI BENIH -->
    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Distibusi Benih</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#tambahdistribusibenih" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="margin: 30px 0px;">
                    <table class="table table-striped table-hover table-fixed">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Nama Benih</th>
                                <th>Tanggal</th>                                                            
                                <th>Tahun Panen</th>                                                            
                                <th>Kelas</th>
                                <th>Jumlah (Kg)</th>
                                <th>Keterangan</th>                                                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($distribusiBenih as $db) {       
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$db[nama_benih]"; ?></td>
                                <td><?php echo "$db[tanggal]"; ?></td>                                
                                <td><?php echo "$db[tahun_panen]"; ?></td>
                                <td><?php echo "$db[kelas_benih]"; ?></td>                                
                                <td><?php echo "$db[jumlah_kg]"; ?></td>
                                <td><?php echo "$db[keterangan]"; ?></td>
                                <td>
                                    <a href="#editdistribusibenih" class="edit" onclick="modal_edit_distribusibenih('<?php echo $db['id_distribusi']; ?>','<?php echo $db['id_benih']; ?>','<?php echo $db['nama_benih']; ?>','<?php echo $db['tanggal']; ?>','<?php echo $db['tahun_panen']; ?>','<?php echo $db['kelas_benih']; ?>','<?php echo $db['jumlah_kg']; ?>','<?php echo $db['keterangan']; ?>',);">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_distribusibenih('<?php echo $db['id_distribusi']; ?>');"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- =====================================================MODAL-MODAL================================================ -->
    <!-- Tambah Modal HTML Tembakau-->
    <div id="tambahtembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Varietas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahVarietas'); ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" name="namaVarietas" class="form-control" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">                                        
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="gambar">                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload SK</label>
                            <div class="input-group">                                
                                <input type="file" id="picked" name="sk" style="display:none" onchange="document.getElementById('filename').value=this.value" accept="application/pdf">
                                <input type="text" id="filename" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('picked').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Tanggal Pelepasan</label>
                            <!-- <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2"> -->
                                    <input type="text" name="tanggalPelepasan" class="form-control" placeholder="ex : 2018/07/27" required>
                                <!-- </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="text" name="bulanPelepasan" class="form-control" placeholder="ex : 2018/07/27" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <input type="text" name="tahunPelepasan" class="form-control" placeholder="ex : 2018/07/27" required>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" required ></textarea>
                        </div>
                        <div class="form-group"> 
                            <label>Spesifikasi</label>                            
                            <table style="margin-left: 0px;">
                              <thead style="background-color: none;">
                                  <tr>
                                      <th style="font-weight: unset;">Atribut</th>
                                      <th style="font-weight: unset;padding-left: 10px;">Value</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <!--elemet sebagai target append-->
                              <tbody id="itemlist">
                                <tr>
                                  <td><input list="daftarAtribut" id="atribut0" name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;"></td>
                                      <td><input name="value0" class="" type="text" style="border-radius: 0px;margin:0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                </tr> 
                                <tr>
                                      <td><input list="daftarAtribut" id="atribut1" name="atribut1" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value1" class="" type="text" style="margin:10px 10px 0px 10px;width:224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input list="daftarAtribut" id="atribut2" name="atribut2" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value2" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input list="daftarAtribut" id="atribut3" name="atribut3" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value3" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>                               
                                  <tr>
                                      <td><input list="daftarAtribut" id="atribut4" name="atribut4" type="text" style="margin-top: 10px; width: 224px;height: 35px;"></td>
                                      <td><input name="value4" class="" type="text" style="margin:10px 10px 0px 10px; width: 224px;height: 35px;"></td>
                                      <td class="text-center"></td>
                                  </tr>
                              </tbody>
                              <form method="post" action="<?php base_url('admin/tambahVarietas') ?>"><input hidden name="temp" id="temp" value="5"></form>
                              <tfoot>
                                <tr>
                                  <td></td>
                                  <td class="text-right"><button class="btn btn-small btn-default" onclick="additem(); return false" style="margin-top: 10px;height: 35px;margin-right: 10px;"><i class="fa fa-plus" style="margin-top: -25px;"></i></button></td>
                                  <td></td>
                                </tr>
                              </tfoot>                                                                     
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>

    <datalist id="daftarAtribut">
    <?php 
        foreach ($listAtribut as $row) {
            echo "<option value=\"$row->nama_atribut\">";
        }
    ?>
    </datalist>

    <script>
            var indeks = 5;            

            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);
                          

//                membuat element input
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('list', 'daftarAtribut');
                jenis_input.setAttribute('id', 'atribut'+ indeks);
                jenis_input.setAttribute('name', 'atribut'+ indeks);
                jenis_input.setAttribute('class', 'autocomplete')
                jenis_input.setAttribute('type', 'text');
                jenis_input.setAttribute('style', 'margin-top : 10px;width: 224px;height: 35px;');
                // autocomplete(document.getElementById("atribut" + indeks), listAtribut);

                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'value'+ indeks);
                jumlah_input.setAttribute('type', 'text');
                jumlah_input.setAttribute('style', 'margin : 10px 10px 0px 10px;width: 224px;height: 35px;');


                var hapus = document.createElement('span');

//                meng append element input
                jenis.appendChild(jenis_input);                
                jumlah.appendChild(jumlah_input);
                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default" style="margin-top:10px;width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                indeks++;
                document.getElementById('temp').value = indeks;
            }

      </script>

    <!-- Edit Modal HTML Tembakau-->
    <div id="edittembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Varietas</h4>`
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('admin/editVarietas'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="idvar" name="idVarietas">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" name="namaVarietas" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled" id="gmbr"> 
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">                                        
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" id="gmbr" name="gambar">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload SK</label>
                            <div class="input-group">                                
                                <input type="file" id="pic" name="sk" style="display:none" onchange="document.getElementById('sklur').value=this.value" accept="application/pdf">
                                <input type="text" id="sklur" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('pic').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Tanggal Pelepasan</label>
                            <input type="text" name="tanggalPelepasan" class="form-control" placeholder="ex : 2018/07/27" required id="tgl">
                        </div>                                            
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function modal_edit_varietas(idvar,nama,gmbr,sk,tgl,nar)
        {
          $('#edittembakau').modal('show', {backdrop: 'static'});          
          document.getElementById('idvar').value = idvar;
          document.getElementById('nama').value = nama;
          document.getElementById('gmbr').value = gmbr;
          document.getElementById('sklur').value = sk;
          document.getElementById('tgl').value = tgl;         
        }
    </script>

    <!-- Delete Modal HTML Tembakau-->
    <div id="hapustembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Varietas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapustem"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal(delete_url)
        {
          $('#hapustembakau').modal('show', {backdrop: 'static'});
          document.getElementById('hapustem').setAttribute('href' ,"deleteVarietas/"+delete_url);
        }
    </script>
    
    <!-- spesifikasi varietas -->
    <div id="spesifikasi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Data Spesifikasi Varietas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="<?php echo base_url('admin/editDesVarietas'); ?>" method="post" class="form-horizontal">
                    <input hidden id="idSpe" name="idSpesifikasi">
                    <input hidden id="jumlahAtr" name="jumlahAtr">
                    <input hidden id="idDeskripsi" name="idDeskripsi">
                    <div class="modal-body">                                         
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" id="des" rows="8"></textarea>
                        </div>
                        <div class="form-group"> 
                            <div class="text-center">                                
                                <label>Spesifikasi</label>                            
                            </div>
                            <table style="margin-left: 0px;" id="tableDetail">
                              <!-- <thead style="background-color: none;">
                                  <tr>
                                      <td style="font-weight: unset;">Atribut & Value</td>                                      
                                      <th style="font-weight: unset;padding-left: 10px;">Value</th>
                                      <th>asda</th>
                                  </tr>
                              </thead> -->
                              <!--elemet sebagai target append-->
                              <tbody id="detail">
                                    <!-- <tr id="detail"> -->
                                        <!-- <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                        <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:10px 10px 10px 10px;width: 224px;height: 35px;" disabled></td>
                                        <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td> -->
                                    <!-- </tr>  -->
                                    <!-- <tr>
                                        <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                        <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:10px 10px 10px 10px;width: 224px;height: 35px;" disabled></td>
                                        <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td>
                                    </tr>
                                    <tr>
                                        <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                        <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:10px 10px 10px 10px;width: 224px;height: 35px;" disabled></td>
                                        <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td>
                                    </tr>
                                    <tr>
                                        <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                        <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:10px 10px 10px 10px;width: 224px;height: 35px;" disabled></td>
                                        <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td>
                                    </tr>                               
                                    <tr>
                                        <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                        <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:10px 10px 10px 10px;width: 224px;height: 35px;" disabled></td>
                                        <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td>
                                    </tr> -->
                              </tbody>                              
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    <script>
        var jumlahTr = 0;
        function modal_detail(id,narasi,atr,ket, idDes)
        {
            var itemlist = document.getElementById('tableDetail');
            if (jumlahTr > 0) {
                // for (var i = 0; i < jumlahTr; i++) {
                //     itemlist.deleteRow(i);
                // }
                // itemlist.remove();
                $("#tableDetail tr").remove();
                jumlahTr = 0;
            } 
          $('#spesifikasi').modal('show', {backdrop: 'static'});          
          // alert(atr.length);
          document.getElementById('jumlahAtr').value = atr.length;
          document.getElementById('idDeskripsi').value = idDes;
          document.getElementById('idSpe').value = id;
          document.getElementById('des').value = narasi;
            
            for (var i = 0; i <atr.length; i++) {              
//                menentukan target append
                
//                membuat element
                var row = document.createElement('tr');
                var atributjs = document.createElement('td');
                var valuejs = document.createElement('td');
                var aksijs = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(atributjs);
                row.appendChild(valuejs);
                row.appendChild(aksijs);                          

//                membuat element input
                var atrjs = document.createElement('input');
                atrjs.setAttribute('name', 'atribut'+ i);
                atrjs.setAttribute('value', atr[i]);
                atrjs.setAttribute('type', 'text');
                atrjs.setAttribute('placeholder', ' Atribut');
                atrjs.setAttribute('readonly', '');
                atrjs.setAttribute('style', 'margin-top : 10px;width: 224px;height: 35px;');

                var valjs = document.createElement('input');
                valjs.setAttribute('name', 'value'+ i);
                valjs.setAttribute('value', ket[i]);
                valjs.setAttribute('type', 'text');
                valjs.setAttribute('placeholder', ' Value');
                valjs.setAttribute('style', 'margin : 10px 10px 0px 10px;width: 224px;height: 35px;');


                var hapus = document.createElement('span');

//                meng append element input
                atributjs.appendChild(atrjs);                
                valuejs.appendChild(valjs);
                aksijs.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-warning" style="margin-top:10px;width: 5px;height: 35px;"><i class="fa fa-pencil 0"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                }
                jumlahTr++;
            }
        }
    </script>

    <!-- Tambah Modal HTML leaflet-->
    <div id="tambahleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Leaflet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahLeaflet');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Leaflet</label>
                            <input type="text" class="form-control" name="namaLeaflet" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-1</label>
                            <div class="input-group">              
                                <input type="file" id="gmbr1" name="gambar1" style="display:none" onchange="document.getElementById('img1').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="img1" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbr1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                     
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-2</label>
                            <div class="input-group">                                
                                <input type="file" id="gmbr2" name="gambar2" style="display:none" onchange="document.getElementById('img2').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="img2" style="width: 468px;height: 35px;" disabled="disable" required>
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbr2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                                    
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML Leaflet-->
    <div id="editleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Leaflet</h4>`
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('admin/editleaflet'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input id="idleaflet" name="idleaflet" hidden>
                        <input id="idgambar1" name="idimg1" hidden>
                        <input id="idgambar2" name="idimg2" hidden>
                        <div class="form-group">
                            <label>Nama Leaflet</label>
                            <input type="text" class="form-control" name="namaLeaflet" id="namaLeaflet" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-1</label>
                            <div class="input-group">              
                                <input type="file" id="leaf1" name="leaflet1" style="display:none" onchange="document.getElementById('leaflet1').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="leaflet1" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('leaf1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                     
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-2</label>
                            <div class="input-group">                                
                                <input type="file" id="leaf2" name="leaflet2" style="display:none" onchange="document.getElementById('leaflet2').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="leaflet2" style="width: 468px;height: 35px;" disabled="disable" required>
                                <input type="button" value="Pilih File" onclick="document.getElementById('leaf2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                                    
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function modal_edit_leaflet(idleaf,nama,idgmbr1,idgmbr2,gmbr1,gmbr2)
        {
          $('#editleaflet').modal('show', {backdrop: 'static'});          
          document.getElementById('idleaflet').value = idleaf;
          document.getElementById('idgambar1').value = idgmbr1;
          document.getElementById('idgambar2').value = idgmbr2;
          document.getElementById('namaLeaflet').value = nama;
          document.getElementById('leaflet1').value = gmbr1;
          document.getElementById('leaflet2').value = gmbr2;                  
        }
    </script>

    <!-- Delete Modal HTML Leaflet-->
    <div id="hapusleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Leaflet</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapusleaf"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal_leaflet(delete_url)
        {
          $('#hapusleaflet').modal('show', {backdrop: 'static'});
          document.getElementById('hapusleaf').setAttribute('href' ,"deleteLeaflet/"+delete_url);
        }
    </script>

    <!-- Tambah Modal HTML teknologi-->
    <div id="tambahteknologi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Teknologi Budidaya</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahTeknologi');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Teknologi Budidaya</label>
                            <input type="text" class="form-control" name="jenistekno" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="destekno" class="form-control" rows="8" required></textarea>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group">              
                                <input type="file" id="gmbrtekno" name="gambartekno" style="display:none" onchange="document.getElementById('tekno').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="tekno" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbrtekno').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    
    <!-- Edit Modal HTML teknologi-->
    <div id="editteknologi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Data Teknologi Budidaya</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/editTeknologi');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="idtekno" name="idtekno">
                        <div class="form-group">
                            <label>Jenis Teknologi Budidaya</label>
                            <input type="text" class="form-control" name="editjenistekno" id="editjenistekno" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="editdestekno" class="form-control" id="editdestekno" rows="8" required></textarea>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group">              
                                <input type="file" id="editgmbrtekno" name="editgambartekno" style="display:none" onchange="document.getElementById('edittekno').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="edittekno" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('editgmbrtekno').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    <script>
        function modal_edit_teknologi(idtekno,jenis,des,gmbr)
        {
          $('#editteknologi').modal('show', {backdrop: 'static'});          
          document.getElementById('idtekno').value = idtekno;
          document.getElementById('editjenistekno').value = jenis;         
          document.getElementById('editdestekno').value = des;    
          document.getElementById('edittekno').value = gmbr;    
        }
    </script>

    <!-- Delete Modal HTML Teknologi-->
    <div id="hapusteknologi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Teknologi Budidaya</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapustekno"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal_teknologi(delete_url)
        {
          $('#hapusteknologi').modal('show', {backdrop: 'static'});
          document.getElementById('hapustekno').setAttribute('href' ,"deleteTeknologi/"+delete_url);
        }
    </script>
    
    <!-- Tambah Modal HTML agribisnis-->
    <div id="tambahagribisnis" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Agribisnis</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahAgribisnis');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Agribisnis</label>
                            <input type="text" class="form-control" name="jenisagri" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="desagri" class="form-control" rows="8" required></textarea>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group">              
                                <input type="file" id="gmbragri" name="gambaragri" style="display:none" onchange="document.getElementById('agri').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="agri" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbragri').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
        
    <!-- Edit Modal HTML teknologi-->
    <div id="editagribisnis" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Data Teknologi Budidaya</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/editAgribisnis');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="idagri" name="idagri">
                        <div class="form-group">
                            <label>Jenis Teknologi Budidaya</label>
                            <input type="text" class="form-control" name="editjenisagri" id="editjenisagri" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="editdesagri" class="form-control" id="editdesagri" rows="8" required></textarea>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group">              
                                <input type="file" id="editgmbragri" name="editgambaragri" style="display:none" onchange="document.getElementById('editagri').value=this.value" accept="image/png, image/jpeg, image/gif">
                                <input type="text" id="editagri" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('editgmbragri').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default"> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    <script>
        function modal_edit_agribisnis(idagri,jenisagri,desagri,gmbragri)
        {
          $('#editagribisnis').modal('show', {backdrop: 'static'});          
          document.getElementById('idagri').value = idagri;
          document.getElementById('editjenisagri').value = jenisagri;         
          document.getElementById('editdesagri').value = desagri;    
          document.getElementById('editagri').value = gmbragri;    
        }
    </script>

    <!-- Delete Modal HTML Teknologi-->
    <div id="hapusagribisnis" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Agribisnis</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapusagri"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal_agribisnis(delete_url)
        {
          $('#hapusagribisnis').modal('show', {backdrop: 'static'});
          document.getElementById('hapusagri').setAttribute('href' ,"deleteAgribisnis/"+delete_url);
        }
    </script>

    <!-- Tambah Modal HTML Produk Benih-->
    <div id="tambahbenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Benih</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahBenih');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Benih</label>
                            <input type="text" class="form-control" name="namabenih" required>
                        </div>
                        <div class="form-group">
                            <label>Stok Sampai</label>
                            <input type="text" class="form-control" name="stoksampai" placeholder="ex. 2018-08-17" required>
                        </div>                        
                        <div class="form-group">
                            <label>Jumlah Stok</label>
                            <input type="number" step="any" placeholder="0.000" class="form-control" name="jumlahstok" required>
                        </div>     
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    
    <!-- Edit Modal HTML Produk Benih-->
    <div id="editbenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Data Benih</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/editBenih');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="idbenih" name="idbenih">
                        <div class="form-group">
                            <label>Nama Benih</label>
                            <input type="text" class="form-control" name="editnamabenih" id="editnamabenih" required>
                        </div>
                         <div class="form-group">
                            <label>Stok Sampai</label>
                            <input type="text" class="form-control" name="editstoksampai" id="editstoksampai" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Stok</label>
                            <input type="number" step="any" placeholder="0.000" class="form-control" name="editjumlahstok" id="editjumlahstok" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    <script>
        function modal_edit_benih(idbenih,namabenih,stoksampai,jumlahstok)
        {
          $('#editbenih').modal('show', {backdrop: 'static'});          
          document.getElementById('idbenih').value = idbenih;
          document.getElementById('editnamabenih').value = namabenih;         
          document.getElementById('editstoksampai').value = stoksampai;    
          document.getElementById('editjumlahstok').value = jumlahstok;    
        }
    </script>

    <!-- Delete Modal HTML Produk Benih-->
    <div id="hapusbenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Benih</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapusben"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal_benih(delete_url)
        {
          $('#hapusbenih').modal('show', {backdrop: 'static'});
          document.getElementById('hapusben').setAttribute('href' ,"deleteBenih/"+delete_url);
        }
    </script>

    <!-- Tambah Modal HTML Produk Distribusi Benih-->
    <div id="tambahdistribusibenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Distribusi Benih</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahDistribusiBenih');?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Benih</label>
                            <input type="text" class="form-control" list="daftarNamaBenih" name="namadistribusibenih" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control" name="tgldistribusi" placeholder="ex. 2018-08-17" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Panen</label>
                            <input type="text" class="form-control" name="thnpanen" placeholder="ex. Pasirian 2002" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas benih</label>
                            <input type="text" class="form-control" name="kelasbenih" required>
                        </div>   
                        <div class="form-group">
                            <label>Jumlah (Kg)</label>
                            <input type="number" step="any" placeholder="0.000" class="form-control" name="jumlah" required>
                        </div>                              
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required>
                        </div>     
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
    
    <datalist id="daftarNamaBenih">
    <?php 
        foreach ($ListNamaBenih as $row) {
            echo "<option value=\"$row->nama_benih\">";
        }
    ?>
    </datalist>

    <!-- Edit Modal HTML Produk Distribusi Benih-->
    <div id="editdistribusibenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Data Benih</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/editDistribusiBenih');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="iddistribusi" name="iddistribusi">
                        <input hidden id="iddistribusibenih" name="iddistribusibenih">
                        <div class="form-group">
                            <label>Nama Benih</label>
                            <input type="text" class="form-control" name="editnamadistribusibenih" id="editnamadistribusibenih" required readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control" name="edittgldistribusi" id="edittgldistribusi" placeholder="ex. 2018-08-17" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Panen</label>
                            <input type="text" class="form-control" name="editthnpanen" id="editthnpanen" placeholder="ex. Pasirian 2002" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas benih</label>
                            <input type="text" class="form-control" name="editkelasbenih" id="editkelasbenih">
                        </div>   
                        <div class="form-group">
                            <label>Jumlah (Kg)</label>
                            <input type="number" step="any" class="form-control" name="editjumlah" id="editjumlah" placeholder="0.000" required>
                        </div>                              
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="editketerangan" id="editketerangan" required>
                        </div>     
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>    
    <script>
        function modal_edit_distribusibenih(iddistribusi,idbenih,namabenih,tgl,thn,kelas,jumlah,keterangan)
        {
          $('#editdistribusibenih').modal('show', {backdrop: 'static'});          
          document.getElementById('iddistribusi').value = iddistribusi;
          document.getElementById('iddistribusibenih').value = idbenih;
          document.getElementById('editnamadistribusibenih').value = namabenih;         
          document.getElementById('edittgldistribusi').value = tgl;    
          document.getElementById('editthnpanen').value = thn;
          document.getElementById('editkelasbenih').value = kelas;
          document.getElementById('editjumlah').value = jumlah;
          document.getElementById('editketerangan').value = keterangan;    
        }
    </script>

    <!-- Delete Modal HTML Produk Distribusi Benih-->
    <div id="hapusdistribusibenih" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Distribusi Benih</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapusdben"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal_distribusibenih(delete_url)
        {
          $('#hapusdistribusibenih').modal('show', {backdrop: 'static'});
          document.getElementById('hapusdben').setAttribute('href' ,"deleteDistribusiBenih/"+delete_url);
        }
    </script>

    <footer>
        <div class="container-fluid text-center" style="color:white;background-color: black;">
            <div style=" margin-top: 10px;">
                <p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
            </div>
        </div>
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>/bootstrap/js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>/bootstrap/js/script.js"></script>
    <script src="<?php echo base_url();?>/bootstrap/perfect-scrollbar/perfect-scrollbar.min.js"></script>

</body>

</html>