<?php


$y = 0;
$b = 0;
$url = 'varapi';

for ($x = 0; $x <= $y; $x++) {
    ++$b;
    $params = "{\"tester\":{\"email\":\"betauser+$b@adcade.com\",\"status\": \"applied\"}}";

    echo exec("curl -H \"Accept: application/json\" -H \"Content-type: application/json\"  -X POST -d '$params' $url");

}
