<?php
$b = 0;
for ($x = 0; $x <= 0; $x++)
{
    $b++;

    $output = shell_exec('curl -H \"Accept: application/json\" -H \"Content-type: application/json\" -X POST -d \' {\"tester\":{\"email\":\"justin+'.$b++.'@prefinery.com\",\"status\":\"applied\",\"profile\":{\"first_name\": \"Justin\", \"last_name\": \"Britten\"},\"responses\":{\"response\":[{\"question_id\":\"23874\", \"answer\":\"a text response\"},{\"question_id\":\"23871\", \"answer\":\"1\"},{\"question_id\":\"23872\", \"answer\":\"0,2\"},{\"question_id\":\"23873\", \"answer\":\"9\"}]}}}\' https://account.prefinery.com/api/v2/betas/1/testers.json?api_key=secret');
    echo '$output';
}
?>