<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LaundryController extends CI_Controller {
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->library('laundry');
    }

    public function index() {
        // Contoh penggunaan library Laundry
        $jenis_laundry_ani = 'Setrika Saja';
        $berat_pakaian_ani = 6.5;
        $pakaian_dalam_ani = 'pakaian dalam ani';
        $struk_ani = true;

        $ani_harga = $this->laundry->hitungHarga($jenis_laundry_ani, $berat_pakaian_ani, $pakaian_dalam_ani, $struk_ani);
        echo "Ani mengambil jenis laundry $jenis_laundry_ani dengan berat pakaian $berat_pakaian_ani kg, maka total harga yang harus Ani bayar: Rp. " . number_format($ani_harga, 0, ',', '.');

        $jenis_laundry_ina = 'Cuci dan Setrika';
        $berat_pakaian_ina = 8;
        $pakaian_dalam_ina = true;
        $struk_ina = true;

        $ina_harga = $this->laundry->hitungHarga($jenis_laundry_ina, $berat_pakaian_ina, $pakaian_dalam_ina, $struk_ina);
        echo "<br>Ina mengambil jenis laundry $jenis_laundry_ina dengan berat pakaian $berat_pakaian_ina kg yang didalamnya terdapat pakaian dalam, maka total harga yang harus Ina bayar: Rp. " . number_format($ina_harga, 0, ',', '.');

        $jenis_laundry_nia = 'Setrika Saja';
        $berat_pakaian_nia = 3.5;
        $pakaian_dalam_nia = false;
        $struk_nia = false;

        $nia_harga = $this->laundry->hitungHarga($jenis_laundry_nia, $berat_pakaian_nia, $pakaian_dalam_nia, $struk_nia);
        echo "<br>Nia ingin mengambil pakaiannya yang sudah siap di laundry, dengan berat pakaian $berat_pakaian_nia kg, akan tetapi Nia lupa membawa struk maka total harga yang harus Nia bayar: Rp. " . number_format($nia_harga, 0, ',', '.');
    }
}