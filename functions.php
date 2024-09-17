<?php

class BahanBakar
{
    private
        $list_harga = [
            'Shell Super' => ['harga' =>  15_400],
            'Shell V-Power' => ['harga' => 16_000],
            'Shell V-Power Diesel' => ['harga' => 18_500],
            'Shell V-Power Nitro' => ['harga' => 16_500],
        ],
        $ppn = 10, // dalam persen (%)
        $jumlah_liter,
        $jenis_bahan_bakar,
        $harga_dasar,
        $harga_total,
        $pajak;

    public function __construct($jumlah_liter, $jenis_bahan_bakar)
    {
        $this->jumlah_liter = $jumlah_liter;
        $this->jenis_bahan_bakar = $jenis_bahan_bakar;
        $this->harga_dasar = $this->jumlah_liter * $this->list_harga[$this->jenis_bahan_bakar]['harga'];
        $this->pajak = $this->harga_dasar * $this->ppn / 100;
        $this->harga_total = $this->harga_dasar + $this->pajak;
    }

    public function getHargaTotal()
    {
        return $this->harga_total;
    }

    public function getJenisBahanBakar()
    {
        return $this->jenis_bahan_bakar;
    }

    public function getJumlahLiter()
    {
        return $this->jumlah_liter;
    }

    public function getHargaDasar()
    {
        return number_format($this->harga_dasar, 0, ".", ".");
    }

    public function getHargaPerLiter()
    {
        return number_format($this->list_harga[$this->jenis_bahan_bakar]['harga'], 0, ".", ".");
    }

    public function getPpn()
    {
        return $this->ppn;
    }

    public function getPajak()
    {
        return number_format($this->pajak, 0, ".", ".");
    }
}

class Bayar
{
    private
        $harga_total,
        $bayar;

    public function __construct($harga_total, $bayar)
    {
        $this->harga_total = $harga_total;
        $this->bayar = $bayar;
    }

    public function kembalian()
    {
        return $this->bayar - $this->harga_total;
    }

    public function getHargaTotal()
    {
        return $this->harga_total;
    }

    public function getBayar()
    {
        return $this->bayar;
    }
}
