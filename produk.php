<?php
    require 'function.php';
    require 'cek.php';
    ?>


    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Produk</title>
            <link href="css/style.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php" style="color: white;">Daclen</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                            <a class="nav-link" href="user.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    User
                                </a>
                                <a class="nav-link" href="index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Produk
                                </a>
                                <a class="nav-link" href="transaksi.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Transaksi
                                </a>
                                <a class="nav-link" href="voucher.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Voucher
                                </a>
                                <a class="nav-link" href="logout.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <h1 class="mt-4">List Produk</h1>
                            </ol>
                            <div class="card mb-4">
                                <div class="card-header">
                                <a href="listproduct.php">
                                <button type="button" class="btn btn-dark">
                                        Lihat Halaman User
                                </button>
                                </a>
                                <p></p>
                                <p></p>
                                <div class="row">
                                    <div class="col-3">Produk A</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8"><input type="checkbox"></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Deskripsi</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Produk Hebat Mantap</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Rp250.000,00</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Id</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">suksesa</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Content</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Pembayaran Produk A Berhasil</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-3">Produk B</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8"><input type="checkbox"></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Deskripsi</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Produk Hebat Mantap</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Rp250.000,00</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Id</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">suksesb</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Content</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Pembayaran Produk A Berhasil</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-3">Produk C</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8"><input type="checkbox"></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Deskripsi</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Produk Hebat Mantap</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Rp250.000,00</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Id</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">suksesc</div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Content</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">Pembayaran Produk A Berhasil</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/datatables-demo.js"></script>
        </body>
        <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Tambah Produk</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
            <input type="text" name="name" placeholder="Nama Barang/Produk" class="form-control" required><br>
            <input type="number" name="price" placeholder="Harga Barang" class="form-control" required><br>
            <select name="discount" class="form-control" required>
                <option value="1" <?='1' ? 'selected' : '';?>>Ada</option>
                <option value="0" <?='0' ? 'selected' : '';?>>Tidak Ada</option>
            </select><br>
            <button type="submit" class="btn btn-primary" name="TambahProduk">Submit</button><br>
            </div>
            </form>
    </html>