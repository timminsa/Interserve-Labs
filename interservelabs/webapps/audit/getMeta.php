<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://sitmaximo.bbc-irv.co.uk/maxrest/rest/os/INTLABSMETA?_lid=timminsa&_lpwd=maximo&objectname='.$_GET['object']
));

$resp = curl_exec($curl);
print_r($resp);

curl_close($curl);
?>