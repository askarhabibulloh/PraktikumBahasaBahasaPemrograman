<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        select{
            display : block;
        }
    </style>
</head>
<body>
<?php
echo "Pilih tanggal : <select name='tgl'>";
for ($i = 1; $i <=31 ;$i++) { 
    echo "<option value = $i>$i</option>";
}
echo"</select>";
echo "Pilih bulan : <select name='bln'>";
for ($i = 1; $i <=12 ;$i++) { 
    echo "<option value = Bulan-$i>Bulan $i</option>";
}
echo"</select>";
echo "Pilih Tahun : <select name='thn'>";
for ($i = 1980; $i <=2025 ;$i++) { 
    echo "<option value = $i>$i</option>";
}
echo"</select>";

?>
</body>
</html>