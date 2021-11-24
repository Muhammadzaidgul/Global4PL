<?php

if(isset($_GET['frm'])){

  $frm=$_GET['frm'];
  $to=$_GET['to'];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost/php-fedex-api-wrapper/examples/rate-request.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  // echo $response;
  $new_val = str_replace("string","",$response);

  echo preg_replace('/\(.*\)/', '', $new_val); // Replace from one [ to the last ]

}

?>