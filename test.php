<?php 
$siswa[1] = "naufal";
$siswa[2] = "yusron";
$siswa[3] = "dll";

$siswa = ["naufal","yusron","dll"];
var_dump($siswa);


$siswa["nama"] = "NAUFAL";
$siswa["nama"] = "YUSRON";

$siswa["kelas"] = "A 12";
$siswa["kelas"] = "B 12";

foreach($siswa as $value){
	echo $value . " ";
}

$siswa["nama"][0] = "NAUFAL";
$siswa["nama"][1] = "YUSRON";

$siswa["kelas"][0] = "A 12";
$siswa["kelas"][1] = "B 12";

foreach ($siswa as $key => $value) {
echo $value[1] . " ";
}

$siswa = "NAUFAL";
if(empty($siswa)){
	echo "Tidak Ada Isi";
}
else {
	echo "Ada Isi";
}

$siswa = NULL;
$siswa = "";
$siswa = array();

if(isset($siswa)){
	echo "Ada Isi";
}
else {
	echo "Tidak Ada Isi";
}
$siswa = array(
'kelas' => "A12",
'nama' => "Rahmad");

unset($siswa['nama']);
var_dump($siswa);


$siswa = array(
'kelas' => "A12",
'nama' => "Rahmad");
if(is_array($siswa)){
	echo "INI ARRAY";
}else{
	echo "INI BUKAN ARRAY";
}

echo substr("Hello world",0,7);
echo str_replace("world", "Peter", "Hello world!");
$str = "Hello world. it's beatiful day";

print_r(explode(" ",$str));

$arr = array('Hello','World !','Beatiful','Day!');
echo implode(" ",$arr);

$explode = "Alvan";
$strtolower = strtolower($explode);
echo $strtolower ." ";
$strtolower = strtoupper($explode);
echo $strtolower." ";
$strtolower = ucfirst($explode);
echo $strtolower." ";
$strtolower = ucwords($str);
echo $strtolower." ";


$siswa = array(
'kelas'=> "A12",
'nama' => "Rahmad");
if (array_key_exists("kelas", $siswa)){
	echo "ada key kelas";
}

$siswa = array(
	'kelas' => "A12",
    'nama' => "Rahmad");
echo json_encode($siswa);

$siswa = array(
	'kelas' => "A12",
    'nama' => "Rahmad");
$json = json_encode($siswa);
var_dump(json_decode($json));


?>



<div class="jumboto">

