<?php require('../Componentes/LayoutTop.php'); ?>
<?php require('../Componentes/Nav.php'); ?>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    function getsslPage($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    $bot_token = "5113699879:AAE8TihqCdC58zwiQ5M5jsYmMGVQlMhbKnA";

    $data = [
        'chat_id' => '1601132176',
        'text' => 'Hemos recibido una nueva solicitud de sugerencia de {nombre} los siguientes datos:{nombre} {telefono}
        y un comentario:  {comentario}',
    ];
    $response = getsslPage("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));

    echo $response;


    ?>


<?php require('../Componentes/LayoutBot.php'); ?>