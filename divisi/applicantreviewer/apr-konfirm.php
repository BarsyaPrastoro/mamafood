<?php
session_start();
include'../../Connect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="../../asset/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../../login.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="myInput" name="search" value="">
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div id="wrapper" class="">
            <div class="container-fluid">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <br>
                        </li>
                        <li class="sidebar-brand">
                            <img src="../../asset/gambar/LOGONAMA.png" id="logo" width="175px"> 
                        </li>
                        <li class="cs">
                            <a href="apr-pengajuanpdg.php">Pengajuan Pedagang</a>
                        </li>
                         <li class="cs">
                            <a href="apr-datapdg.php">Data Pedagang</a>
                        </li>                
                        <li class="cs">
                            <a href="apr-dataplg.php">Data Pelanggan</a>
                        </li>
                        <li class="active cs">
                            <a href="apr-konfirm.php">Konfirmasi Menu</a>
                        </li>
                    </ul>
                </div>
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h4><span class="glyphicon glyphicon-map-marker">&nbsp;</span>ApplicantReveiwer</h4>
                                    <h4><span class="glyphicon glyphicon-user">&nbsp;</span><i><?php echo ''.$_SESSION['username'];?></i></h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="float:right">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                              <table class="table table-bordered table-striped" id="myTable">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Nama Pedagang</th>
                                    <th>Email</th>
                                      <th></th>
                                  </tr>
                                </thead>
                                <tbody id="myTable">
                                  <tr>
                                    <td>010</td>
                                    <td>Lili</td>
                                    <td>lili@gmai.com</td>
                                      <td><a href="./detail/detail-konfirm.php">Details</a></td>
                                  </tr>
                                  <tr>
                                    <td>012</td>
                                    <td>Halim</td>
                                    <td>halimm@gmail.com</td>
                                      <td><a href="./detail-pedagang-tetap.php">Details</a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            
            
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            
            
        </script>
    </body>
</html>