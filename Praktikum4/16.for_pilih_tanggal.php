<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    Pilih tanggal :
    <select name="tgl">
<?php
for ($i = 1; $i <=31 ;$i++) { 
    echo "<option value = $i>$i</option>";
}
?>
</select>
</body>
</html>