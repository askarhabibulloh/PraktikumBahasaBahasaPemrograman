<?php
$user = 'guest';
if($user == 'admin'){
    echo "selamat datang admin";
} else if($user == 'user'){
    echo "Selamat datang user";
}else if($user == 'guest'){
    echo 'selamat datang tamu';
}else{
    echo"maaf,saya tidak mengenal anda";
}
?>