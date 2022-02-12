<?php

    $url = 'https://uselessfacts.jsph.pl/random.json?language=en';
    $curl = curl_init($url);
    $response = curl_exec($curl);
    curl_close($curl);
    
?>