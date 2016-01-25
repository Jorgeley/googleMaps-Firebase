<?php
if ($_POST){
    if ($_POST['imgLogo'])
        $img = $_POST['imgLogo'];
    if ($_POST['imgProduto'])
        $img = $_POST['imgProduto'];
    list($width, $height) = getimagesize($img);
    $image_p = imagecreatetruecolor(288, 288);
    $image = imagecreatefromjpeg($img);
    imagecopyresampled($image_p, $image, 0, 0, $_POST['x0'], $_POST['y0'], 288, 288, $_POST['w0'], $_POST['h0']);
    imagejpeg($image_p, strtolower(str_replace(" ", "", $img)), 100);
    
}else if ($_FILES){
    if ($_FILES['arquivoLogo']){
        $file = $_FILES['arquivoLogo'];
        $dir = "img/logo/";
    }
    if ($_FILES['arquivoProduto']){
        $file = $_FILES['arquivoProduto'];
        $dir = "img/produtos/";
    }
    echo copy($file['tmp_name'], $dir.$file['name']);
}
?>
