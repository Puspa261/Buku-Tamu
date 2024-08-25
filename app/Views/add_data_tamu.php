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
        <h1> Tambah Daftar Tamu </h1>
        <form method="post" action="<?= base_url('proses_add_tamu') ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Tanggal Berkunjung </label>
                <input type="text" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" placeholder="Tanggal Berkunjung">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nama </label>
                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Alamat </label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nomor Telepon </label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Keperluan </label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </form>
    </div>
</body>

</html>