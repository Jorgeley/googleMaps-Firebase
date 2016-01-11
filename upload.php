<?php
if ($_POST){
    echo "post";
    if ($_POST['img']){
        echo "recorta";
        $img = new Img(
            1, //qtd imgs
            $_POST, //post of hidden coordenates
            array($_POST['img']), //image address
            $_POST['img'], //relative image path
            '/var/www/html/nasuakz/img/logo/', //absolute image path
            144, //weight cut
            144, //height cut
            $_POST['img'] //image identifier, Ex: $id.jpg (one image) OR $id/1.jpg, $id/2.jpg (many images)
        );
        $img->recorta();
    }
}else if ($_FILES){
        echo copy($_FILES['arquivoLogo']['tmp_name'], 'img/logo/'.$_FILES['arquivoLogo']['name']);
    }else echo "nada";

?>