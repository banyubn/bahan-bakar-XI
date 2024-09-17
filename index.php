<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar | Banyu BN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body style="background-color: #f6f6f6;">
    <div class="container-center">
        <div class="container child-center bg-white rounded shadow-lg p-5 w-50">
            <h1 class="title text-center">Bahan Bakar</h1>
            <form action="result.php" method="POST">
                <label for="jumlah_liter">Jumlah Liter : </label>
                <input type="number" name="jumlah_liter" id="jumlah_liter" class="input-text" min="0" required>
                <br>
                <label for="jenis_bahan_bakar">Jenis Bahan Bakar : </label>
                <select name="jenis_bahan_bakar" id="jenis_bahan_bakar" class="input-text" required>
                    <option value="" selected disabled hidden>Pilih Bahan Bakar</option>
                    <option value="Shell Super">Shell Super</option>
                    <option value="Shell V-Power">Shell V-Power</option>
                    <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>