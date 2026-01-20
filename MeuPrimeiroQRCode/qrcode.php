<?php 
    $data = urldecode('https://github.com/Luiz-061/'); //exemplo
    $link = urldecode('https://publicapis.io/qr-code-api-api'); //Link da API

    $url = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={$data}"; 
    
    //Mude a saída nesta variável $link, ou pode ser colocando este array associativo na linha 2 ou pode até criar uma outra variável se quiser.

?>

<img style="float: center;" src="<?= $url ?>" alt="QrCode">

<p>
   Meu Primeiro QR code
</p>

