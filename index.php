<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>login sisiwa pembayaran spp</title>
        <link a href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <h4 class="text-center">LOGIN SISWA</h4>
                    <div class="card">
                        <div class="card-header">
                            <img src="logo.gif" width="100%">
                        </div>
                        <div class="card-body">
                            <form action="proses-login-siswa.php" method="post">
                                <div class="form-group mb-2">
                                    <label>NISN</label>
                                    <input type="number" name="nisn" class="form-control" placeholder="masukkan nisn anda.." required>
                                </div>
                                <div class="form-group mb-2">
                                    <label>NIS</label>
                                    <input type="number" name="nis" class="form-control" placeholder="masukkan nis anda.." required>
                                </div>
                                <div class="from-group mb2">
                                    <button type="submit" class="btn btn-success">login</button>
                                </div>
                                <a href="index2.php">login sebagai administrator atau petugas</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>