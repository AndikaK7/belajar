<?php 
// $i = "Halo";
// printf(" $i ini di print");
// echo "$i ini di echo" , 1 , 2, 4,5, " Sampai jumpa";
// Beda print sama echo adalah, echo bisa dipakein koma (,) tapi kalo print cuman bisa 1
// ----------------------------------------------------------
// $a = "1";
// $b = "2";
// $c = "3";
// $d = $a + $c;
// echo ($a  > $b ? ($c < $d ? 'Sedikit':'Dikita') : ($c < $d ? 'Banyak':'Dikita'));
// if sebaris!!
// for ($i=0; $i <= 100 ; $i++) { 
// 	echo ($i % 5 == 0 ? " $i Five </br>": ($i % 6 ==0 ? "$i Buzz </br>" : "$i Five Buzz </br>"));
// }
// ----------------------------------------------------------
// $var = 15;
// function addit(){
// 	GLOBAL $var;
// 	$var = $var + 20;
// 	echo "$var";

// }
// addit();
//VARIABLE GLOBAL
// ----------------------------------------------------------
// $var = 0;
// function keep(){
// 	STATIC $var = 0;
// 	$var++;
// 	echo $var;
// 	print "<br>";
// }
// for($i =0 ; $i < 100; $i++){
// 	keep();
// }
// ----------------------------------------------------------
// $i = 0;
// while($i < 10){
// 	$i++;
// 	if($i == 3){
// 		break;

// 	}
// 	echo $i." ";
// }
// echo "Loop Stopped at i = $i";
// ----------------------------------------------------------
// class laptop{
// 	public $pemilik_laptop="Andi";
// 	public $merk_laptop;
// 	public $ukuran_laptop;

// 	public function hidupkan_laptop(){
// 		return "Hidupkan Laptop $this->pemilik";
// 	}

// 	public function matikan_laptop(){
// 		return "matikan Laptop $this->pemilik";
// 	}
// }
// $laptop_andi = new laptop();
// $laptop_andi->pemilik="Andi";
// $laptop_arie = new laptop();
// $laptop_arie->pemilik="Arie";
// echo $laptop_arie->pemilik;
//-----------------------------------------------------------
// class laptop{
// 	private $pemilik;
// 	private $merk;
// 	public function __construct($pemilik, $merk){
// 		$this->pemilik = $pemilik;
// 		$this->merk = $merk; 
// 	}
// 	public function hidupkan_laptop(){
// 		return "Hidupkan laptop $this->merk mu $this->pemilik";
// 	}

	
// }

// $laptop_andi = new laptop("Andi","Lenovo");
// echo "<br>";
// echo $laptop_andi->hidupkan_laptop();
// echo "</br>";
// unset($laptop_andi);
// echo "<br>";
// $laptop_dika = new laptop("Dika","Dell");
// echo $laptop_dika->hidupkan_laptop();
// Belajar Class
//----------------------------------------------------------
// class komputer{
// 	public $merk;
// 	public $processor;
// 	public $memory;

// 	public function beli_komputer(){
// 		echo "Beli baru komputer";
// 	}
// }

// class laptop extends komputer{
// 	public function lihat_spec(){
// 		return "merk : $this->merk, processor: $this->processor, memory $this->memory";
// 	}
// }
// $laptop_baru = new laptop();
// $laptop_baru->merk = "Lenovo";
// $laptop_baru->processor ="Intel i5";
// $laptop_baru->memory = "2 GB";
// echo $laptop_baru->lihat_spec();
//----------------------------------------------------------
// class komputer{
// 	public function  lihat_spec(){
// 		return "Spec komputer 1";
// 	}
// }
// class laptop extends komputer{
// 	public function lihat_spec(){
// 		return "spec komputer 2";
// 	}
// }

// $komputer
$array = array(
          'Miee'=>'Goreng',
          'Mieeee'=>'Rebus',
          'Mie'=>'Ifumie');
      
      foreach ($array as $a=>$b){
          echo $a. ' '. $b . "</br>";
          };

?>		