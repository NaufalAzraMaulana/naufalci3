<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tabung  {
    function volume($jari,$tinggi) {
        $phi = 3.14;
        echo"Phi" .$phi;
        echo "<br/>";
        echo"Jari jari" .$jari;
        echo "<br/>";
        echo"Tinggi" .$tinggi;
        echo "<br/>";
        $volume = $phi*($jari*$jari)*$tinggi;
        echo "volume tabung adalah " .$volume;
       } 
       function luas($jari,$tinggi) {
        $phi = 3.14;
        $luas = 2*$phi*$jari*($jari+$tinggi);
        echo "Luas Permukaan adalah " .$luas;
       } 
       function luasselimut($jari,$tinggi) {
        $phi = 3.14;
        $luas = 2*$phi*$jari*$tinggi;
        echo "Luas Selimut adalah " .$luas;
       } 
}