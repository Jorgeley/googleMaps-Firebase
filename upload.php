<?php
if ($_POST){
    if ($_POST['imgLogo']){
        list($width, $height) = getimagesize($_POST['imgLogo']);
        $image_p = imagecreatetruecolor(288, 288);
        $image = imagecreatefromjpeg($_POST['imgLogo']);
        imagecopyresampled($image_p, $image, 0, 0, $_POST['x0'], $_POST['y0'], 288, 288, $_POST['w0'], $_POST['h0']);
        imagejpeg($image_p, $_POST['imgLogo'], 100);
    }
}else if ($_FILES)
        echo copy($_FILES['arquivoLogo']['tmp_name'], 'img/logo/'.$_FILES['arquivoLogo']['name']);

?>
