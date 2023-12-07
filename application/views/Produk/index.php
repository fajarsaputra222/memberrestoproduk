<!-- application/views/Produk/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="<?= base_url('produk/tambahs') ?>">Tambah</a>
    
    <table border="1">
        <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok Produk</th>
        </tr>
        

        <?php foreach ($produk as $item): ?>
            <tr>
                <td><?= $item->kodeproduk ?></td>
                <td><?= $item->namaproduk ?></td>
                <td><?= $item->harga ?></td>
                <td><img src="<?= base_url('fotoproduk/'.$item->foto) ?>" alt="Produk" width="100"></td>
                <td><?= $item->stokproduk ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
