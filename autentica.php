<?php
  $url_autenticacao = 'http://localhost:50938/oauth/token';
  $curl = curl_init($url_autenticacao);
  $client_id = 'client_id=MaisVendas';
  $grant_type = 'grant_type=password';
  $username = 'username=bernardo.dsn.erp';
  $nonce = 'nonce=55';
  $password = 'password=' . md5('bernardo.dsn.erp' . '55' . 'senhas');
  $client_secret= 'client_secret=8545fcb47cccfa74490fbc680611982e';
  $body = $client_id  . '&' .
          $grant_type . '&' .
          $username   . '&' .
          $nonce      . '&' .
          $password   . '&' .
          $client_secret;
          
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $body);

  $curl_response = curl_exec($curl);
  if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
  }
  curl_close($curl);

  $decoded = json_decode($curl_response);
  if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
  }

  echo $curl_response;
?>
