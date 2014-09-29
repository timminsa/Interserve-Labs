<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://mobsitmaximo.bbc-irv.co.uk/maxrest/rest/os/MXACHARTOFACCT?_lid=timminsa&_lpwd=maximo'
));

$resp = curl_exec($curl);
print_r($resp);

curl_close($curl);
?>