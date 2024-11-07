<?php
// Mengimpor file yang diperlukan
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Konfigurasi meta tags untuk SEO dan tampilan -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Halaman Transaksi Daclen" />
    <meta name="author" content="Daclen" />
    <title>Transaksi</title>
    
    <!-- Mengimpor file CSS dan library yang diperlukan -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    // ... existing code ...

<!-- Add this in the <head> section -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Global styles */
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Enhanced table styling */
    .table {
        border-radius: 8px;
        overflow: hidden;
    }

    .table thead th {
        background-color: #f8f9fa;
        border-bottom: none;
        font-weight: 600;
        color: #2c3e50;
    }

    .table td, .table th {
        padding: 15px;
        vertical-align: middle;
    }

    /* Card styling */
    .card {
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        margin-bottom: 25px;
    }

    .card-header {
        background-color: #fff;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        padding: 20px 25px;
    }

    /* Button styling */
    .btn {
        padding: 10px 20px;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.15);
    }

    /* Page title */
    h1 {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 30px;
        font-size: 1.8rem;
    }
</style>
</head>

<body class="sb-nav-fixed">
    <!-- Header Navigasi -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php" style="color: white;">Daclen</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <div id="layoutSidenav">
        <!-- Sidebar Navigasi -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <?php
                        // Mendapatkan nama halaman saat ini
                        $current_page = basename($_SERVER['PHP_SELF']);
                        
                        // Konfigurasi menu sidebar
                        $menu_items = [
                            'produk' => ['file' => 'index.php', 'icon' => 'fas fa-tachometer-alt', 'text' => 'Produk'],
                            'transaksi' => ['file' => 'transaksi.php', 'icon' => 'fas fa-tachometer-alt', 'text' => 'Transaksi'],
                            'voucher' => ['file' => 'voucher.php', 'icon' => 'fas fa-tachometer-alt', 'text' => 'Voucher'],
                            'settings' => ['file' => 'settings.php', 'icon' => 'fas fa-tachometer-alt', 'text' => 'Settings'],
                            'logout' => ['file' => 'logout.php', 'icon' => 'fas fa-tachometer-alt', 'text' => 'Logout']
                        ];

                        // Membuat menu items secara dinamis
                        foreach ($menu_items as $key => $item) {
                            $isActive = ($current_page === $item['file']) || 
                                    ($current_page === 'index.php' && $key === 'produk');
                            $activeClass = $isActive ? 'active' : '';
                            
                            echo '<a class="nav-link ' . $activeClass . '" href="' . $item['file'] . '">
                                    <div class="sb-nav-link-icon"><i class="' . $item['icon'] . '"></i></div>
                                    ' . $item['text'] . '
                                </a>';
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Transaksi</h1>
                    
                    <!-- Tabel Transaksi -->
                    <div class="card mb-4">
                        <form method="post">
                            <div class="card-header">
                                <button type="submit" name="hapustransaksi" class="btn btn-danger">
                                    Hapus Transaksi Terpilih
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Harga</th>
                                                <th>Tanggal Terima</th>
                                                <th>Status</th>
                                                <th><input type="checkbox" id="selectAll"> Pilih Semua</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Mengambil dan menampilkan data transaksi
                                            $ambilsemuadatatransaksi = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY created_at DESC");
                                            $i = 1;
                                            while($data = mysqli_fetch_array($ambilsemuadatatransaksi)){
                                                $order_id = $data['order_id'];
                                                $product_name = $data['product_name'];
                                                $price = $data['price'];
                                                $tanggal = date('d-m-Y H:i:s', strtotime($data['created_at']));
                                                $status = $data['status'];
                                            ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$order_id;?></td>
                                                    <td><?=$product_name;?></td>
                                                    <td>Rp<?=number_format($price, 0, ',', '.');?></td>
                                                    <td><?=$tanggal;?></td>
                                                    <td><?=$status;?></td>
                                                    <td><input type="checkbox" name="delete[]" value="<?=$order_id;?>"></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

            <!-- Footer -->
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

    <!-- Style untuk navigasi -->
    <style>
    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff !important;
        font-weight: 500;
    }

    .nav-link {
        transition: background-color 0.2s ease-in-out;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .nav-link.active .sb-nav-link-icon {
        color: #fff;
    }
    </style>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

    <!-- Script untuk fungsi select all checkbox -->
    <script>
    document.getElementById('selectAll').onclick = function() {
        var checkboxes = document.getElementsByName('delete[]');
        for(var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
    </script>
</body>
</html>