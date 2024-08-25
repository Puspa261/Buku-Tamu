<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="container">
        <h1> Daftar Buku Tamu </h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col"> Nomor </th>
                    <th scope="col"> Tanggal Berkunjung </th>
                    <th scope="col"> Nama Tamu </th>
                    <th scope="col"> Alamat </th>
                    <th scope="col"> No.Telepon </th>
                    <th scope="col"> Keperluan </th>
                    <th colspan="2" scope="colgroup"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($all_data_tamu as $tamu) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $tamu->tgl_berkunjung; ?></td>
                        <td><?= $tamu->nama_tamu; ?></td>
                        <td><?= $tamu->alamat; ?></td>
                        <td><?= $tamu->no_hp; ?></td>
                        <td><?= $tamu->keperluan; ?></td>
                        <td> <a href="<?= base_url('edit_data_tamu') . '/' . $tamu->id ?>" class="btn btn-info btn-sm">Edit</a> </td>
                        <td> <a href="<?= base_url('delete_data_tamu') . '/' . $tamu->id ?>" class="btn btn-info btn-sm">Hapus</a></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="<?= base_url('add_data_tamu') ?>" class="btn btn-primary">+ Tambah Data Tamu</a>
    </div>
</body>

</html>