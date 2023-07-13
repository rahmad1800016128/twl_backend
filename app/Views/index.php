<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Jenis Kelamin</th>
                        <th>No telp</th>
                        <th>Tgl</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    foreach ($data as $user) {
                        // var_dump($user);
                    ?>
                        <tr>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['jenis_kelamin']; ?></td>
                            <td><?= $user['no_telp']; ?></td>
                            <td><?= $user['tanggal_lahir']; ?></td>
                            <td><?= $user['alamat']; ?></td>
                            <td>
                                <a title="Edit" href="<?= base_url('produk-edit/' . $produk['id']); ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>