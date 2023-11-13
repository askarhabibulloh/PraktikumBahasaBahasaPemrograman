<?php

//Muhammad Askar Habibulloh 
//NIM 22106050031

function nomor($s){
    echo "<h2> Nomor ".$s."</h2>";
}


$doc = "Bagian pertama didalam cerpen adalah abstrak yang sifatnya opsional. Tidak semua bentuk karya bentuk karya sastra harus disertai abstrak. Abstrak merupakan bagian dari cerpen yang memuat inti dari sebuah cerita atau ringkasan pendeknya. Abstrak ini biasanya hanya terdiri dari beberapa kalimat saja untuk membuka cerpen atau sebagai pengantar saja. Bagian ini berguna untuk memudahkan pembaca untuk sedikit lebih memahami kisah yang dituliskan dalam cerpen sebab sudah disampaikan ringkasan singkatnya.";

//1
nomor("Satu");
$ldoc = strtolower($doc);
echo $ldoc;


//2
nomor("Dua");
$doc_perkalimat = explode(". ",$doc);
print_r($doc_perkalimat);
foreach ($doc_perkalimat as $i){
    echo "<p>".$i."</p>";
}


//3
nomor("Tiga");
$count = 0;
foreach($doc_perkalimat as $j){
    $doc_perkata[$count]=explode(" ",$j);
    print_r($doc_perkata[$count]);
    $count++;
    echo "<br><br>";
}


//4
nomor("Empat");
$j=0;
$jumlahkatatotal =0;
for($i = 1; $i <=count($doc_perkalimat);$i++){
   echo "Jumlah kata dalam kalimat ke ".$i." adalah ".count($doc_perkata[$j])."<br>";
   $jumlahkatatotal += count($doc_perkata[$j]);
   $j++;
}

//5
$j = 0;
nomor("Lima");
echo "Jumlah kata dalam variabel doc : ".$jumlahkatatotal."<br>";
for($i =1;$i<=count($doc_perkalimat);$i++){
    echo "Presentase kalimat ke ".$i." adalah ". ((count($doc_perkata[$j])/$jumlahkatatotal)*100)." Persen";
    $j++;
    echo"<br>";
}