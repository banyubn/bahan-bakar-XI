<?php
require "functions.php";

if (!isset($_POST['harga_total'])) {
    header('location: index.php');
}

$bayar = new Bayar($_POST['harga_total'], $_POST['bayar']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar | Hasil | Banyu BN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <style>
        .print {
            display: none;
        }

        @media print {
            .print {
                display: unset;
            }

            .unprint {
                display: none;
            }
        }
    </style>
</head>

<body>
    <h5 class="unprint">Terima Kasih!</h5>
    <a href="index.php" class="btn btn-primary unprint">Kemali ke Awal</a>
    <div class="container print">
        <h1>Hasil Pembayaran</h1>
        <div class="card mt-5">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Harga Total</th>
                        <td>Rp. <?php echo number_format($bayar->getHargaTotal(), 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Bayar</th>
                        <td>Rp. <?php echo number_format($bayar->getBayar(), 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Kembalian</th>
                        <td>Rp. <?php echo number_format($bayar->kembalian(), 0, ',', '.'); ?></td>
                    </tr>
                </table>
            </div>

            <script>
                window.print();
            </script>
</body>

</html>