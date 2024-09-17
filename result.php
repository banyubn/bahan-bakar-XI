<?php
require 'functions.php';

if (!isset($_POST['jumlah_liter'])) {
    header('location: index.php');
}

$data = new BahanBakar($_POST['jumlah_liter'], $_POST['jenis_bahan_bakar']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar | Hasil | Banyu BN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body style="background-color: #f1f1f1;">
    <div class="container-center">
        <?php if (isset($data)) : ?>
            <div class="rounded child-center shadow-lg p-5">
                <h2>Rincian Pesanan</h2>
                <div class="mt-4">
                    <h6>Jenis Bahan Bakar: <strong><?= $data->getJenisBahanBakar() ?></strong></h6>
                    <h6>Jumlah Liter: <strong><?= $data->getJumlahLiter() ?></strong> Liter</h6>
                    <h6>Harga per Liter: <strong><?= $data->getHargaPerLiter() ?></strong></h6>
                    <h6>Harga Dasar: <strong>Rp.<?= $data->getHargaDasar() ?></strong></h6>
                    <h6>PPN (<?= $data->getPpn() ?>%): <strong><?= $data->getPajak() ?></strong></h6>
                    <br>
                    <h6>Total Harga yg harus di bayar: <br><br><strong class="fs-4">Rp.<?= number_format($data->getHargaTotal(), 0, ".", "."); ?></strong></h6>
                </div>

                <form action="bill.php" method="POST" class="mt-5">
                    <label for="bayar">Masukkan nominal terlebih dahulu : </label>
                    <input type="hidden" name="harga_total" value="<?= $data->getHargaTotal() ?>">
                    <input type="number" name="bayar" id="bayar" class="form-control" placeholder="nominal" required>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary fw-bold" onclick="checkValue(<?= $data->getHargaTotal() ?>)">Bayar</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <script>
        function checkValue(harga_total) {
            let value_bayar = document.getElementById('bayar');

            if (value_bayar.value < harga_total) {
                value_bayar.setCustomValidity("Nominal uang yang kamu input kurang");
            } else {
                value_bayar.setCustomValidity("");
            }
        }
    </script>
</body>

</html>