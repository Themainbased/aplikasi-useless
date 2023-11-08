<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Gaya input ketika dalam fokus */
        .form-control {
            border: 2px solid #ccc;
            /* Warna border awal */
            transition: border 0.3s, background-color 0.3s, color 0.3s, font-size 0.3s;
            /* Efek transisi untuk beberapa properti */
        }

        .form-control:focus {
            border-color: #91C8E4;
            /* Ganti warna border saat dalam fokus */
            color: #333;
            /* Ganti warna teks saat dalam fokus */
            font-size: 16px;
            /* Ganti ukuran teks saat dalam fokus */
        }
    </style>

</head>
<body>
    <div class="card mt-5">
        <div class="card-header">
            <h1>Pencarian penerbit</h1>
        </div>
        <div class="container">
            <div class="wrapper mt-4">
                <form method="post" class="d-flex" action="<?php echo site_url('Welcome/pencarianpenerbit'); ?>">
                    <input type="text" name="cari" placeholder="Judul Buku" class="form-control me-2">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                    <a href="<?php echo site_url('Welcome/penerbit')?>" class="btn btn-success mr-3">Balik Ke Input</a>
                </form>
                </form>
                <table class="table table-bordered table-hover mt-2">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($GetCariPenerbit) && !empty($GetCariPenerbit)) {
                            foreach ($GetCariPenerbit as $penerbit) { ?>
                                <tr>
                                    <td><?php echo $penerbit->id_penerbit; ?></td>
                                    <td><?php echo $penerbit->nama; ?></td>
                                    <td><?php echo $penerbit->alamat; ?></td>
                                    <td><?php echo $penerbit->kota; ?></td>
                                    <td><?php echo $penerbit->telepon; ?>
                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="2">Tidak ada hasil pencarian.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>