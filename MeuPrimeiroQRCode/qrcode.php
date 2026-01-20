<?php 
    $dados = [
        'Nome' => 'Luiz',
        'Idade' => 21,
        'Profissão' => 'PHP Developer'
    ];
    $link = urldecode('https://publicapis.io/qr-code-api-api');

    $url = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={$link}"; 
    
    //Mude a saída nesta variável $link, ou pode ser colocando este array associativo na linha 2 ou pode até criar uma outra variável se quiser.

?>

<img style="float: center;" src="<?= $url ?>" alt="QrCode">

<p>
   Qr code da API
</p>
