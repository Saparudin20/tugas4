<?php 

namespace App\Http\Controllers;

	class HomeController extends Controller{


		function showberanda(){
			return view('beranda');
		}

		function showproduk(){
			return view('produk');
		}

		function showkatagori(){
			return view('katagori');
		}

		function test($produk, $hargaMin=0, $hargaMax=0){
			if ($produk == 'payung'){
				echo "tampilkan produk payung";
			}elseif($produk == 'sepeda'){
				echo "produk sepeda";
			}
			echo "<br>";
			echo "Harga Min adalah $hargaMin <br>";	
			echo "Harga Max adalah $hargaMax <br>";
		}
	}

