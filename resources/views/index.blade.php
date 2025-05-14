<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f85ac480d1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets.css">
    <title>Web Latihan</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            transition: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Hide the checkbox */
        #sidebar-toggle {
            display: none;
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            left: -250px; /* Initially hidden */
            width: 250px;
            height: 100vh;
            background: #135589;
            color: white;
            padding-top: 60px;
            transition: 0.3s;
        }

        /* Toggle button */
        .toggle-btn {
            position: fixed;
            left: 10px;
            top: 15px;
            font-size: 30px;
            cursor: pointer;
            color: white;
            background: #135589;
            padding: 5px 10px;
            border-radius: 5px;
            z-index: 2;
        }

        /* Content area */
        .content {
            margin-left: 50px; /* Default position */
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        /* When sidebar is opened */
        #sidebar-toggle:checked ~ .sidebar {
            left: 0;
        }

        #sidebar-toggle:checked ~ .content {
            margin-left: 250px; /* Push content to the right */
        }

    </style>
    
</head>
<body>
    <input type="checkbox" id="sidebar-toggle">

    <label for="sidebar-toggle" class="toggle-btn">☰</label>

    <div class="sidebar">
        <div class="container pt-3">
            <div class="row">
                <div class="col-sm-4">
                    <img src="materialD/iconp.png" width="50px;">
                </div>
                <div class="col">
                    <div class="row">
                        <h6><b>Admin</b></h6>
                    </div>
                    <div class="row">
                        <p style="font-size: small;">admin@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="height: 300px;padding: 0%;">
            <div class="container" style="padding: 3;">
                <a href="#" style="border-radius: 10px; padding: 2px 5px;margin-top: 10px;" onmouseover="this.style.backgroundColor='#0d395b'" 
                onmouseout="this.style.backgroundColor='transparent'">
                    <i class="fa-regular fa-clipboard"></i>  Helperlog
                </a>
            </div>
            <div class="container" style="padding: 3;">
                <a href="#" style="border-radius: 10px; padding: 2px 5px;margin-top: 10px;" onmouseover="this.style.backgroundColor='#0d395b'" 
                onmouseout="this.style.backgroundColor='transparent'">
                    <i class="fa-solid fa-magnifying-glass"></i>  Helperfind
                </a>
            </div>
        </div>
        <div class="container" style="text-align: center;">
            <button type="button" class="btn btn-primary" style="background-color: #3a719d;border-color: #3a719d"> 
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Log Out
            </button>
        </div>
    </div>
    
    <div class="content">
        <h4><i class="fa-solid fa-arrow-left"></i> <b>Detail Ajuan Pesanan</b></h4>
        <div class="d-flex justify-content-center align-items-center full-height pt-5">
            <div class="shadow p-2 mb-5 bg-white rounded">
                <div class="card-body" style="text-align: center;">
                    <div class="container pt-3 text-center">
                        <h5><b>Proses Pengajuan Pesanan</b></h5>
                        <div class="d-flex justify-content-center align-items-center pt-3">
                            <div class="d-flex flex-column align-items-center">
                                <i class="fa-solid fa-circle-check fa-2x" style="color: #125488;"></i>
                                <span class="mt-2"><b>Ajuan Dibuat</b></span>
                            </div>
                            <div class="mx-2" style="width: 100px; height: 5px; background-color: #125488; border-radius: 5px;"></div>
                            <div class="d-flex flex-column align-items-center">
                                <i class="fa-solid fa-clock fa-2x" style="color: #125488;"></i>
                                <span class="mt-2"><b>Proses Review</b></span>
                            </div>
                            <div class="mx-2" style="width: 100px; height: 5px; background-color: #ccc; border-radius: 5px;"></div>
                            <div class="d-flex flex-column align-items-center">
                                <i class="fa-solid fa-circle-check fa-2x" style="color: #ccc;"></i>
                                <span class="mt-2"><b>Disetujui</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="width: 420px;">
                        <div class="row pt-3">
                            <div class="col" style="text-align: left;">ID kontrak</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">12762387468234</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Tanggal Pengajuan</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">5 Juli 2024 12:57 WIB</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Nama Pengaju</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">Bayu Liano</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Nama PRT</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">Intan Permata</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Pekerjaan</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">Baby Sitter</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Lama kontrak</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">12 bulan</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col" style="text-align: left;">Nominal</div>
                            <div class="col-lg-1">:</div>
                            <div class="col" style="text-align: left;">Rp 2.500.000,-</div>
                        </div>
                    </div>
                    <div class="container pt-3">
                        <button type="button" class="btn btn-success">Setuju</button>
                        <button type="button" class="btn btn-danger">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>