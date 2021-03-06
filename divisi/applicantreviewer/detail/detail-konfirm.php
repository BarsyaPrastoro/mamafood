<html>
    <head>
        <link rel="stylesheet" href="../../../asset/css/style.css">
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
                        <li><a href="../../login.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
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
                            <img src="../../../asset/gambar/LOGONAMA.png" id="logo" width="175px"> 
                        </li>
                        <li class="cs">
                            <a href="../apr-pengajuanpdg.php">Pengajuan Pedagang</a>
                        </li>
                         <li class="cs">
                            <a href="../apr-datapdg.php">Data Pedagang</a>
                        </li>                
                        <li class="cs">
                            <a href="../apr-dataplg.php">Data Pelanggan</a>
                        </li>
                        <li class="active cs">
                            <a href="../apr-konfirm.php">Konfirmasi Menu</a>
                        </li>
                    </ul>
                </div>
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" style="position: fixed; margin-top: 250px;">
                                <div class="form-inline acc">
                                    <button type="button" class="btn btn-secondary">Accept</button>
                                    <button type="button" class="btn btn-secondary">Decline</button>
                                </div>
                            </div>
                            <div class="col-md-8 menukon">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Terong Balado" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Harga Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Rp 17.000" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Deskripsi</label>
                                            <input type="text" class="form-control" id="name" disabled value="Makanan khas Sumatera Barat" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../../../asset/gambar/printilan/terongbalado.jpg" width="300px">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Terong Balado" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Harga Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Rp 17.000" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Deskripsi</label>
                                            <input type="text" class="form-control" id="name" disabled value="Makanan khas Sumatera Barat" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../../../asset/gambar/printilan/terongbalado.jpg" width="300px">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Terong Balado" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Harga Menu</label>
                                            <input type="text" class="form-control" id="name" disabled value="Rp 17.000" />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Deskripsi</label>
                                            <input type="text" class="form-control" id="name" disabled value="Makanan khas Sumatera Barat" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../../../asset/gambar/printilan/terongbalado.jpg" width="300px">
                                    </div>
                                </div>
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