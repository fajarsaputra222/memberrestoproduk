<!-- application/views/transaksi/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
</head>
<body>
    <h1>Daftar Transaksi</h1>
    <a href="<?= base_url('transaksi/tambahs') ?>">Tambah</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Transaction Code</th>
            <th>Transaction Date</th>
            <th>Product Code</th>
            <th>Member Code</th>
            <th>Total</th>
        </tr>

        <?php foreach ($transaksi as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->kodetransaksi ?></td>
                <td><?= $item->tanggaltransaksi ?></td>
                <td><?= $item->kodeproduk ?></td>
                <td><?= $item->kodemember ?></td>
                <td><?= $item->total ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
