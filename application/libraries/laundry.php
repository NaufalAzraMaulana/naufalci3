<?php

// application/libraries/Laundry.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry {
    public function hitungHarga($jenis_laundry, $berat_pakaian, $pakaian_dalam = false, $struk = true) {
        
        $harga_per_kg_setrika = 3500;
        $harga_per_kg_cuci_setrika = 5000;
        $cas_pakaian_dalam = 5000;
        $denda_tanpa_struk = 10000;

        if ($jenis_laundry === 'Setrika Saja') {
            $total_harga = $harga_per_kg_setrika * $berat_pakaian;
        } elseif ($jenis_laundry === 'Cuci dan Setrika') {
            $total_harga = $harga_per_kg_cuci_setrika * $berat_pakaian;
        } else {
            return 'Jenis laundry tidak valid.';
        }

        if ($pakaian_dalam) {
            $total_harga += $cas_pakaian_dalam;
        }

        if (!$struk) {
            $total_harga += $denda_tanpa_struk;
        }

        return $total_harga;
    }
}
