<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
</head>
<body>
    <main>
        <h3>Tambah Data Produk</h3>
        <br>
        <?php echo form_open_multipart('produk/tambah_save'); ?>
            <div class="form-group row">
                <label for="kodeproduk" class="col-sm-2 col-form-label">Kode Produk</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="kodeproduk" name="kodeproduk" required="required" />
                </div>
            </div>
            <div class="form-group row">
                <label for="namaproduk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="namaproduk" id="namaproduk" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="harga" id="harga" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-5">
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Stok Produk</label>
                <div class="col-sm-5">
                    <input type="number" name="stokproduk" id="stokproduk">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-7 offset-sm-2">
                    <input class="btn btn-primary" type="submit" value="Simpan" id="submit" name="submit" />
                    <a class="btn btn-danger" href="<?= base_url('produk') ?>">Kembali</a>
                </div>
            </div>
        <?php echo form_close(); ?>
    </main>
</body>
</html>
