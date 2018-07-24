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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/styleadmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">                   
                    <a href="#home" class="navbar-brand halaman">
                        <img src="<?php echo base_url();?>/assets/img/balittaslitbang.png" width="270" style="margin-right:-90px; padding-right: 25px;">
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
                                        <li><a href="<?php echo base_url();?>c_data/tembakau" class="halaman">Tembakau</a></li>
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
    </header>

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
                                <th>Narasi</th>
                                <th>Spesifikasi</th>                              
                                <th>Tanggal Diterbit</th>                              
                                <th>File Gambar</th>
                                <th>File SK</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            $temp_id = null;
                            foreach ($varietas_tembakau as $row) {
                                               
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$row[nama_varietas]"; ?></td>
                                <td><?php echo "$row[id_varietas]"; ?></td>
                                <td><a href="" style="font-weight: unset;"><?php echo "Spesifikasi "."$row[nama_varietas]"; ?></a></td>       
                                <td><?php echo "$row[tanggal_diterbitkan]"; ?></td>                         
                                <td><?php echo "$row[file_SK]"; ?></td>
                                <td><?php echo "$row[file_gambar]"; ?></td>
                                <td>
                                    <a href="#edittembakau" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="c_data.php" class="delete" data-toggle="modal" data-target="#hapustembakau" data-href="c_data.php"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
                                <th>File gambar</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($leaflet as $row) {
                                               
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$row[nama_leaflet]"; ?></td>
                                <td><?php echo "$row[file]"; ?></td>
                                <td>
                                    <a href="#edittembakau" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#hapustembakau" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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

    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Teknologi Budidaya</b></h2>
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
                                <th>Narasi</th>
                                <th>Spesifikasi</th>                              
                                <th>File Gambar</th>
                                <th>File SK</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1; $urutan = 0;
                            foreach ($varietas_tembakau as $row) {
                                               
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$row[nama_varietas]"; ?></td>
                                <td><?php echo "$row[narasi]"; ?></td>
                                <td><a href=""><?php echo "Spesifikasi "."$row[nama_varietas]"; ?></a></td>                                
                                <td><?php echo "$row[file_SK]"; ?></td>
                                <td><?php echo "$row[file_gambar]"; ?></td>
                                <td>
                                    <a href="#edittembakau" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <!-- <button class="btn btn-small btn-danger btnHapusTembakau"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button> -->
                                    <a href="#hapustembakau" class="delete" data-toggle="modal" name="<?php echo "$row[id_varietas]"; ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php $urutan++; } ?>
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

    <section class="Welcome" id="Welcome" style="padding-top: 2px">
        <div class="container">
            <div class="table table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Agribisnis</b></h2>
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
                                <th>Narasi</th>
                                <th>Spesifikasi</th>                              
                                <th>File Gambar</th>
                                <th>File SK</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            $temp_id = null;
                            foreach ($varietas_tembakau as $row) {
                                               
                         ?>
                            <tr>                                
                                <td><?php echo $no++; ?></td>
                                <td><?php echo "$row[nama_varietas]"; ?></td>
                                <td><?php echo "$row[narasi]"; ?></td>
                                <td><a href=""><?php echo "Spesifikasi "."$row[nama_varietas]"; ?></a></td>                                
                                <td><?php echo "$row[file_SK]"; ?></td>
                                <td><?php echo "$row[file_gambar]"; ?></td>
                                <td>
                                    <a href="#edittembakau" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>                                    
                                    <a href="#hapustembakau"  class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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

    <!-- Tambah Modal HTML Tembakau-->
    <div id="tambahtembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Tanaman Tembakau</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="#" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" class="form-control" required>
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
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload SK</label>
                            <div class="input-group">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" required ></textarea>
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
                                  <td><input name="jenis_input[0]" class="" type="text" style="border-radius: 0px;width: 224px; height: 35px;"></td>
                                      <td><input name="jumlah_input[0]" class="" type="text" style="border-radius: 0px;margin:0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                </tr> 
                                <tr>
                                      <td><input name="jenis_input[1]" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="jumlah_input[1]" class="" type="text" style="margin:10px 10px 0px 10px;width:224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input name="jenis_input[2]" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="jumlah_input[2]" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input name="jenis_input[3]" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="jumlah_input[3]" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>                               
                                  <tr>
                                      <td><input name="jenis_input[4]" class="" type="text" style="margin-top: 10px; width: 224px;height: 35px;"></td>
                                      <td><input name="jumlah_input[4]" class="" type="text" style="margin:10px 10px 0px 10px; width: 224px;height: 35px;"></td>
                                      <td class="text-center"></td>
                                  </tr>
                              </tbody>
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

    <script>
            var i = 4;
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
                jenis_input.setAttribute('name', 'jenis_input[' + i + ']');
                jenis_input.setAttribute('type', 'text');
                jenis_input.setAttribute('style', 'margin-top : 10px;width: 224px;height: 35px;');

                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'jumlah_input[' + i + ']');
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

                i++;
            }
      </script>

    <!-- Edit Modal HTML Tembakau-->
    <div id="edittembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Tanaman</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kode Seleksi</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Tanaman</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Asal</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Metode Pemuliaan</label>
                            <input type="text" class="form-control" required>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-info" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML Tembakau-->
    <div id="hapustembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="button" class="btn btn-danger" value="Hapuslur" id="hapus-true">
                </div>                
            </div>
        </div>
    </div>   
    <script>
        $(document).ready(function() {
        $('#hapustembakau').on('show.bs.modal', function(e) {
            $(this).find('.btn-danger').attr('href', $(e.relatedTarget).data('href'));
        });
    });
    </script>

    <!-- Tambah Modal HTML leaflet-->
    <div id="tambahleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Leaflet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="#" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar 1</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gamabar 2</label>
                            <div class="input-group">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
                                    </div>
                                </span>
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

    <footer>
        <div class="container-fluid text-center" style="color:white;background-color: black;">
            <div style=" margin-top: 10px;">
                <p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
            </div>
        </div>

    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/perfect-scrollbar/perfect-scrollbar.min.js"></script>

</body>

</html>