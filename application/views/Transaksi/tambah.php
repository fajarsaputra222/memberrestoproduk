<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi</title>
</head>
<body>
    <main>
        <h3>Tambah Data Transaksi</h3>
        <br>
        <?php echo form_open('transaksi/tambah_save'); ?>
            <div class="form-group row">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Kode Transaksi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" required="required" />
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggaltransaksi" class="col-sm-2 col-form-label">Tanggal transaksi</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggaltransaksi" id="tanggaltransaksi" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="kodeproduk" class="col-sm-2 col-form-label">Kode Produk</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="kodeproduk" id="kodeproduk" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="kodemember" class="col-sm-2 col-form-label">Kode Member</label>
                <div class="col-sm-5">
                    <input type="text" name="kodemember" id="kodemember">
                </div>
            </div>
            <div class="form-group row">
                <label for="total" class="col-sm-2 col-form-label">total</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="total" id="total" required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-7 offset-sm-2">
                    <input class="btn btn-primary" type="submit" value="Simpan" id="submit" name="submit" />
                    <a class="btn btn-danger" href="<?= base_url('transaksi') ?>">Kembali</a>
                </div>
            </div>
        <?php echo form_close(); ?>
    </main>
</body>
</html>
