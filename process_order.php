<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $customerName = $_POST['fadil'];
    $customerPhone = $_POST['+6281245794315']; //isi pake nomornya pembeli

    

    echo "Pesanan Anda untuk $productName telah diterima. Kami akan menghubungi Anda segera.";
}
?>